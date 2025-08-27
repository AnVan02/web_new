<?php
// Xử lý AJAX request gửi email
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'send_order') {
    header('Content-Type: application/json');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    // Uncomment dòng dưới nếu đã cài PHPMailer qua Composer
    // require 'vendor/autoload.php';
    
    // Hoặc include trực tiếp file PHPMailer
    // require 'path/to/PHPMailer/src/Exception.php';
    // require 'path/to/PHPMailer/src/PHPMailer.php';
    // require 'path/to/PHPMailer/src/SMTP.php';
    
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $company = $_POST['company'] ?? '';
    $selectedOptions = json_decode($_POST['selectedOptions'] ?? '[]', true);
    $totalPrice = $_POST['totalPrice'] ?? 400000;
    
    // Validate dữ liệu
    if (empty($name) || empty($email) || empty($phone) || empty($company)) {
        echo json_encode(['success' => false, 'message' => 'Vui lòng điền đầy đủ thông tin!']);
        exit;
    }
    
    // Tạo mã đơn hàng
    $orderId = 'ROSA' . date('YmdHis') . rand(100, 999);
    
    function sendAdminNotification($name, $email, $phone, $company, $selectedOptions, $totalPrice, $orderId) {
        // Tạm thời sử dụng mail() function PHP thay vì PHPMailer để test
        $to = 'tvdell789@gmail.com'; // Email admin
        $subject = '🔔 ĐƠN HÀNG MỚI: ' . $name . ' - ' . $orderId;
        
        // Tạo danh sách tùy chọn
        $optionsText = '';
        if (!empty($selectedOptions)) {
            $optionsText = "Tùy chọn thêm:\n";
            foreach ($selectedOptions as $option) {
                $optionsText .= "- " . $option . "\n";
            }
        } else {
            $optionsText = "Không có tùy chọn thêm\n";
        }
        
        $message = "
        🎉 ĐƠN HÀNG MỚI
        Mã đơn hàng: {$orderId}

        📋 THÔNG TIN KHÁCH HÀNG:
        - Họ và tên: {$name}
        - Email: {$email}
        - Số điện thoại: {$phone}
        - Công ty: {$company}

        🎯 GÓI DỊCH VỤ:
        - Gói cơ bản: Chatbot AI ROSA - 400,000đ/tháng
        - Tính năng cơ bản:
        + Thiết kế sẵn website riêng cho Chatbot
        + Quản lý cơ sở tri thức trực tuyến (Nextcloud)
        + Tra cứu lịch sử trò chuyện
        + Dung lượng: 3 MB
        + Số câu trả lời: 3000 tin/tháng

        🔧 {$optionsText}

        💰 TỔNG CHI PHÍ: " . number_format($totalPrice, 0, ',', '.') . "đ/tháng

        ⏰ THỜI GIAN: " . date('d/m/Y H:i:s') . "

        🚀 Hãy liên hệ khách hàng sớm nhất để triển khai dịch vụ!
        Email: {$email} | Phone: {$phone}
        ";
        
        $headers = "From: noreply@rosa-ai.com\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        return mail($to, $subject, $message, $headers);
    }
    
    // Gửi email thông báo đến admin
    if (sendAdminNotification($name, $email, $phone, $company, $selectedOptions, $totalPrice, $orderId)) {
        echo json_encode([
            'success' => true, 
            'message' => 'Đã gửi thông tin đến admin thành công!',
            'orderId' => $orderId
        ]);
    } else {
        echo json_encode([
            'success' => false, 
            'message' => 'Có lỗi xảy ra khi gửi email. Vui lòng thử lại!'
        ]);
    }
    exit;
}

require "../header.php";
?>

<!-- Banner Carousel -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1200x400/4a90e2/ffffff?text=ROSA+AI+Banner" class="d-block w-100" alt="Banner 1">
        </div>
    </div>
</div>

