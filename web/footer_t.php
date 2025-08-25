<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Giá Chatbot</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .pricing-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            min-height: 400px;
        }
        
        .pricing-left {
            flex: 1;
            padding: 30px;
            background: #f8f9fa;
        }
        
        .pricing-left h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        
        .total-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .price {
            font-size: 48px;
            font-weight: bold;
            color: #4a90e2;
            margin-bottom: 20px;
        }
        
        .features {
            list-style: none;
            line-height: 1.6;
        }
        
        .features li {
            color: #333;
            margin-bottom: 5px;
            font-size: 14px;
        }
        
        .pricing-right {
            flex: 1;
            padding: 30px;
            background: white;
        }
        
        .pricing-right h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .note {
            font-size: 12px;
            color: #999;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        
        .option-item {
            margin-bottom: 20px;
        }
        
        .radio-group {
            margin-top: 8px;
        }
        
        .radio-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #555;
            cursor: pointer;
        }
        
        .radio-group input[type="radio"] {
            margin-right: 8px;
        }
        
        .deploy-btn {
            background: linear-gradient(45deg, #4a90e2, #357abd);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(74, 144, 226, 0.3);
        }
        
        .deploy-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(74, 144, 226, 0.4);
        }
        
        /* Popup styles */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
        
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 12px;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 1001;
        }
        
        .popup h3 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #4a90e2;
        }
        
        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-submit {
            flex: 1;
            background: #4a90e2;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-submit:hover {
            background: #357abd;
        }
        
        .btn-cancel {
            flex: 1;
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-cancel:hover {
            background: #5a6268;
        }
        
        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: #999;
            cursor: pointer;
        }
        
        .close-btn:hover {
            color: #333;
        }
        
        .option-content {
            flex: 1;
        }
        
        .option-title {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .option-price {
            font-size: 12px;
            color: #4a90e2;
            font-weight: bold;
        }
        
        .option-default {
            font-size: 12px;
            color: #999;
        }
        
        select {
            width: 200px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 12px;
            color: #666;
            background-color: #f8f9fa;
        }
        
        input[type="text"] {
            width: 200px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 12px;
        }
        
        .disabled-option {
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="pricing-container">
        <!-- Bên trái -->
        <div class="pricing-left">
            <h2>BẢNG GIÁ</h2>
            <p class="total-text">Tổng cộng chi phí:</p>
            <p class="price" id="totalPrice">400.000</p>
            <ul class="features">
                <li>- Thiết kế sẵn website riêng cho Chatbot</li>
                <li>- Quản lý cơ sở tri thức trực truyến (Nextcloud)</li>
                <li>- Tra cứu lịch sử trò chuyện</li>
                <li>- Dung lượng: 3 MB</li>
                <li>- Số câu trả lời: 3000 tin/tháng</li>
            </ul>
        </div>
        
        <!-- Bên phải -->
        <div class="pricing-right">
            <h3>Tính năng tuỳ chọn:</h3>
            <p class="note">(Các tuỳ chọn mới sẽ tự động thêm vào tổng cộng chi phí)</p>
            
            <!-- Tích hợp live chat -->
            <div class="option-item">
                <div class="option-content">
                    <div class="option-title">Tích hợp live chat (Nextcloud Talk)</div>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="livechat" class="addon" value="0" checked>
                            Không chọn
                        </label>
                        <label>
                            <input type="radio" name="livechat" class="addon" value="100000">
                            Có (+100.000/tháng)
                        </label>
                    </div>
                </div>
            </div>
            
            <!-- Tăng tài khoản trực -->
            <div class="option-item disabled-option">
                <input type="checkbox" name="accounts" class="addon" disabled>
                <div class="option-content">
                    <div class="option-title">Tăng tài khoản trực</div>
                    <select disabled>
                        <option>Mặc định</option>
                    </select>
                </div>
            </div>
            
            <!-- Tăng dung lượng -->
            <div class="option-item disabled-option">
                <input type="checkbox" name="storage" class="addon" disabled>
                <div class="option-content">
                    <div class="option-title">Tăng dung lượng</div>
                    <input type="text" placeholder="Nhập dung lượng bạn cần" disabled>
                </div>
            </div>
            
            <!-- Tăng số lượng câu trả lời -->
            <div class="option-item">
                <div class="option-content">
                    <div class="option-title">Tăng số lượng câu trả lời</div>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="messages" class="addon" value="0" checked>
                            Không chọn
                        </label>
                        <label>
                            <input type="radio" name="messages" class="addon" value="100000">
                            1000 tin nhắn (+100.000/tháng)
                        </label>
                        <label>
                            <input type="radio" name="messages" class="addon" value="200000">
                            2000 tin nhắn (+200.000/tháng)
                        </label>
                        <label>
                            <input type="radio" name="messages" class="addon" value="500000">
                            5000 tin nhắn (+500.000/tháng)
                        </label>
                    </div>
                </div>
            </div>
            
            <!-- Tích hợp Zalo OA -->
            <div class="option-item disabled-option">
                <input type="radio" name="zalo" class="addon" disabled>
                <div class="option-content">
                    <div class="option-title">Tích hợp chatbot lên Zalo OA</div>
                    <div class="option-default">Chưa khả dụng</div>
                </div>
            </div>
        </div>
    </div>
 <!-- Nút gọi form -->
                <div class="btn-group">
                    <a href="javascript:void(0)" class="btn-learn" id="openForm">TRIỂN KHAI NGAY</a>
                </div><br>

    <!-- Popup Form -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
            <button class="close-btn" onclick="closePopup()">&times;</button>
            <h3>Thông tin liên hệ</h3>
            <form id="contactForm">
                <div class="form-group">
                    <label for="customerName">Họ và tên:</label>
                    <input type="text" id="customerName" name="customerName" required>
                </div>
                <div class="form-group">
                    <label for="customerEmail">Email:</label>
                    <input type="email" id="customerEmail" name="customerEmail" required>
                </div>
                <div class="form-group">
                    <label for="customerPhone">Số điện thoại:</label>
                    <input type="tel" id="customerPhone" name="customerPhone" required>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="closePopup()">Hủy</button>
                    <button type="submit" class="btn-submit">Gửi yêu cầu</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Tính toán tổng chi phí
        function updateTotalPrice() {
            let basePrice = 400000;
            let totalPrice = basePrice;
            
            // Lấy tất cả radio button được chọn
            const checkedRadios = document.querySelectorAll('.addon:checked');
            checkedRadios.forEach(radio => {
                if (radio.value && radio.value !== "0") {
                    totalPrice += parseInt(radio.value);
                }
            });
            
            document.getElementById('totalPrice').textContent = totalPrice.toLocaleString('vi-VN');
        }
        
        // Thêm event listener cho tất cả radio buttons
        document.querySelectorAll('.addon').forEach(radio => {
            radio.addEventListener('change', updateTotalPrice);
        });
        
        // Popup functions
        function openPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }
        
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.body.style.overflow = 'auto'; // Allow scrolling
        }
        
        // Close popup when clicking overlay
        document.getElementById('popupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup();
            }
        });
        
        // Handle form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const name = document.getElementById('customerName').value;
            const email = document.getElementById('customerEmail').value;
            const phone = document.getElementById('customerPhone').value;
            
            // Get selected options
            const selectedOptions = [];
            const checkedRadios = document.querySelectorAll('.addon:checked');
            
            checkedRadios.forEach(radio => {
                if (radio.value && radio.value !== "0") {
                    const optionName = radio.name;
                    const optionText = radio.parentElement.textContent.trim();
                    selectedOptions.push(`${getOptionTitle(optionName)}: ${optionText}`);
                }
            });
            
            // Calculate total
            let basePrice = 400000;
            let totalPrice = basePrice;
            checkedRadios.forEach(radio => {
                if (radio.value && radio.value !== "0") {
                    totalPrice += parseInt(radio.value);
                }
            });
            
            // Create email content
            const emailContent = `
        Yêu cầu triển khai Chatbot

        THÔNG TIN KHÁCH HÀNG:s
        - Họ tên: ${name}
        - Email: ${email}
        - Số điện thoại: ${phone}

        TÍNH NĂNG ĐÃ CHỌN:
        ${selectedOptions.length > 0 ? selectedOptions.join('\n') : 'Chỉ sử dụng gói cơ bản'}

        TỔNG CHI PHÍ: ${totalPrice.toLocaleString('vi-VN')} VNĐ/tháng

        Chi tiết gói cơ bản (400.000 VNĐ):
        - Thiết kế sẵn website riêng cho Chatbot
        - Quản lý cơ sở tri thức trực truyến (Nextcloud)
        - Tra cứu lịch sử trò chuyện
        - Dung lượng: 3 MB
        - Số câu trả lời: 3000 tin/tháng
                    `;
            
            // Create mailto link
            const subject = encodeURIComponent('Yêu cầu triển khai Chatbot - ' + name);
            const body = encodeURIComponent(emailContent);
            const mailtoLink = `mailto:support@example.com?subject=${subject}&body=${body}`;
            
            // Open email client
            window.location.href = mailtoLink;
            
            // Close popup and show success message
            closePopup();
            alert('Đã mở ứng dụng email để gửi yêu cầu. Vui lòng kiểm tra và gửi email!');
            
            // Reset form
            this.reset();
        });
        
        // Helper function to get option title
        function getOptionTitle(optionName) {
            const titles = {
                'livechat': 'Tích hợp live chat',
                'messages': 'Tăng số lượng câu trả lời',
                'zalo': 'Tích hợp Zalo OA'
            };
            return titles[optionName] || optionName;
        }
    </script>
</body>
</html>