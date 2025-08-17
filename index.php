<?php require "header.php" ?>
<link rel="stylesheet" href="../style/trangchu.css">

<!-- Banner -->

<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner.png" alt="Banner" class="hero-image">
            <div class="hero-text">
                <h2>MÁY TÍNH THƯƠNG HIỆU VIỆT NAM</h2>
                <p>Tiên phong giải pháp AI và chuyển đổi số</p>
            </div>
        </div>
    </div>
</div>

<!-- Title -->
<section class="ds-section">
  <h2 class="ds-title">DÒNG SẢN PHẨM</h2>
  <p class="ds-subtitle">Đáp ứng đa dạng nhu cầu, mạnh mẽ, bền bỉ</p>

 <section class="ds-grid">
  <!-- Card đơn giản -->
  <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="../image/1.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>

    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="../image/1.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>

    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="../image/1.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>
    <article class="ds-card">
    <div class="ds-media">
      <a href="link-to-page.html" class="ds-link">
        <img src="../image/1.png" alt="Office">
        <span class="ds-cta">KHÁM PHÁ NGAY</span>
      </a>
    </div>
  </article>
</section>
    
<section class="product-section">
    <h2>GIẢI PHÁP AI</h2>
    <p>Giải pháp toàn diện cho công việc và cuộc sống</p>
</section>

<div class="ai_solution">
    <div class="card">
        <a href="https://example.com/cham-cong-ip-camera">
            <img src="../image/botai.png" alt="Chatbot ai">
        </a>
    </div>

    <div class="card">
        <a href="https://example.com/cham-cong-ip-camera">
            <img src="../image/chamcong.png" alt="Chấm công IP Camera">
        </a>
    </div>

    <div class="card">
        <a href="https://example.com/cham-cong-ip-camera">
            <img src="../image/nextcloud.png" alt="Chương trình nextclaud">
        </a>
    </div>
  
</div>

<div class="banner">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner position-relative">
                    <div class="carousel-item active">
                        <img src="../image/background python.png" class="img-fluid" alt="python" onclick="window.location.href='product.php#gaming'">
                    </div>
                    <div class="hero-text">
                        <button class="button-style">ỨNG DỤNG</button>
                        <h2>KHÓA HỌC ROSA</h2>
                        <p>Khai mở máy tính thành bệ phóng sự nghiệp của bạn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="product-section">
    <h2>TIN TỨC</h2>
    <p>Cập nhật tin tức công nghệ và khuyến mãi</p>
</section>

<div class="news-container">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT article_tag, article_title, article_date, article_image, article_link, article_content
            FROM article 
            ORDER BY article_date DESC 
            LIMIT 3";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="news-card">';
            echo '<a href="/tintuc/' . htmlspecialchars($row['article_link'], ENT_QUOTES, 'UTF-8') . '">';
            echo '<img src="/tintuc_test/admin/modules/blog/uploads/' . htmlspecialchars($row['article_image'], ENT_QUOTES, 'UTF-8') . '" alt="News Image">';
            echo '</a>';
            echo '<div class="news-content">';
            echo '<div class="news-title">';
            echo '<a href="/tintuc/' . htmlspecialchars($row['article_link'], ENT_QUOTES, 'UTF-8') . '">';
            echo htmlspecialchars($row['article_title'], ENT_QUOTES, 'UTF-8');
            echo '</a>';
            echo '</div>';
            echo '<p class="news-meta">Ngày đăng: ' . htmlspecialchars(date('d/m/Y', strtotime($row['article_date'])), ENT_QUOTES, 'UTF-8');
            if (isset($row['article_author'])) {
                echo ' - Tác giả: ' . htmlspecialchars($row['article_author'], ENT_QUOTES, 'UTF-8');
            }
            echo '</p>';
            echo '<p class="desc">' . strip_tags(substr($row['article_content'], 0, 200)) . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>Không có tin tức để hiển thị.</p>';
    }

    $conn->close();
    ?>
</div>

<section class="product-section">
    <h2>CÂU HỎI THƯỜNG GẶP</h2>
    <p>Xem giải đáp nhanh thắc mắc phổ biến</p>
</section>