<!-- Section: Tương tác thông minh -->
<section class="why-choose-section">
    <div class="container">
        <h2>TƯƠNG TÁC THÔNG MINH</h2>
        <p class="description">
            ROSA - AI Ready là thương hiệu tiên phong giải pháp chấm công truyền thống bằng IP Camera AI, 
            mang đến sự tiết kiệm, nhanh chóng, chính xác cho doanh nghiệp        
        </p>
    </div>
</section>

<div class="nextcloud-circles">
    <div class="feature-image">
        <img src="https://via.placeholder.com/800x400/e9ecef/333333?text=ROSA+AI+Features" alt="Nextcloud">
    </div>
</div>

<!-- Tính năng nổi bật -->
<section class="features-section">
    <h2>Tính năng nổi bật</h2>
    <div class="container">
        <div class="feature-image">
            <img src="https://via.placeholder.com/1000x500/f8f9fa/333333?text=Outstanding+Features" alt="Nextcloud Features">
        </div>
    </div>
</section>

<!-- Đối tượng -->
<section class="target-section">
    <div class="container">
        <div class="target-image">
            <img src="https://via.placeholder.com/1200x600/4a90e2/ffffff?text=Target+Users+Background" alt="Target Users">
            <div class="target-text">
                <h2>LỢI ÍCH VƯỢT TRỘI</h2>
                <p>
                    Tiết kiệm thời gian, tăng năng suất mọi loại báo cáo thao tác thủ công và tìm kiếm dữ liệu. 
                    Giao diện tùy chỉnh thân thiện, không cần đào tạo. Thông tin truy xuất tức thì 
                    giúp lãnh đạo quyết định nhanh, an toàn và minh bạch.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Install Section -->
<section class="install-section">
    <div class="container">
        <div class="install-steps">
            <!-- Step 1 -->
            <div class="install-step">
                <div class="step-content">
                    <div class="step-text">
                        <h3>Đa dạng đối tượng</h3>
                        <p>Phù hợp với doanh nghiệp vừa và nhỏ muốn tối ưu vận hành, công ty công nghệ và startup cần hệ sinh thái chuyên nghiệp, tổ chức giáo dục yêu cầu bảo mật chính xác, cùng các doanh nghiệp lo ngại rủi ro lưu trữ không đồng bộ.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://via.placeholder.com/400x300/e9ecef/333333?text=Step+1" alt="Step 1">
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="install-step reverse">
                <div class="step-content">
                    <div class="step-text">
                        <h3>Giải pháp toàn diện</h3>
                        <p>Doanh nghiệp nhận gói phần mềm toàn diện gồm Nextcloud Enterprise, chatbot AI, phần mềm chấm công và trợ lý ảo AI khi mua ROSA AI SMB. Tất cả được triển khai bởi đội ngũ chuyên nghiệp với bảo trì và nâng cấp định kỳ.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://via.placeholder.com/400x300/e9ecef/333333?text=Step+2" alt="Step 2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chatbot AI ROSA -->
<section class="features-section">
    <h2>Chatbot AI ROSA</h2>
    <p class="description">Giải pháp toàn diện cho doanh nghiệp phát triển</p>
    <div class="container">
        <div class="feature-image">
            <img src="https://via.placeholder.com/1000x400/4a90e2/ffffff?text=Chatbot+AI+ROSA" alt="Chatbot Features">
        </div>
    </div>
</section>

