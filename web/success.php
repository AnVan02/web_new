<title>Thông Tin Đặt Hàng</title>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // PHPMailer
require "../data/bank_info.php";
require "../header.php";

// Database connection
$servername = "localhost";
$username = "nvpbgqcv_banhang";
$password = "Vietson@123";
$dbname = "nvpbgqcv_banhang";

$conn = new mysqli($servername, $username, $password, $dbname);
// $conn->set_charset("utf8");


if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy orderId từ URL
$orderId_decoded = isset($_GET['orderId']) ? $_GET['orderId'] : '';
$orderId = base64_decode($orderId_decoded);

// Lấy thông tin đơn hàng từ database
$query = "SELECT * FROM `order` WHERE `formatted_order_id` = ?";
$selectStmt = $conn->prepare($query);
$selectStmt->bind_param("s", $orderId);
$selectStmt->execute();
$result = $selectStmt->get_result();

$order = "";
$order_date = "";
$name = "";
$phone = "";
$email = "";
$shipping = "";
$address = "";
$note = "";
$found = false;

if ($result->num_rows > 0) {
    $found = true;
    $row = $result->fetch_assoc();
    $order = $row['order'];
    $order_date = $row['order_date'];
    $name = $row['customer_name'];
    $phone = $row['customer_phone'];
    $email = $row['customer_email'];
    $shipping = $row['shipping_method'];
    $address = $row['delivery_address'];
    $note = $row['customer_note'];

    // Gửi email xác nhận đơn hàng
    sendOrderEmail($orderId, $order, $order_date, $name, $phone, $shipping, $email, $address, $note);
} else {
    $orderId = "";
}

// Gửi email thông tin cho khách hàng 


function sendOrderEmail($orderId, $order, $order_date, $name, $phone, $shipping, $email, $address, $note) {
    $mail = new PHPMailer(true);
    try {
        // Làm sạch dữ liệu đầu vào (KHÔNG làm sạch $order vì nó đã có HTML)
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
        $note = strip_tags(htmlspecialchars($note, ENT_QUOTES, 'UTF-8'));
        
        // XỬ LÝ DỮ LIỆU ORDER - Đây là phần quan trọng
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

        $mail->setFrom('noreply@rosacomputer.ai', 'ROSA COMPUTER AI');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('support@rosacomputer.ai', 'ROSA COMPUTER AI');
        $mail->isHTML(true);
        $mail->Subject = "Xác nhận đơn hàng #$orderId - ROSA Computer";

        // Template email với order đã xử lý
        $mail->Body = '
        <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
            
            <div style="text-align: center; margin-bottom: 30px;">
                <img src="https://rosacomputer.vn/assets/images/rosa.png" alt="ROSA Computer" style="max-width: 150px;">
                <h2 style="color: #ff1d1d; margin: 20px 0;">Xin chào ' . $name . '</h2>
                <p style="color: #4CAF50; font-weight: bold;">Quý khách đã đặt hàng thành công tại ROSA Computer!</p>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                <h3 style="color: #ff1d1d; margin-top: 0;">THÔNG TIN ĐƠN HÀNG</h3>
                <p><strong>Mã đơn hàng:</strong> <span style="color: #ff4540;">' . $orderId . '</span></p>
                <p><strong>Ngày đặt hàng:</strong> <span style="color: #ff4540;">' . $order_date . '</span></p>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                <h3 style="color: #ff1d1d; margin-top: 0;">THÔNG TIN KHÁCH HÀNG</h3>
                <p><strong>Họ tên:</strong> ' . $name . '</p>
                <p><strong>Điện thoại:</strong> ' . $phone . '</p>
                <p><strong>Email:</strong> ' . $email . '</p>
                <p><strong>Địa chỉ:</strong> ' . $address . '</p>
                <p><strong>Hình thức thanh toán:</strong> ' . $shipping . '</p>
            </div>

            <div style="background: #f0f8f0; padding: 20px; border-radius: 5px; margin-bottom: 20px; border-left: 4px solid #4CAF50;">
                <h3 style="color: #ff1d1d; margin-top: 0;">CHI TIẾT ĐƠN HÀNG</h3>
                <div style="background: white; padding: 15px; border-radius: 3px;">
                    ' . $processedOrder . '
                </div>
            </div>

            <div style="text-align: center; background: #ff1d1d; color: white; padding: 20px; border-radius: 5px; margin: 30px 0;">
                <h3 style="margin: 0 0 10px 0;">🚀 Nhân viên sẽ liên hệ sớm nhất!</h3>
                <p style="margin: 0;">Cảm ơn quý khách đã tin tưởng ROSA Computer</p>
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <p><strong>Liên hệ hỗ trợ:</strong></p>
                <p>
                    📧 Email: support@rosacomputer.ai<br>
                    📞 Hotline: (028) 39293770 - (028) 39293765<br>
                    🌐 Website: <a href="https://rosacomputer.vn">rosacomputer.vn</a>
                </p>
            </div>

        </body>
        </html>';
        
        $result = $mail->send();
        
        if ($result) {
            sendAdminNotification($orderId, $processedOrder, $order_date, $name, $phone, $shipping, $email, $address, $note);
            return true;
        }
        return false;
        
    } catch (Exception $e) {
        error_log("Lỗi gửi email: " . $e->getMessage());
        return false;
    }
}

