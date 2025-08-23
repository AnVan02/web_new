<?php

// Hàm kiểm tra rate limiting để tránh spam
function checkRateLimit($email, $phone = '') {
    $cacheDir = sys_get_temp_dir() . '/email_cache/';
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0777, true);
    }
    
    $emailHash = md5($email);
    $phoneHash = !empty($phone) ? md5($phone) : '';
    $cacheFile = $cacheDir . $emailHash . '.json';
    $phoneCacheFile = !empty($phoneHash) ? $cacheDir . $phoneHash . '_phone.json' : '';
    
    $currentTime = time();
    $timeLimit = 300; // 5 phút
    $maxAttempts = 3; // Tối đa 3 email trong 5 phút
    
    // Kiểm tra theo email
    $emailData = [];
    if (file_exists($cacheFile)) {
        $emailData = json_decode(file_get_contents($cacheFile), true);
        
        // Xóa các attempt cũ
        $emailData['attempts'] = array_filter($emailData['attempts'], function($time) use ($currentTime, $timeLimit) {
            return ($currentTime - $time) <= $timeLimit;
        });
        
        if (count($emailData['attempts']) >= $maxAttempts) {
            return false; // Đã vượt quá giới hạn
        }
    }
    
    // Kiểm tra theo số điện thoại (nếu có)
    if (!empty($phoneCacheFile)) {
        $phoneData = [];
        if (file_exists($phoneCacheFile)) {
            $phoneData = json_decode(file_get_contents($phoneCacheFile), true);
            
            // Xóa các attempt cũ
            $phoneData['attempts'] = array_filter($phoneData['attempts'], function($time) use ($currentTime, $timeLimit) {
                return ($currentTime - $time) <= $timeLimit;
            });
            
            if (count($phoneData['attempts']) >= $maxAttempts) {
                return false; // Đã vượt quá giới hạn
            }
        }
    }
    
    // Ghi lại attempt mới
    $emailData['attempts'][] = $currentTime;
    file_put_contents($cacheFile, json_encode($emailData));
    
    if (!empty($phoneCacheFile)) {
        $phoneData['attempts'][] = $currentTime;
        file_put_contents($phoneCacheFile, json_encode($phoneData));
    }
    
    return true;
}

// Hàm validate dữ liệu đầu vào nghiêm ngặt
function validateOrderData($data) {
    $errors = [];
    
    // Validate email
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email không hợp lệ';
    }
    
    // Validate phone
    if (empty($data['phone']) || !preg_match('/^[0-9+\-\s()]{10,15}$/', $data['phone'])) {
        $errors[] = 'Số điện thoại không hợp lệ';
    }
    
    // Validate name
    if (empty($data['name']) || strlen($data['name']) < 2 || strlen($data['name']) > 100) {
        $errors[] = 'Tên phải từ 2-100 ký tự';
    }
    
    // Validate address
    if (empty($data['address']) || strlen($data['address']) < 10 || strlen($data['address']) > 500) {
        $errors[] = 'Địa chỉ phải từ 10-500 ký tự';
    }
    
    // Kiểm tra spam patterns trong note
    if (!empty($data['note'])) {
        $spamPatterns = [
            '/http[s]?:\/\/[^\s]+/i', // URLs
            '/www\.[^\s]+/i', // WWW links
            '/<script/i', // Script tags
            '/onclick/i', // onclick events
            '/javascript:/i', // Javascript protocol
        ];
        
        foreach ($spamPatterns as $pattern) {
            if (preg_match($pattern, $data['note'])) {
                $errors[] = 'Ghi chú chứa nội dung không được phép';
                break;
            }
        }
    }
    
    return $errors;
}

// Hàm kiểm tra blacklist email/phone
function isBlacklisted($email, $phone = '') {
    $blacklistFile = __DIR__ . '/blacklist.json';
    
    if (!file_exists($blacklistFile)) {
        return false;
    }
    
    $blacklist = json_decode(file_get_contents($blacklistFile), true);
    
    // Kiểm tra email
    if (in_array($email, $blacklist['emails'] ?? [])) {
        return true;
    }
    
    // Kiểm tra phone
    if (!empty($phone) && in_array($phone, $blacklist['phones'] ?? [])) {
        return true;
    }
    
    // Kiểm tra domain email
    $emailDomain = substr(strrchr($email, "@"), 1);
    if (in_array($emailDomain, $blacklist['domains'] ?? [])) {
        return true;
    }
    
    return false;
}