<!-- Bảng giá -->
<div class="pricing-container">
    <!-- Bên trái -->
    <div class="pricing-left">
        <h2>BẢNG GIÁ</h2>
        <p class="total-text">Tổng cộng chi phí:</p>
        <p class="price" id="totalPrice">400,000đ</p>
        <ul class="features">
            <li>- Thiết kế sẵn website riêng cho Chatbot</li>
            <li>- Quản lý cơ sở tri thức trực tuyến (Nextcloud)</li>
            <li>- Tra cứu lịch sử trò chuyện</li>
            <li>- Dung lượng: 3 MB</li>
            <li>- Số câu trả lời: 3000 tin/tháng</li>
        </ul>
    </div>
    
    <!-- Bên phải -->
    <div class="pricing-right">
        <h3>Tính năng tùy chọn:</h3>
        <p class="note">(Các tùy chọn mới sẽ tự động thêm vào tổng cộng chi phí)</p>
        
        <!-- Tích hợp live chat -->
        <div class="option-item">
            <input type="radio" name="livechat" class="addon" value="100000">
            <div class="option-content">
                <div class="option-title">Tích hợp live chat (Nextcloud Talk)</div>
                <div class="option-price">+100,000đ/tháng</div>
            </div>
        </div>

        <!-- Tích hợp live chat nâng cao -->
        <div class="option-item">
            <input type="radio" name="nextcloud_talk" class="addon" value="200000">
            <div class="option-content">
                <div class="option-title">Tích hợp live chat nâng cao (Nextcloud Talk Pro)</div>
                <div class="option-price">+200,000đ/tháng</div>
            </div>
        </div>

        <!-- Tăng số lượng câu trả lời -->
        <div class="option-item">
            <div class="option-content">
                <div class="option-title">Tăng số lượng câu trả lời</div>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="messages" class="addon" value="100000">
                        1000 tin nhắn (+100,000đ/tháng)
                    </label>
                    <label>
                        <input type="radio" name="messages" class="addon" value="200000">
                        2000 tin nhắn (+200,000đ/tháng)
                    </label>
                    <label>
                        <input type="radio" name="messages" class="addon" value="500000">
                        5000 tin nhắn (+500,000đ/tháng)
                    </label>
                </div>
            </div>
        </div>

        <!-- Tích hợp Zalo OA -->
        <div class="option-item disabled-option">
            <input type="checkbox" name="zalo" class="addon" disabled>
            <div class="option-content">
                <div class="option-title">Tích hợp chatbot lên Zalo OA</div>
                <div class="option-price">Chưa khả dụng</div>
            </div>
        </div>
    </div>
</div>

<!-- Nút đặt hàng ngay -->
<div class="text-center">
    <button class="btn-order" onclick="openPopup()">TRIỂN KHAI NGAY</button>
</div>

<!-- Popup form -->
<div id="popupOverlay" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Nhập thông tin triển khai</h2>
        <form id="contactForm">
            <input type="text" id="customerName" name="fullname" placeholder="Họ và tên *" required>
            <input type="tel" id="customerPhone" name="phone" placeholder="Số điện thoại *" required>
            <input type="email" id="customerEmail" name="email" placeholder="Địa chỉ email *" required>
            <input type="text" id="customercty" name="cty" placeholder="Tên công ty *" required>
            <button type="submit" class="btn-submit">
                <span class="btn-text">HOÀN TẤT</span>
                <span class="btn-loading" style="display: none;">
                    <span class="loading-spinner"></span>
                    Đang xử lý...
                </span>
            </button>
        </form>
    </div>
</div>

<!-- Custom Alert Container -->
<div id="customAlert" class="custom-alert-container"></div>

<!-- Changelog Section -->
<div class="pricing-container" style="border:2px solid #4a90e2; margin-top: 40px;">
    <!-- Bên trái -->
    <div class="pricing-left">
        <h2 class="title-with-icon">
            📝 Nhật ký cập nhật
        </h2>
    </div>
    
    <!-- Bên phải -->
    <div class="pricing-right">
        <h2>Changelog v2 - Chatbot CSKH</h2>
        <div class="addon">Tính năng mới</div>
        <ul class="addon">
            <li>Ghi nhớ ngữ cảnh nhiều lượt</li>
            <li>Gợi ý sản phẩm/dịch vụ thông minh</li>
            <li>Tự động đa ngôn ngữ</li>
            <li>Chuyển tiếp mượt sang nhân viên</li>
        </ul>
        <div class="addon">Cải tiến</div>
        <ul class="addon">
            <li>Phản hồi nhanh hơn 30%</li>
            <li>Giảm lỗi hiểu sai</li>
            <li>Dashboard quản trị tối ưu</li>
        </ul>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>