// Hàm xử lý dữ liệu order từ database
function processOrderData($order) {
    // Loại bỏ các HTML tags không cần thiết và chuyển thành format đẹp
    
    // Nếu $order chứa HTML table, ta sẽ parse nó
    if (strpos($order, '<table') !== false) {
        // Phương pháp 1: Parse HTML và tạo lại format đơn giản
        return parseOrderTable($order);
    } else {
        // Phương pháp 2: Nếu là text thô, chỉ cần format lại
        return nl2br(htmlspecialchars($order, ENT_QUOTES, 'UTF-8'));
    }
}

// Parse HTML table thành format đơn giản cho email
function parseOrderTable($htmlOrder) {
    // Sử dụng DOMDocument để parse HTML
    $dom = new DOMDocument();
    
    // Tắt lỗi HTML không hợp lệ
    libxml_use_internal_errors(true);
    
    // Load HTML (thêm encoding)
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $htmlOrder);
    
    // Reset lỗi
    libxml_clear_errors();
    
    $output = '';
    
    // Tìm tất cả các table rows
    $rows = $dom->getElementsByTagName('tr');
    
    foreach ($rows as $row) {
        $cells = $row->getElementsByTagName('td');
        if ($cells->length >= 2) {
            $productInfo = $cells->item(0)->textContent;
            $quantity = $cells->item(1)->textContent;
            
            // Format đẹp cho sản phẩm
            $output .= '<div style="border-bottom: 1px solid #eee; padding: 10px 0;">';
            $output .= '<strong style="color: #ff1d1d;">📦 ' . trim($productInfo) . '</strong>';
            $output .= '<div style="text-align: right; color: #666;">Số lượng: ' . trim($quantity) . '</div>';
            $output .= '</div>';
        }
    }
    
    // Tìm tổng cộng
    if (preg_match('/Tổng Cộng: ([\d.,]+)/', $htmlOrder, $matches)) {
        $total = $matches[1];
        $output .= '<div style="margin-top: 15px; padding: 15px; background: #ff1d1d; color: white; border-radius: 5px; text-align: center;">';
        $output .= '<strong style="font-size: 18px;">💰 TỔNG CỘNG: ' . $total . '</strong>';
        $output .= '</div>';
    }
    
    return $output ?: 'Không thể hiển thị chi tiết đơn hàng';
}