<div class="faq-container">
    <div class="faq-buttons">
        <button class="faq-button active" data-category="tuvan">TƯ VẤN</button>
        <button class="faq-button" data-category="baohanh">BẢO HÀNH</button>
        <button class="faq-button" data-category="giaohang">GIAO HÀNG</button>
        <button class="faq-button" data-category="thanhtoan">THANH TOÁN</button>
        <button class="faq-button" data-category="sanpham">SẢN PHẨM</button>
        <button class="faq-button" data-category="cauhoi">CÂU HỎI</button>
    </div>
    <hr>
    
    <div class="faq-content">
        
        <!-- Tư vấn -->

        <div class="faq-item active" data-category="tuvan">
            <div class="faq-question">ROSA hiện tại có chi nhánh không?</div>
            <div class="faq-answer">
                Hiện tại Rosa chỉ có một địa chỉ giao dịch chính thức tại:<br>
                150 Tô, đường Bùi Thị Xuân, phường Bến Thành, TP. Hồ Chí Minh.<br>
                Quý khách vui lòng đến trực tiếp địa chỉ này để được tư vấn và trải nghiệm sản phẩm với đầy đủ dịch vụ hỗ trợ.
            </div>
        </div>
        
        <div class="faq-item" data-category="tuvan">
            <div class="faq-question">Giờ làm việc của ROSA</div>
            <div class="faq-answer">
                Rosa hoạt động từ Thứ 2 đến Thứ 7 trong khung giờ hành chính.<br>
                Để đảm bảo phục vụ tốt nhất và kịp thời hỗ trợ đầy đủ, quý khách có thể kiểm tra thông tin giờ làm việc chi tiết tại website chính thức: <a href="https://rosacomputer.vn/" class="website-link">https://rosacomputer.vn/</a>
            </div>
        </div>

        <div class="faq-item" data-category="tuvan">
            <div class="faq-question">ROSA có bán hàng trên các sàn thương mại điện tử không?</div>
            <div class="faq-answer">
                Hiện tại Rosa phân phối sản phẩm thông qua nhiều kênh như cửa hàng online, hệ thống đại lý và một số sàn thương mại điện tử. Tuy nhiên, để đảm bảo quyền lợi, chất lượng sản phẩm và hỗ trợ đầy đủ, chúng tôi khuyến khích quý khách:<br>
                - Mua trực tiếp tại showroom chính thức của Rosa.<br>
                - Hoặc đặt hàng qua website: <a href="https://rosacomputer.vn/" class="website-link">https://rosacomputer.vn/</a>
            </div>
        </div>

        <!-- Bảo hành -->

        <div class="faq-item" data-category="baohanh">
            <div class="faq-question">Thời gian bảo hành của sản phẩm là bao lâu?</div>
            <div class="faq-answer">
                Đa số sản phẩm của chúng tôi được bảo hành trong vòng 3 năm kể từ ngày mua. Vui lòng kiểm tra phiếu bảo hành đi kèm để biết thời gian bảo hành cụ thể.
            </div>
        </div>
        <div class="faq-item" data-category="baohanh">
            <div class="faq-question">Máy bộ Rosa bảo hành bao lâu?</div>
            <div class="faq-answer">
                Tất cả máy bộ Rosa được bảo hành 3 năm theo quy định từ nhà sản xuất         
            </div>
        </div>
        <div class="faq-item" data-category="baohanh">
            <div class="faq-question">Số điện thoại trung tâm bảo hành Rosa là gì?</div>
            <div class="faq-answer">
                (028) 3926 0996       
            </div>
        </div>

        <!-- Giao hàng -->

        <div class="faq-item" data-category="giaohang">
            <div class="faq-question">Thời gian giao hàng mất bao lâu?</div>
            <div class="faq-answer">
                Thời gian giao hàng tùy thuộc vào vị trí và khu vực nhận hàng Rosa luôn cố gắng giao nhanh nhất có thể 
            </div>
        </div>

        <!-- Thanh toán -->

        <div class="faq-item" data-category="thanhtoan">
            <div class="faq-question">ROSA hổ trợ những phương thức thanh toán nào?</div>
            <div class="faq-answer">
                Rosa hỗ trợ hai hình thức thanh toán: chuyển khoản qua ngân hàng và thanh toán tiền mặt
            </div>
        </div>

        <!-- Sản phẩm -->

        <div class="faq-item" data-category="sanpham">
            <div class="faq-question">Sản phẩm có sẵn hàng không?</div>
            <div class="faq-answer">
                Sản phẩm của chúng tôi có sẵn tại showroom hoặc có thể đặt hàng trực tuyến. Vui lòng kiểm tra tại website <a href="https://rosacomputer.vn/" class="website-link">https://rosacomputer.vn/</a>
            </div>
        </div>
        <div class="faq-item" data-category="sanpham">
            <div class="faq-question">Rosa hiện đang cung cấp những sản phẩm gì?</div>
            <div class="faq-answer">
                Rosa tập trung vào dòng máy bộ PC với nhiều cấu hình phù hợp nhu cầu học tập, văn phòng, gaming, lập trình
            </div>
        </div>
        <div class="faq-item" data-category="sanpham">
            <div class="faq-question">Các dòng máy bộ chính của Rosa gồm những gì?</div>
            <div class="faq-answer">
                ROSA AI, ROSA VĂN PHÒNG, ROSA GAMER           
            </div>
        </div>
        
        <div class="faq-item" data-category="sanpham">
            <div class="faq-question">ROSA AI là gì?</div>
            <div class="faq-answer">
                Dòng máy ROSA AI được thiết kế dành riêng cho lập trình và phát triển trí tuệ nhân tạo. Tích hợp cấu hình mạnh, cài sẵn công cụ AI, sẵn sàng cho hành trình sáng tạo của bạn
            </div>
        </div>

        <!-- Câu hỏi -->

        <div class="faq-item" data-category="cauhoi">
            <div class="faq-question">Làm thế nào để đặt hàng qua website?</div>
            <div class="faq-answer">
                Để đặt hàng qua website, hãy truy cập <a href="https://rosacomputer.vn/" class="website-link">https://rosacomputer.vn/</a>, chọn sản phẩm bạn muốn, thêm vào giỏ hàng và thanh toán theo hướng dẫn.
            </div>
        </div>
    </div>
</div>

<script src="../script/trangchu.js"></script>

<?php require "footer.php" ?>