// Tính toán tổng chi phí
function updateTotalPrice() {
    let basePrice = 400000;
    let totalPrice = basePrice;
    
    // Lấy tất cả checkbox và radio được chọn
    const checkedInputs = document.querySelectorAll('.addon:checked');
    checkedInputs.forEach(input => {
        if (input.value && input.value !== "0") {
            totalPrice += parseInt(input.value);
        }
    });
    
    // Hiển thị với định dạng tiền tệ
    document.getElementById('totalPrice').textContent = totalPrice.toLocaleString('vi-VN') + 'đ';
}

// Thêm event listener cho tất cả addon inputs
document.querySelectorAll('.addon').forEach(input => {
    input.addEventListener('change', updateTotalPrice);
});

// Popup functions
function openPopup() {
    document.getElementById('popupOverlay').classList.add('show');
    document.body.style.overflow = 'hidden';
}

function closePopup() {
    document.getElementById('popupOverlay').classList.remove('show');
    document.body.style.overflow = 'auto';
}

// Đóng popup khi click vào overlay
document.getElementById('popupOverlay').addEventListener('click', function(e) {
    if (e.target === this) {
        closePopup();
    }
});

// Custom Alert Functions
function showCustomAlert(type, title, message, orderId = null) {
    const alertContainer = document.getElementById('customAlert');
    
    let iconHtml = '';
    if (type === 'success') {
        iconHtml = `
            <div class="success-icon">
                <svg class="success-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="success-checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                    <path class="success-checkmark__check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
            </div>
        `;
    } else if (type === 'error') {
        iconHtml = `<div style="color: #dc3545; font-size: 64px; margin-bottom: 15px;">❌</div>`;
    }
    
    const orderInfo = orderId ? `
        <div class="order-info">
            <p><strong>Mã đơn hàng:</strong></p>
            <p class="order-id">${orderId}</p>
        </div>
    ` : '';
    
    alertContainer.innerHTML = `
        <div class="alert-overlay">
            <div class="alert-modal ${type}">
                ${iconHtml}
                <h3>${title}</h3>
                <p class="alert-message">${message}</p>
                ${orderInfo}
                <div class="alert-actions">
                    <button onclick="closeCustomAlert()" class="alert-btn primary">Đồng ý</button>
                </div>
            </div>
        </div>
    `;
    
    alertContainer.style.display = 'block';
    
    // Auto close sau 8 giây cho success
    if (type === 'success') {
        setTimeout(() => {
            closeCustomAlert();
        }, 8000);
    }
}

function closeCustomAlert() {
    document.getElementById('customAlert').style.display = 'none';
}

// Toast notification
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast-notification ${type}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => toast.classList.add('show'), 100);
    
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => document.body.removeChild(toast), 300);
    }, 3000);
}

// Validation functions
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validatePhone(phone) {
    const phoneRegex = /^[0-9]{10,11}$/;
    return phoneRegex.test(phone.replace(/[\s\-\+]/g, ''));
}