// Phương pháp thay thế: Chuyển đổi HTML thành text đơn giản
function parseOrderSimple($order) {
    // Loại bỏ HTML tags và chỉ lấy nội dung
    $text = strip_tags($order);
    
    // Tách thành các dòng
    $lines = explode("\n", $text);
    $output = '';
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line)) {
            // Nếu là dòng có thông tin sản phẩm
            if (strpos($line, 'CPU:') !== false || strpos($line, 'MAIN:') !== false || 
                strpos($line, 'RAM:') !== false || strpos($line, 'SSD:') !== false) {
                $output .= '<p style="margin: 5px 0;"><strong>• ' . $line . '</strong></p>';
            } 
            // Nếu là dòng tổng cộng
            elseif (strpos($line, 'Tổng Cộng:') !== false) {
                $output .= '<div style="margin-top: 15px; padding: 15px; background: #ff1d1d; color: white; border-radius: 5px; text-align: center;">';
                $output .= '<strong style="font-size: 18px;">💰 ' . $line . '</strong>';
                $output .= '</div>';
            }
            // Các dòng khác
            else {
                $output .= '<p style="margin: 5px 0;">' . $line . '</p>';
            }
        }
    }
    
    return $output ?: 'Chi tiết đơn hàng không khả dụng';
}

// Version admin email cũng cập nhật tương tự
function sendAdminNotification($orderId, $processedOrder, $order_date, $name, $phone, $shipping, $email, $address, $note) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'mail.rosacomputer.ai';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@rosacomputer.ai';
        $mail->Password = 'Rosacomputer@1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->setFrom('noreply@rosacomputer.ai', 'ROSA COMPUTER AI');

        $adminEmails = [
            'noreply@rosacomputer.ai',
            'tvdell789@gmail.com'
        ];

        foreach ($adminEmails as $adminEmail) {
            $mail->addAddress($adminEmail);
        }

        $mail->isHTML(true);
        $mail->Subject = 'ĐƠN HÀNG MỚI: ' . $name . ' - ' . $orderId;
        
        $mail->Body = '
        <html>
        <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
            
            <div style="background: #ff1d1d; color: white; padding: 20px; border-radius: 5px; text-align: center; margin-bottom: 20px;">
                <h2 style="margin: 0;">🔔 ĐƠN HÀNG MỚI</h2>
                <p style="margin: 10px 0 0 0;">Từ website ROSA Computer</p>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 15px;">
                <h3 style="color: #ff1d1d; margin-top: 0;">Thông tin đơn hàng</h3>
                <p><strong>Mã đơn hàng:</strong> ' . $orderId . '</p>
                <p><strong>Ngày đặt:</strong> ' . $order_date . '</p>
            </div>

            <div style="background: #f9f9f9; padding: 20px; border-radius: 5px; margin-bottom: 15px;">
                <h3 style="color: #ff1d1d; margin-top: 0;">Thông tin khách hàng</h3>
                <p><strong>Họ tên:</strong> ' . $name . '</p>
                <p><strong>Điện thoại:</strong> ' . $phone . '</p>
                <p><strong>Email:</strong> ' . $email . '</p>
                <p><strong>Địa chỉ:</strong> ' . $address . '</p>
                <p><strong>Phương thức:</strong> ' . $shipping . '</p>
            </div>

            <div style="background: #e8f5e8; padding: 20px; border-radius: 5px; border-left: 4px solid #4CAF50;">
                <h3 style="color: #ff1d1d; margin-top: 0;">Chi tiết đơn hàng</h3>
                <div style="background: white; padding: 15px; border-radius: 3px;">
                    ' . $processedOrder . '
                </div>
            </div>

            <div style="text-align: center; margin: 20px 0; padding: 15px; background: #fff3cd; border-radius: 5px;">
                <strong style="color: #856404;">⚡ Cần xử lý đơn hàng này ngay!</strong>
            </div>

        </body>
        </html>';

        return $mail->send();

    } catch (Exception $e) {
        error_log("Lỗi gửi email admin: " . $e->getMessage());
        return false;
    }
}

?>

