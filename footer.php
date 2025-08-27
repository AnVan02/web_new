    <footer class="rosa-footer">
        <div class="wrapper">
            <div class="footer-main">
                  <!-- Logo và Mạng xã hội -->
                <div class="footer-column">
                   <div class="logo_footer">
                        <a href="/"><img src="/assets/images/rosa.png" alt="Logo"></a>
                    </div>
                    <h3>Công ty TNHH Điện tử và Tin học Toàn Việt</h3>
                    <h3 style="font-weight: normal;">MST: 3700491951</h3>
                    <h3>Mạng xã hội</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/people/ROSA-AI-Computer/61559427752479/" target="_blank" title="Facebook" style="background: #1877F2; font-size: 24px">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/rosa-ai-computer-20980b352/" target="_blank" title="YouTube" style="background: #0A66C2; font-size: 24px">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                  
                </div>
                <!-- Chính sách  -->
                <div class="footer-column">
                    <h3>Chính sách</h3>
                    <ul>
                        <!--<li><a href="#">Profile công ty</a></li>-->
                        <li><a href="/danhsachdaily.php">Đại lý</a></li>
                        <li><a href="/sanpham.php">Sản phẩm</a></li>
                        <li><a href="/chinhsachbaohanh.php">Bảo hành</a></li>
                        <li><a href="/chinhsachbaomat.php">Bảo mật</a></li>
                        <!--<li><a href="#">Điều khoản</a></li>-->
                    </ul>
                    <!--bộ công thương -->
                    <a href="http://online.gov.vn/Website/chi-tiet-135455" target="_blank">
                        <img src="../image/BCT.png" alt="Mô tả hình ảnh" style="width:150px; height:auto;">
                    </a>
                </div>

                <!-- Chương trình -->
                <div class="footer-column">
                    <h3>Chương trình ROSA</h3>
                    <ul>
                        <li><a href="/courses/python-course.php">Python cơ bản</a></li>
                        <li><a href="/courses/yolo-course.php">Thị giác máy tính</a></li>
                        <li><a href="/ROSA-SW.php">Ứng dụng ROSA</a></li>
                        <li><a href="/courses/Nextcloud.php">Quản trị doanh nghiệp</a></li>
                        <li><a href="/courses/palit.php">Chương trình Palit</a></li>
                    </ul>
                    
                    <div class="stats">
                        <?php
    						$count_file = "total_count.txt";
    
    						$visitor_file = "visitor_count.txt";
    
    						$user_ip = $_SERVER['REMOTE_ADDR'];
    						
    						$total_count_default = 88888;
    						$total_count_real = file_exists($count_file) ? (int)file_get_contents($count_file) : 1;
    						$total_count_display = $total_count_default + $total_count_real;
    
    						$visitor_ips = file_exists($visitor_file) ? file($visitor_file, FILE_IGNORE_NEW_LINES) : [];
    
    						if (!in_array($user_ip, $visitor_ips)) {
    							$visitor_ips[] = $user_ip;
    							file_put_contents($visitor_file, implode(PHP_EOL, $visitor_ips) . PHP_EOL);
    						}
    
    						$total_count_real++;
    
    						file_put_contents($count_file, $total_count_real);
    
    						// Số lượng người truy cập duy nhất
    						$unique_visitors_default = 11111;
    						$unique_visitors_real = count($visitor_ips);
    						$unique_visitors_display = $unique_visitors_default + $unique_visitors_real;
    						?>
    							<p style="font-size: 16px; color:#FFF">
                                    Lượt truy cập duy nhất: <?php echo $unique_visitors_display; ?>
                                </p>
                                <p style="font-size: 16px; color:#FFF">
                                    Tổng lượt truy cập: <?php echo $total_count_display; ?>
                                </p>
                    </div>
                </div>

                <!-- Liên hệ -->
                <div class="footer-column">
                    <h3>Liên hệ</h3>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><strong>Chi nhánh & TTBH HCM:</strong> 
                            150Ter Bùi Thị Xuân, Phường Bến Thành, TP.Hồ Chí Minh
                        </p>
                    </div>
                    
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><strong>Chi nhánh Hà Nội:</strong>
                            Số 01 Thái Hà, Phường Đống Đa, TP.Hà Nội
                        </p>
                    </div>

                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <p><strong>Phòng kinh doanh:</strong> 
                            (028) 39293765
                        </p>
                    </div>

                    <div class="contact-info">
                        <i class="fas fa-tools"></i>
                        <p><strong>Phòng kỹ thuật:</strong> 
                            (028) 39260996
                        </p>
                    </div>

                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <p><strong>Email:</strong>
                            support@rosacomputer.ai
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container rosa-footer-contact">
            <div class="rosa-footer-newsletter">
            <!-- Nhận thông tin từ ROSA -->
            <div style="background-color: #1d2c4b; padding: 20px; display: flex; justify-content: center; align-items: center; gap: 90px;">
                <span style="color: white; font-weight: bold; white-space: nowrap;">NHẬN THÔNG TIN TỪ ROSA</span>
                <form style="display: flex; background-color: white; border-radius: 8px; overflow: hidden; max-width: 500px; width: 100%;">
                    <input type="email" placeholder="Nhập địa chỉ Email của bạn"
                        style="flex: 1; padding: 10px 15px; border: none; outline: none; font-size: 14px; color: #555;">
                    <button type="submit" 
                        style="background-color: #007bff; color: white; font-weight: bold; padding: 10px 20px; border: none; cursor: pointer; font-size: 14px;">
                        ĐĂNG KÝ
                    </button>
                </form>
            </div>
            <!-- Popup Form -->
            <div class="rosa-overlay" id="rosaOverlay"></div>
                <div id="rosaPopupForm" style="display: none; position: fixed; top: 31%; left: 50%; transform: translate(-50%, -50%);
                    background: white; padding: 20px; box-shadow: 5px 5px 15px rgba(253, 23, 23, 0.3); border-radius: 10px; width: 30%; border: 2px solid red;">
                    <span id="rosaClosePopup" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px; color: red;">✖</span>
                    <h4><i class="fas fa-user-check" style="color:red; margin-right: 5px;"></i> THÔNG TIN KHÁCH HÀNG</h4>
                    <label for="name">Tên của bạn: <span style="color: red;">*</span></label>
                    <input type="text" id="rosaNameInput" required style="width: 100%; padding: 5px; margin: 5px 0; border: 1px solid #ff0000; border-radius: 5px;">
                    <label for="phone">Số điện thoại: <span style="color: red;">*</span></label>
                    <input type="tel" id="rosaPhoneInput" required style="width: 100%; padding: 5px; margin: 5px 0; border: 1px solid #ff0000; border-radius: 5px;">
                    <button id="rosaSubmitForm" style="background: red; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">Gửi</button>
                    <button id="rosaClosePopupBtn" style="background: gray; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">Đóng</button>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="wrapper">
                <p>© 2024 | Bản quyền thuộc về CÔNG TY TNHH ĐIỆN TỬ VÀ TIN HỌC TOÀN VIỆT <a href="https://rosacomputer.vn/">ROSA AI Computer</a></p>
            </div>
            <
        </div>
    </footer>
    
    <!-- mạng xã hội, chatbot -->
    <div class="contact-fixed">
        <div class="chabot_main">
            <img width="60" height="60" src="https://rosacomputer.vn/assets/images/chatbot.jpg"
                alt="chatbotai"
                style="cursor: pointer;"
                onclick="document.getElementById('chatbot-popup').style.display='block'" />
        </div>

        <div id="chatbot-popup"
            style="display:none; position: fixed; bottom: 5px; right: 10px; 
                    width: 90vw; max-width: 590px;
                    height: 80vh; max-height: 850px;
                    border: 1px solid #ccc; background: #fff;
                    position: fixed !important;
                    box-shadow: 0 4px 16px rgba(0,0,0,0.2);
                    border-radius: 8px; overflow: hidden
                    border: none !important;
                    outline: none !important;
                    box-shadow: none !important };">
                    
            <!-- HEADER CỐ ĐỊNH -->
            <div style="background: #eee; padding: 5px; text-align: right; height: 45px; z-index: 999999999 !important;">
                <button onclick="window.open('https://server1.rosachatbot.com/Rosa', '_blank')" style="margin-right: 10px; border: none;">⛶</button>
                <button onclick="document.getElementById('chatbot-popup').style.display='none'" style="border: none;">✕</button>
            </div>
            <!-- IFRAME CHIẾM PHẦN CÒN LẠI -->
            <div style="height:calc(100% - 45px); overflow:hidden; z-index: 999999999 !important;">
                <iframe src="https://server1.rosachatbot.com/Rosa" 
                        scrolling="yes"
                        style="border:none; width:100%; height:100%; z-index: 999999999 !important;"></iframe>
            </div>
        </div>

        <!-- zalo, facebook -->
            <a href="https://zalo.me/909749126673606301" target="_blank">
                <img width="48" height="48" src="https://img.icons8.com/color/48/zalo.png" alt="zalo"/>
            </a>
            
            <a href="https://www.facebook.com/rosaaicomputer/" target="_blank">
                <img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"/>    
            </a>
        </div>
    <!-- link css  -->
    <link rel="stylesheet" href="../style/footer.css">
    <script src="../script/footer.js"></script>