// Form submission handler
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('.btn-submit');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    
    // Show loading
    btnText.style.display = 'none';
    btnLoading.style.display = 'inline-flex';
    submitBtn.disabled = true;
    
    try {
        // Lấy thông tin form
        const name = document.getElementById('customerName').value.trim();
        const email = document.getElementById('customerEmail').value.trim();
        const phone = document.getElementById('customerPhone').value.trim();
        const company = document.getElementById('customercty').value.trim();
        
        // Validation
        if (!name || !email || !phone || !company) {
            throw new Error('Vui lòng điền đầy đủ tất cả thông tin bắt buộc!');
        }
        
        if (!validateEmail(email)) {
            throw new Error('Email không đúng định dạng!');
        }
        
        if (!validatePhone(phone)) {
            throw new Error('Số điện thoại phải từ 10-11 số và chỉ chứa các chữ số!');
        }
        
        if (name.length < 2) {
            throw new Error('Họ tên phải có ít nhất 2 ký tự!');
        }
        
        if (company.length < 2) {
            throw new Error('Tên công ty phải có ít nhất 2 ký tự!');
        }
        
        // Lấy các tùy chọn đã chọn
        const selectedOptions = [];
        const checkedInputs = document.querySelectorAll('.addon:checked');
        
        checkedInputs.forEach(input => {
            const parentItem = input.closest('.option-item');
            if (parentItem) {
                const titleElement = parentItem.querySelector('.option-title');
                const priceElement = parentItem.querySelector('.option-price');
                if (titleElement && priceElement) {
                    selectedOptions.push(`${titleElement.textContent.trim()}: ${priceElement.textContent.trim()}`);
                }
            }
        });
        
        // Tính tổng chi phí
        let basePrice = 400000;
        let totalPrice = basePrice;
        checkedInputs.forEach(input => {
            if (input.value && input.value !== "0") {
                totalPrice += parseInt(input.value);
            }
        });
        
        // Chuẩn bị dữ liệu gửi
        const formData = new FormData();
        formData.append('action', 'send_order');
        formData.append('name', name);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('company', company);
        formData.append('selectedOptions', JSON.stringify(selectedOptions));
        formData.append('totalPrice', totalPrice);
        
        // Gửi request
        const response = await fetch(window.location.href, {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
            // Thành công
            closePopup();
            showCustomAlert(
                'success',
                '🎉 Đặt hàng thành công!',
                `Cảm ơn <strong>${name}</strong>! Chúng tôi đã nhận được yêu cầu triển khai Chatbot AI ROSA của bạn. Admin sẽ liên hệ với bạn trong vòng 24 giờ để tư vấn chi tiết.`,
                result.orderId
            );
            
            // Reset form
            this.reset();
            updateTotalPrice();
            
            // Show toast
            showToast('Email thông báo đã được gửi đến admin!', 'success');
            
        } else {
            throw new Error(result.message || 'Có lỗi xảy ra khi xử lý yêu cầu');
        }
        
    } catch (error) {
        console.error('Error:', error);
        let errorMessage = 'Không thể kết nối đến server. Vui lòng thử lại sau ít phút!';
        
        if (error.message.includes('định dạng') || error.message.includes('ký tự') || error.message.includes('điền')) {
            errorMessage = error.message;
        } else if (error.message.includes('HTTP')) {
            errorMessage = 'Server đang bảo trì. Vui lòng thử lại sau hoặc liên hệ hotline: 0123-456-789';
        } else if (error.message && !error.message.includes('fetch')) {
            errorMessage = error.message;
        }
        
        showCustomAlert(
            'error',
            '❌ Có lỗi xảy ra!',
            errorMessage
        );
        
        showToast('Gửi thông tin thất bại!', 'error');
        
    } finally {
        // Khôi phục button
        btnText.style.display = 'inline';
        btnLoading.style.display = 'none';
        submitBtn.disabled = false;
    }
});

// Khởi tạo giá ban đầu
updateTotalPrice();

// Prevent double submission
let isSubmitting = false;
document.getElementById('contactForm').addEventListener('submit', function(e) {
    if (isSubmitting) {
        e.preventDefault();
        return false;
    }
    isSubmitting = true;
    setTimeout(() => { isSubmitting = false; }, 3000);
});
</script>

<style>
/* Reset và Base Styles */
* {
    box-sizing: border-box;
}

.h2, h2 {
    font-size: 1.5rem;
}

/* Popup Styles */
.popup {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(3px);
}

.popup.show {
    display: flex;
}