// Hàm log hoạt động để monitoring
function logEmailActivity($orderId, $email, $phone, $status) {
    $logFile = __DIR__ . '/logs/email_activity.log';
    $logDir = dirname($logFile);
    
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }
    
    $logData = [
        'timestamp' => date('Y-m-d H:i:s'),
        'order_id' => $orderId,
        'email' => $email,
        'phone' => $phone,
        'status' => $status,
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ];
    
    file_put_contents($logFile, json_encode($logData) . "\n", FILE_APPEND | LOCK_EX);
}

// Hàm xử lý dữ liệu order dạng text có emoji và specs
function processOrderData($order) {
    // Loại bỏ HTML tags và script
    $cleanOrder = strip_tags($order);
    $cleanOrder = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $cleanOrder);
    
    // Tách thành các dòng dựa trên pattern
    $formattedOrder = parseProductSpecs($cleanOrder);
    
    return $formattedOrder;
}

// Parse thông tin sản phẩm từ text (giữ nguyên như cũ)
function parseProductSpecs($orderText) {
    $output = '';
    
    // Pattern để tách các thông tin spec
    $patterns = [
        'CPU:' => '🔧',
        'MAIN:' => '🔧', 
        'VGA:' => '🎮',
        'RAM:' => '💾',
        'SSD:' => '💿',
        'CASE:' => '📦',
        'PSU:' => '⚡',
        'Hệ Điều Hành:' => '💻',
        'Phụ Kiện:' => '🖱️',
        'Tản Nhiệt:' => '❄️'
    ];
    
    // Tách dựa trên các keyword spec
    $specs = [];
    $currentSpec = '';
    
    // Tìm tên sản phẩm (dòng đầu tiên thường là tên)
    $lines = preg_split('/(?=CPU:|MAIN:|VGA:|RAM:|SSD:|CASE:|PSU:|Hệ Điều Hành:|Phụ Kiện:|Tản Nhiệt:)/', $orderText);
    
    $productName = trim($lines[0]);
    if (!empty($productName)) {
        // Loại bỏ emoji nếu có ở đầu
        $productName = preg_replace('/^[^\w\s]+\s*/', '', $productName);
        $output .= '<div style="background: #ff1d1d; color: white; padding: 15px; border-radius: 5px; margin-bottom: 15px; text-align: center;">';
        $output .= '<h3 style="margin: 0;">🖥️ ' . htmlspecialchars(trim($productName)) . '</h3>';
        $output .= '</div>';
    }
    
    // Xử lý từng spec
    foreach ($patterns as $keyword => $icon) {
        if (preg_match('/' . preg_quote($keyword) . '\s*([^A-Z]*?)(?=[A-Z][A-Z]+:|$)/s', $orderText, $matches)) {
            $specValue = trim($matches[1]);
            if (!empty($specValue)) {
                $output .= '<div style="background: #f8f9fa; padding: 12px; margin: 8px 0; border-left: 4px solid #ff1d1d; border-radius: 3px;">';
                $output .= '<strong style="color: #ff1d1d;">' . $icon . ' ' . $keyword . '</strong> ';
                $output .= htmlspecialchars($specValue);
                $output .= '</div>';
            }
        }
    }
    
    // Tìm thông tin số lượng và giá
    if (preg_match('/Số lượng:\s*x\s*(\d+)/', $orderText, $matches)) {
        $quantity = $matches[1];
        $output .= '<div style="background: #e8f5e8; padding: 12px; margin: 15px 0; border-radius: 5px; text-align: center;">';
        $output .= '<strong style="color: #28a745;">📊 Số lượng: ' . $quantity . ' sản phẩm</strong>';
        $output .= '</div>';
    }
    
    // Tìm giá tiền (pattern linh hoạt)
    if (preg_match('/(\d{1,3}(?:\.\d{3})*(?:,\d+)?)\s*(?:đ|VND|vnđ)/i', $orderText, $matches)) {
        $price = $matches[1];
        $output .= '<div style="background: #ff1d1d; color: white; padding: 15px; border-radius: 5px; margin-top: 15px; text-align: center;">';
        $output .= '<strong style="font-size: 18px;">💰 Tổng cộng: ' . $price . 'đ</strong>';
        $output .= '</div>';
    }
    
    return $output ?: formatSimpleOrder($orderText);
}

