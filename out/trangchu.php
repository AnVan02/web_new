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


<section class="ds-section">
  <h2 class="ds-title">DÒNG SẢN PHẨM</h2>
  <p class="ds-subtitle">Đáp ứng đa dạng nhu cầu, mạnh mẽ, bền bỉ</p>

  <div class="ds-grid">
    <!-- Card 1 -->
    <article class="ds-card">
      <div class="ds-badge">
        <strong>3 NĂM</strong>
        <span>BẢO HÀNH</span>
      </div>

      <div class="ds-head">
        <div>
          <h3 class="ds-card-title">Office</h3>
          <p class="ds-card-desc">Phục vụ đa nhu cầu<br>Giá cả phải chăng</p>
        </div>
      </div>

      <div class="ds-media">
        <img src="../image/Group 151.png" alt="Office">
        <a href="#" class="ds-cta">KHÁM PHÁ NGAY</a>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="ds-card">
      <div class="ds-badge">
        <strong>3 NĂM</strong>
        <span>BẢO HÀNH</span>
      </div>

      <div class="ds-head">
        <div>
          <h3 class="ds-card-title">Server</h3>
          <p class="ds-card-desc">Máy chủ mạnh mẽ,<br>đáng tin cậy</p>
        </div>
      </div>

      <div class="ds-media">
        <img src="image/server.jpg" alt="Server">
        <a href="#" class="ds-cta">KHÁM PHÁ NGAY</a>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="ds-card">
      <div class="ds-badge">
        <strong>3 NĂM</strong>
        <span>BẢO HÀNH</span>
      </div>

      <div class="ds-head">
        <div>
          <h3 class="ds-card-title">Gaming</h3>
          <p class="ds-card-desc">Cấu hình đỉnh cao,<br>card đồ hoạ mạnh mẽ</p>
        </div>
      </div>

      <div class="ds-media">
        <img src="image/gaming.jpg" alt="Gaming">
        <a href="#" class="ds-cta">KHÁM PHÁ NGAY</a>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="ds-card">
      <div class="ds-badge">
        <strong>3 NĂM</strong>
        <span>BẢO HÀNH</span>
      </div>

      <div class="ds-head">
        <div>
          <h3 class="ds-card-title">Mini PC</h3>
          <p class="ds-card-desc">Kiểu dáng gọn gàng,<br>hiện đại, hiệu suất cao</p>
        </div>
      </div>

      <div class="ds-media">
        <img src="image/minipc.jpg" alt="Mini PC">
        <a href="#" class="ds-cta">KHÁM PHÁ NGAY</a>
      </div>
    </article>
  </div>
</section>

<style>
/* ======= ONLY affects elements with ds- prefix ======= */
.ds-section{font-family:system-ui,-apple-system,"Segoe UI",Roboto,Arial,sans-serif;padding:36px 16px;background:#fff}
.ds-title{margin:0 0 6px;text-align:center;font-size:22px;letter-spacing:.6px;font-weight:800;color:#3a3a3a}
.ds-subtitle{text-align:center;margin:0 0 26px;color:#8a8a8a;font-size:15px}

.ds-grid{max-width:980px;margin:0 auto;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px}

.ds-card{position:relative;background:#fff;border:1px solid #e9e9e9;border-radius:14px;box-shadow:0 10px 24px rgba(0,0,0,.06);
  padding:18px;display:flex;flex-direction:column;gap:12px}

.ds-badge{position:absolute;top:16px;right:16px;text-align:right;user-select:none}
.ds-badge strong{display:block;font-weight:800;color:#c6c6c6;font-size:16px;line-height:1}
.ds-badge span{display:block;color:#cfcfcf;font-size:11px;letter-spacing:.8px;margin-top:2px}

.ds-head{display:flex;justify-content:space-between;align-items:flex-start}
.ds-card-title{margin:0 0 6px;font-size:18px;font-weight:800;color:#2a2a2a}
.ds-card-desc{margin:0;color:#6e6e6e;font-size:14px;line-height:1.45}

.ds-media{position:relative;border-radius:12px;overflow:hidden}
.ds-media img{display:block;width:100%;height:230px;object-fit:cover}

.ds-cta{position:absolute;right:14px;bottom:14px;background:#9b6b5c;color:#fff;text-decoration:none;font-size:12.5px;
  padding:10px 16px;border-radius:22px;letter-spacing:.5px;font-weight:700;box-shadow:0 6px 14px rgba(155,107,92,.35)}
.ds-cta:hover{filter:brightness(.96)}

/* Responsive */
@media (max-width:780px){.ds-grid{grid-template-columns:1fr}.ds-media img{height:220px}}
</style>
<section class="product-section">
    <h2>GIẢI PHÁP AI</h2>
    <p>Giải pháp toàn diện cho công việc và cuộc sống</p>
</section>

<div class="ai_solution">
    <div class="card">
        <img src="../image/chatbot.png" alt="Chatbot AI">
        <div href="#" class="title">Chatbot AI<br>Tư vấn 24/7</div>
    </div>

    <div class="card">
        <img src="../image/camera.png" alt="Chấm công IP Camera">
        <div href="#" class="title">Chấm công<br>IP Camera</div>
    </div>

    <div class="card">
        <img src="../image/nextcloud.png" alt="Lưu trữ nextcloud">
        <div href="#" class="title">Lưu trữ<br>Nextcloud</div>
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
            echo '<p class="news-meta">Người viết: '.htmlspecialchars($row['article_author'], ENT_QUOTES, 'UTF-8');
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

<!-- <?php require "footer.php" ?>/ -->