.popup-content {
    background: #fff;
    padding: 40px 30px;
    border-radius: 20px;
    width: 500px;
    max-width: 95%;
    position: relative;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    text-align: center;
    animation: popupShow 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

@keyframes popupShow {
    from {
        transform: scale(0.5) translateY(-50px);
        opacity: 0;
    }
    to {
        transform: scale(1) translateY(0);
        opacity: 1;
    }
}

.popup-content h2 {
    margin-bottom: 25px;
    color: #333;
    font-size: 24px;
}

.popup-content form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.popup-content input {
    padding: 15px 20px;
    border: 2px solid #e0e0e0;
    border-radius: 25px;
    outline: none;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.popup-content input:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
}

.popup-content input:invalid {
    border-color: #dc3545;
}

.btn-submit {
    padding: 15px 20px;
    background: linear-gradient(45deg, #4a90e2, #357abd);
    color: #fff;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-submit:hover:not(:disabled) {
    background: linear-gradient(45deg, #357abd, #2c5f95);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
}

.btn-submit:disabled {
    background: #ccc !important;
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
}

.btn-loading {
    display: none;
    align-items: center;
    gap: 8px;
}

.loading-spinner {
    width: 16px;
    height: 16px;
    border: 2px solid #ffffff;
    border-top: 2px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    cursor: pointer;
    color: #666;
    transition: all 0.3s ease;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.close-btn:hover {
    color: #333;
    background: rgba(0,0,0,0.05);
}

/* Custom Alert Styles */
.custom-alert-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10000;
}

.alert-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
}

.alert-modal {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    max-width: 500px;
    width: 90%;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    animation: alertShow 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.alert-modal.success {
    border-top: 5px solid #28a745;
}

.alert-modal.error {
    border-top: 5px solid #dc3545;
}

@keyframes alertShow {
    from {
        transform: scale(0.7) translateY(-50px);
        opacity: 0;
    }
    to {
        transform: scale(1) translateY(0);
        opacity: 1;
    }
}

.alert-modal h3 {
    margin: 20px 0 15px 0;
    color: #333;
    font-size: 24px;
}

.alert-message {
    margin: 20px 0;
    color: #666;
    line-height: 1.6;
    font-size: 16px;
}

.order-info {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin: 20px 0;
    border-left: 4px solid #4a90e2;
}

.order-id {
    font-family: 'Courier New', monospace;
    font-size: 18px;
    font-weight: bold;
    color: #4a90e2;
    background: white;
    padding: 10px;
    border-radius: 5px;
    margin: 10px 0;
    letter-spacing: 1px;
}

.alert-actions {
    margin-top: 30px;
}

.alert-btn {
    padding: 12px 30px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.alert-btn.primary {
    background: #4a90e2;
    color: white;
}

.alert-btn.primary:hover {
    background: #357abd;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
}

/* Success Checkmark Animation */
.success-icon {
    margin-bottom: 20px;
}

.success-checkmark {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: block;
    stroke-width: 3;
    stroke: #28a745;
    stroke-miterlimit: 10;
    margin: 0 auto;
    box-shadow: inset 0px 0px 0px #28a745;
    animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
}

.success-checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 3;
    stroke-miterlimit: 10;
    stroke: #28a745;
    fill: none;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.success-checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }
    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #28a745;
    }
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Toast Notification */
.toast-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 20px;
    border-radius: 8px;
    color: white;
    font-weight: 500;
    z-index: 10001;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    transform: translateX(100%);
    transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    max-width: 350px;
    word-wrap: break-word;
}

.toast-notification.success {
    background: linear-gradient(45deg, #28a745, #20c997);
}

.toast-notification.error {
    background: linear-gradient(45deg, #dc3545, #fd7e14);
}

.toast-notification.info {
    background: linear-gradient(45deg, #17a2b8, #6f42c1);
}

.toast-notification.show {
    transform: translateX(0);
}

/* Banner và Carousel */
.carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.5);
    margin: 0 6px;
    border: none;
    transition: all 0.3s ease;
}

.carousel-indicators .active {
    background-color: #4a90e2;
    transform: scale(1.2);
}

/* Common Section Styles */
section {
    padding: 60px 0;
    background: #FFF;
}

section h2 {
    text-align: center;
    font-size: 40px;
    font-weight: 700;
    color: #333;
    margin-bottom: 25px;
    letter-spacing: 1px;
}

.description {
    text-align: center;
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 1000px;
    margin: 0 auto 30px auto;
    padding: 0 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Target Section */
.target-section .target-image {
    position: relative;
    width: 100%;
}

.target-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 10px;
}

.target-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #000;
    max-width: 70%;
}

.target-text h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
    text-shadow: 0 2px 4px rgba(255,255,255,0.8);
}