// Hàm backup: format đơn giản nếu parse phức tạp không work (giữ nguyên như cũ)
function formatSimpleOrder($orderText) {
    $lines = explode("\n", $orderText);
    $output = '';
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line)) {
            // Nếu là dòng có emoji ở đầu (tên sản phẩm)
            if (preg_match('/^[^\w\s]/', $line)) {
                $output .= '<div style="background: #ff1d1d; color: white; padding: 12px; border-radius: 5px; margin: 10px 0; text-align: center;">';
                $output .= '<strong>' . htmlspecialchars($line) . '</strong>';
                $output .= '</div>';
            }
            // Nếu chứa thông tin spec
            elseif (preg_match('/(CPU|MAIN|VGA|RAM|SSD|CASE|PSU):/i', $line)) {
                $output .= '<div style="background: #f8f9fa; padding: 10px; margin: 5px 0; border-left: 4px solid #ff1d1d;">';
                $output .= '• ' . htmlspecialchars($line);
                $output .= '</div>';
            }
            // Thông tin khác
            else {
                $output .= '<p style="margin: 5px 0;">' . htmlspecialchars($line) . '</p>';
            }
        }
    }
    
    return $output;
}

// Hàm gửi email đã được cập nhật với chống spam
function sendOrderEmail($orderId, $order, $order_date, $name, $phone, $shipping, $email, $address, $note) {
    // 1. Validate dữ liệu đầu vào
    $validationErrors = validateOrderData([
        'email' => $email,
        'phone' => $phone,
        'name' => $name,
        'address' => $address,
        'note' => $note
    ]);
    
    if (!empty($validationErrors)) {
        logEmailActivity($orderId, $email, $phone, 'VALIDATION_FAILED: ' . implode(', ', $validationErrors));
        return ['success' => false, 'error' => 'Dữ liệu không hợp lệ: ' . implode(', ', $validationErrors)];
    }
    
    // 2. Kiểm tra blacklist
    if (isBlacklisted($email, $phone)) {
        logEmailActivity($orderId, $email, $phone, 'BLACKLISTED');
        return ['success' => false, 'error' => 'Email hoặc số điện thoại đã bị chặn'];
    }
    
    // 3. Kiểm tra rate limiting
    if (!checkRateLimit($email, $phone)) {
        logEmailActivity($orderId, $email, $phone, 'RATE_LIMITED');
        return ['success' => false, 'error' => 'Đã gửi quá nhiều email. Vui lòng thử lại sau 5 phút'];
    }
    
    $mail = new PHPMailer(true);
    try {
        // Làm sạch dữ liệu đầu vào
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
        $note = strip_tags(htmlspecialchars($note, ENT_QUOTES, 'UTF-8'));
        
        // Xử lý dữ liệu order
        $processedOrder = processOrderData($order);

        // Cấu hình SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.rosacomputer.ai';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@rosacomputer.ai';
        $mail->Password = 'Rosacomputer@1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // Thêm headers chống spam
        $mail->addCustomHeader('X-Priority', '3');
        $mail->addCustomHeader('X-MSMail-Priority', 'Normal');
        $mail->addCustomHeader('X-Mailer', 'PHP/' . phpversion());
        $mail->addCustomHeader('List-Unsubscribe', '<mailto:unsubscribe@rosacomputer.ai>');
        
        $mail->setFrom('noreply@rosacomputer.ai', 'ROSA COMPUTER AI');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('support@rosacomputer.ai', 'ROSA COMPUTER AI');
        $mail->isHTML(true);
        $mail->Subject = "Xác nhận đơn hàng #$orderId - ROSA Computer";

        $mail->Body = '
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
            
            <div style="text-align: center; margin-bottom: 30px;">
                <img src="https://rosacomputer.vn/assets/images/rosa.png" alt="ROSA Computer" style="max-width: 150px;">
                <h2 style="color: #ff1d1d; margin: 20px 0;">Xin chào ' . $name . '</h2>
                <p style="color: #4CAF50; font-weight: bold; font-size: 16px;">🎉 Đặt hàng thành công tại ROSA Computer!</p>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="color: #ff1d1d; margin-top: 0; border-bottom: 2px solid #ff1d1d; padding-bottom: 5px;">📋 THÔNG TIN ĐƠN HÀNG</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold;">Mã đơn hàng:</td>
                        <td style="padding: 8px 0; color: #ff4540; font-weight: bold;">#' . $orderId . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0; font-weight: bold;">Ngày đặt hàng:</td>
                        <td style="padding: 8px 0; color: #ff4540;">' . $order_date . '</td>
                    </tr>
                </table>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
                <h3 style="color: #ff1d1d; margin-top: 0; border-bottom: 2px solid #ff1d1d; padding-bottom: 5px;">👤 THÔNG TIN KHÁCH HÀNG</h3>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold; width: 30%;">Họ tên:</td>
                        <td style="padding: 5px 0;">' . $name . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold;">Điện thoại:</td>
                        <td style="padding: 5px 0;">' . $phone . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold;">Email:</td>
                        <td style="padding: 5px 0;">' . $email . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold;">Địa chỉ:</td>
                        <td style="padding: 5px 0;">' . $address . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; font-weight: bold;">Thanh toán:</td>
                        <td style="padding: 5px 0;">' . $shipping . '</td>
                    </tr>
                </table>
            </div>

            <div style="background: #ffffff; border: 2px solid #ff1d1d; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
                <h3 style="color: #ff1d1d; margin-top: 0; text-align: center; border-bottom: 2px solid #ff1d1d; padding-bottom: 10px;">🛒 CHI TIẾT ĐƠN HÀNG</h3>
                ' . $processedOrder . '
            </div>

            <div style="background: linear-gradient(135deg, #ff1d1d, #ff4540); color: white; padding: 25px; border-radius: 8px; text-align: center; margin: 30px 0;">
                <h3 style="margin: 0 0 10px 0; font-size: 20px;">🚀 Thông báo quan trọng!</h3>
                <p style="margin: 0; font-size: 16px;">Nhân viên ROSA sẽ liên hệ xác nhận đơn hàng trong <strong>24h</strong></p>
                <p style="margin: 5px 0 0 0; font-size: 14px;">Cảm ơn quý khách đã tin tưởng ROSA Computer! 🙏</p>
            </div>

            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; text-align: center; border: 1px solid #e9ecef;">
                <h4 style="color: #ff1d1d; margin-top: 0;">📞 Liên hệ hỗ trợ 24/7</h4>
                <p style="margin: 10px 0; line-height: 1.8;">
                    <strong>📧 Email:</strong> <a href="mailto:support@rosacomputer.ai" style="color: #ff1d1d;">support@rosacomputer.ai</a><br>
                    <strong>📱 Hotline:</strong> <a href="tel:02839293770" style="color: #ff1d1d;">(028) 39293770</a> - <a href="tel:02839293765" style="color: #ff1d1d;">(028) 39293765</a><br>
                    <strong>🌐 Website:</strong> <a href="https://rosacomputer.vn" style="color: #ff1d1d;">rosacomputer.vn</a>
                </p>
                <p style="font-size: 12px; color: #6c757d; margin-top: 20px;">
                    Nếu không muốn nhận email từ chúng tôi, <a href="mailto:unsubscribe@rosacomputer.ai" style="color: #ff1d1d;">click để hủy đăng ký</a>
                </p>
            </div>

            <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #e9ecef;">
                <p style="color: #6c757d; font-size: 13px; margin: 0;">
                    © 2024 ROSA Computer AI. Tất cả quyền được bảo lưu.<br>
                    Email này được gửi tự động, vui lòng không reply.
                </p>
            </div>

        </body>
        </html>';
        
        $result = $mail->send();
        
        if ($result) {
            logEmailActivity($orderId, $email, $phone, 'SUCCESS');
            sendAdminNotification($orderId, $processedOrder, $order_date, $name, $phone, $shipping, $email, $address, $note);
            return ['success' => true, 'message' => 'Email đã được gửi thành công'];
        } else {
            logEmailActivity($orderId, $email, $phone, 'FAILED');
            return ['success' => false, 'error' => 'Không thể gửi email'];
        }
        
    } catch (Exception $e) {
        logEmailActivity($orderId, $email, $phone, 'ERROR: ' . $e->getMessage());
        error_log("Lỗi gửi email: " . $e->getMessage());
        return ['success' => false, 'error' => 'Lỗi hệ thống: ' . $e->getMessage()];
    }
}

// Hàm tạo file blacklist mẫu
function createSampleBlacklist() {
    $blacklistFile = __DIR__ . '/blacklist.json';
    
    if (!file_exists($blacklistFile)) {
        $sampleBlacklist = [
            'emails' => [
                'spam@example.com',
                'test@tempmail.com'
            ],
            'phones' => [
                '0000000000',
                '1111111111'
            ],
            'domains' => [
                '10minutemail.com',
                'tempmail.com',
                'guerrillamail.com'
            ]
        ];
        
        file_put_contents($blacklistFile, json_encode($sampleBlacklist, JSON_PRETTY_PRINT));
    }
}

// Khởi tạo blacklist khi chạy script
createSampleBlacklist();

?>