<main class="order-container">
    <div class="order-info">
      <?php if ($found): ?>
            <h3 style="color: red; font-weight: bold;">ĐẶT HÀNG THÀNH CÔNG </h3>
            <p>Cảm ơn bạn đã đặt hàng từ ROSA. Vui lòng kiểm tra lại thông tin hoá đơn nhân viên sẽ liên hệ với quý khách trong thời gian sớm nhất.</p>
            <?php else: ?>
                <h3>KHÔNG TÌM THẤY ĐƠN HÀNG</h3>
            <?php endif; ?>
            
            <h4>Hóa Đơn ID: <?php echo $orderId; ?></h4>
            <h4>Ngày Tạo: <?php echo $order_date; ?></h4>
            <br>
            <h5 style="color: red; font-weight: bold;" >THÔNG TIN KHÁCH HÀNG</h3>
                <div style="width: 100%; height: 1px; background-color:#DDDDDD; margin-top: 5px;"></div><br>

            <p><strong>Tên Khách Hàng:</strong> <span style="margin-left: 10%;"> <?php echo $name; ?></span></p>
            <p><strong>Số điện thoại:</strong> <span style="margin-left:13%"><?php echo $phone; ?></span></p>
            <p><strong>Email:</strong><span style="margin-left:21%"><?php echo $email; ?></span></p>
            
            <h5 style="color: red; font-weight: bold;" >THÔNG TIN GIAO HÀNG</h3>
                <div style="width: 100%; height: 1px; background-color:#DDDDDD; margin-top: 5px;"></div><br>
             
            <?php if ($shipping === 'home'): ?>
                <p><strong>Hình thức nhận hàng:</strong> Giao hàng tại nhà</p>
                <p><strong>Địa chỉ giao hàng:</strong> <?php echo $address; ?></p>
                <p><strong>Ghi chú khách hàng:</strong> <?php echo $note; ?></p>
           
            <?php elseif ($shipping === 'store'): ?>
                <p><strong>Hình thức nhận hàng:</strong> Nhận hàng tại đại lý uỷ quyền ROSA</p>
                <p><strong>Địa chỉ đại lý:</strong> <?php echo $address; ?></p>
                <p><strong>Ghi chú khách hàng:</strong> <?php echo $note; ?></p>
            <?php else: ?>
                <p><strong>Hình thức nhận hàng:</strong></p>
            <?php endif; ?>

            <div style="width: 100%; height: 1px; background-color:#DDDDDD; margin-top: 5px;"></div><p></p>
            
            <h5 style="color: red; font-weight: bold;">NỘI DUNG HOÁ ĐƠN:</h3>
            <div id="order-info"><?php echo $order ?></div>
       
            <div style="width: 100%; height: 1px; background-color:#DDDDDD; margin-top: 5px;"></div><p></p>

            <?php if ($shipping === 'home'): ?>
                <h3 style="color: red; font-weight: bold;">THÔNG TIN CHUYỂN KHOẢN :</h3><br>
                <p><strong>Tên tài khoản:</strong><?php echo $accountName; ?></p>
                <p><strong>Số tài khoản:</strong><?php echo $accountNumber; ?></p>
                <p><strong>Tên Ngân Hàng:</strong><?php echo $bankName; ?></p>
                <div class="qr-code">
                    <img src=<?php echo $QRcode; ?> alt="QR Code" />
                </div>
            <?php endif; ?>
            
            <?php if ($shipping === 'store'): ?>
                <h3 style="color: red; font-weight: bold;">THÔNG TIN CHUYỂN KHOẢN:</h3><br>
                <p><strong>Tên tài khoản:</strong><?php echo $accountName; ?></p>
                <p><strong>Số tài khoản:</strong><?php echo $accountNumber; ?></p>
                <p><strong>Tên Ngân Hàng:</strong> <?php echo $bankName; ?></p>
                <div class="qr-code">
                    <img src=<?php echo $QRcode; ?> alt="QR Code" />
                </div>
            <?php endif; ?>

    </div>
    
        <div class ="support-news">
            <div class ="subport-section">
            <h3>Thông Tin Hỗ Trợ</h3>
            <p>Tim hiểu thêm thông tin hỗ trợ khác từ ROSA khi mua sản phẩm </p>
            <ul >
                <li><a href="../chinhsachbaohanh.php">Chính sách bảo hành</a></li>
                <li><a href="../danhsachdaily.php">Danh sách đại lý</a></li>
                <li><a href="../baohanh.php">Tra cứu bảo hành </a></li>
                <li><a href="../chinhsachbaomat.php">Chính sách bảo mật</a></li>
            </ul>
        </div>
        <div class="news-section">
            
            <h3>Tin Tức ROSA</h3>
            <p>Bạn có thể khám phá thêm nhiều thông tin thú vị về công nghệ và giải pháp từ tin tức ROSA</p>
            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->set_charset("utf8");

            $newsQuery = "SELECT article_title, article_link, article_image, article_date FROM article ORDER BY article_date DESC LIMIT 5";
            $newsResult = $conn->query($newsQuery);
            while ($news = $newsResult->fetch_assoc()): ?>
                <div class="news-card">
                    <a href="<?= htmlspecialchars($news['article_link']); ?>">
                        <img src="/tintuc_test/admin/modules/blog/uploads/<?= htmlspecialchars($news['article_image']); ?>" alt="News Image">
                    </a>
                    <div class="news-content">
                        <div class="news-title">
                            <a href="../tintuc_test/tintuc/<?= htmlspecialchars($news['article_link']); ?>">
                                <?=htmlspecialchars($news ['article_title']);?>
                            </a>
                        </div>
                        <p class="news-date">Cập nhật ngày <?= htmlspecialchars(date("d/m/Y", strtotime($news['article_date']))); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <br>