.target-text p {
    font-size: 16px;
    line-height: 1.6;
    text-shadow: 0 1px 2px rgba(255,255,255,0.8);
}

/* Install Steps */
.install-steps {
    max-width: 1000px;
    margin: 0 auto;
}

.install-step {
    margin-bottom: 60px;
    padding: 30px 0;
}

.step-content {
    display: flex;
    align-items: center;
    gap: 40px;
}

.install-step.reverse .step-content {
    flex-direction: row-reverse;
}

.step-text {
    flex: 1;
}

.step-text h3 {
    font-size: 28px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.step-text p {
    font-size: 16px;
    line-height: 1.7;
    color: #666;
}

.step-image {
    flex: 1;
    text-align: center;
}

.step-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.step-image img:hover {
    transform: scale(1.02);
}

/* Feature Image */
.feature-image {
    text-align: center;
    margin: 30px 0;
}

.feature-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

/* Pricing Container */
.pricing-container {
    max-width: 1200px;
    margin: 40px auto;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: flex;
    min-height: 500px;
}

.pricing-left {
    flex: 1;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.pricing-left::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, #4a90e2, #357abd);
}

.pricing-left h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
    text-align: left;
}

.total-text {
    font-size: 18px;
    color: #666;
    margin-bottom: 10px;
}

.price {
    font-size: 48px;
    font-weight: bold;
    color: #4a90e2;
    margin-bottom: 30px;
    text-shadow: 0 2px 4px rgba(74, 144, 226, 0.1);
}

.features {
    list-style: none;
    line-height: 1.8;
    padding: 0;
}

.features li {
    color: #333;
    margin-bottom: 10px;
    font-size: 16px;
    padding-left: 20px;
    position: relative;
}

.features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #28a745;
    font-weight: bold;
    font-size: 18px;
}

.pricing-right {
    flex: 1.2;
    padding: 40px;
    background: white;
}

.pricing-right h3 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333;
}

.note {
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
    font-style: italic;
    padding: 10px;
    background: #f8f9fa;
    border-radius: 5px;
    border-left: 3px solid #ffc107;
}

.option-item {
    margin-bottom: 20px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #4a90e2;
    transition: all 0.3s ease;
    cursor: pointer;
}

.option-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.option-item.disabled-option {
    opacity: 0.5;
    background: #f1f1f1;
    border-left-color: #ccc;
    cursor: not-allowed;
}

.option-item.disabled-option:hover {
    transform: none;
    box-shadow: none;
}

.option-content {
    margin-left: 25px;
}

.option-title {
    font-size: 16px;
    color: #333;
    font-weight: 600;
    margin-bottom: 8px;
}

.option-price {
    font-size: 14px;
    color: #4a90e2;
    font-weight: bold;
}

.radio-group {
    margin-top: 15px;
    padding-left: 10px;
}

.radio-group label {
    display: block;
    margin: 10px 0;
    font-size: 14px;
    color: #555;
    cursor: pointer;
    padding: 8px;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.radio-group label:hover {
    background: rgba(74, 144, 226, 0.1);
}

.radio-group input[type="radio"] {
    margin-right: 10px;
}

/* Order Button */
.btn-order {
    display: block;
    margin: 40px auto;
    padding: 18px 40px;
    background: linear-gradient(45deg, #ff6b6b, #ee5a52);
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 50px;
    font-size: 18px;
    font-weight: bold;
    box-shadow: 0 6px 20px rgba(255, 107, 107, 0.3);
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.btn-order::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.6s;
}

.btn-order:hover::before {
    left: 100%;
}

.btn-order:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4);
    color: white;
    text-decoration: none;
}

.btn-order:active {
    transform: translateY(-1px) scale(1.02);
}

/* Title with Icon */
.title-with-icon {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;
}

/* Changelog styles */
.pricing-container .addon {
    color: #d32f2f;
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 18px;
    position: relative;
}

.pricing-container .addon::before {
    content: "🚀";
    margin-right: 8px;
}

.pricing-container ul.addon {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.pricing-container ul.addon li {
    color: #333;
    margin-bottom: 8px;
    font-size: 14px;
    padding-left: 25px;
    position: relative;
    line-height: 1.5;
}

.pricing-container ul.addon li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #4a90e2;
    font-weight: bold;
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .pricing-container {
        flex-direction: column;
        margin: 20px 10px;
    }
    
    .step-content,
    .install-step.reverse .step-content {
        flex-direction: column;
        gap: 20px;
    }
    
    section h2 {
        font-size: 28px;
    }
    
    .target-text {
        position: static;
        transform: none;
        max-width: 100%;
        padding: 20px;
        background: rgba(255,255,255,0.95);
        border-radius: 10px;
        margin: 20px;
    }
    
    .popup-content {
        width: 95%;
        padding: 30px 20px;
    }
    
    .price {
        font-size: 36px;
    }
    
    .pricing-left, .pricing-right {
        padding: 25px 20px;
    }
    
    .option-content {
        margin-left: 15px;
    }
    
    .btn-order {
        margin: 30px auto;
        padding: 15px 30px;
        font-size: 16px;
    }
    
    .alert-modal {
        width: 95%;
        padding: 30px 20px;
    }
    
    .toast-notification {
        right: 10px;
        left: 10px;
        max-width: none;
    }
}

@media (max-width: 480px) {
    .popup-content {
        padding: 25px 15px;
    }
    
    .popup-content h2 {
        font-size: 20px;
    }
    
    .popup-content input {
        padding: 12px 15px;
        font-size: 13px;
    }
    
    section h2 {
        font-size: 24px;
    }
    
    .step-text h3 {
        font-size: 22px;
    }
    
    .pricing-left h2 {
        font-size: 24px;
    }
    
    .price {
        font-size: 32px;
    }
    
    .success-checkmark {
        width: 60px;
        height: 60px;
    }
    
    .alert-modal h3 {
        font-size: 20px;
    }
}

/* Print styles */
@media print {
    .popup, .btn-order, .toast-notification, .custom-alert-container {
        display: none !important;
    }
    
    .pricing-container {
        box-shadow: none;
        border: 1px solid #ccc;
    }
}

/* High contrast mode support */
@media (prefers-contrast: high) {
    .option-item {
        border: 2px solid #000;
    }
    
    .btn-order {
        border: 2px solid #000;
    }
    
    .popup-content input {
        border: 2px solid #000;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* Focus styles for accessibility */
.btn-order:focus,
.btn-submit:focus,
.popup-content input:focus,
.alert-btn:focus {
    outline: 3px solid #4a90e2;
    outline-offset: 2px;
}

/* Loading overlay */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.9);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    backdrop-filter: blur(3px);
}

.loading-content {
    text-align: center;
    padding: 30px;
}

.loading-spinner-large {
    width: 50px;
    height: 50px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid #4a90e2;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto 20px auto;
}
</style>

<?php
require "../footer.php";
?>