</main>
<style>
/* Bố cục chính: Hai cột */
.order-container {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 20px auto;
    gap: 20px;

}

/* Cột bên trái - Thông tin đơn hàng */
.order-info {
    flex: 2; /* Chiếm 2/3 không gian */
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Cột bên phải - Thông tin hỗ trợ & Tin tức */
.support-news {

    flex: 1; /* Chiếm 1/3 không gian */
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Hộp hỗ trợ & tin tức */
.support-section, .news-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


/* Mã QR */
.qr-code {
    display: flex;
    justify-content: center;
    /*align-items: center;*/
    margin: 20px 0;
}

.qr-code img {
    max-width: 350px;
    height: auto;
    border: 2px solid #ddd;
    border-radius: 8px;
    padding: 5px;
    background: white;
}

/* Phần tiêu đề "Thông tin hỗ trợ" */
.subport-section h3 {
    color: red;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}
/* Phần tiêu đề "Tin tuc ROSA" */
.news-section h3 {
    color: red;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;

}

/* Văn bản mô tả */
.support-section p {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
    font-family: Arial, sans-serif;

}

/* Danh sách hỗ trợ */
.support-section ul {
    list-style: none;
    padding: 0;
   
}

.support-section ul li {
    display: flex;
    align-items: center;
    font-size: 16px;
    font-weight: 500;
    padding: 8px 0;
    transition: color 0.3s ease-in-out;
}


/* Hiệu ứng hover */
.support-section ul li:hover {
    color: red;
}

/* bỏ gạch chân dưới chữ */
a:hover, a:focus {
    text-decoration: none;
}
.news-card img {
    width: 165px;
    height: auto;
    /*display: block;*/
    margin: 0 auto 10px;
    border-radius: 5px;
}
/*vùng tin tuc*/
.news-section {
    font-family: Arial, sans-serif;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
/*vùng hỗ trợ*/
.subport-section {
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}


.news-card {
    display: flex;
    align-items: center;
    gap: 15px; /* Khoảng cách giữa ảnh và nội dung */
    margin-bottom: 15px;
    padding: 10px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.news-card img {
    width: 100px;  /* Kích thước ảnh */
    height: 80px;
    border-radius: 5px;
    object-fit: cover;
}

.news-content {
    flex: 1; /* Để nội dung mở rộng theo chiều ngang */
}

.news-title a {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
}

.news-title a:hover {
    color: #007bff;
}

.news-date {
    font-size: 12px;
    color: #888;
}


/* Responsive cho mobile */
@media (max-width: 768px) {
    .order-container {
        flex-direction: column; /* Xếp chồng lên nhau khi màn hình nhỏ */
    }
    
    .order-info, .support-news {
        flex: 1;
    }

    .qr-code img {
        max-width: 120px; /* Thu nhỏ QR trên màn hình nhỏ */
    }
}

</style>
<?php require "../footer.php"; ?>

