
<link rel="stylesheet" href="index.css">

<!-- Banner -->
<section class="hero-section">
    <img src="../image/banner.png" alt="Banner" class="hero-image">
    <div class="hero-text">
        <h2>MÁY TÍNH THƯƠNG HIỆU VIỆT NAM</h2>
        <p>Tiên phong giải pháp AI và chuyển đổi số</p>
    </div>
</section>

<!-- Dòng sản phẩm -->
<section class="product-section">
    <h2>DÒNG SẢN PHẨM</h2>
    <p>Đáp ứng đa dạng nhu cầu, mạnh mẽ, bền bỉ</p>
    <div class="product-grid">
        <div class="product-card">
            <img src="../image/office.jpg" alt="Office PC">
            <div class="warranty">3 NĂM<br>BẢO HÀNH</div>
            <h3>Office</h3>
            <p>Phục vụ đa nhu cầu<br>Giá cả phải chăng</p>
            <a href="#" class="btn">KHÁM PHÁ NGAY</a>
        </div>
        <div class="product-card">
            <img src="../image/server.jpg" alt="Server">
            <div class="warranty">3 NĂM<br>BẢO HÀNH</div>
            <h3>Server</h3>
            <p>Máy chủ mạnh mẽ,<br>đáng tin cậy</p>
            <a href="#" class="btn">KHÁM PHÁ NGAY</a>
        </div>
        <div class="product-card">
            <img src="../image/gaming.jpg" alt="Gaming PC">
            <div class="warranty">3 NĂM<br>BẢO HÀNH</div>
            <h3>Gaming</h3>
            <p>Cấu hình đỉnh cao,<br>card đồ họa mạnh mẽ</p>
            <a href="#" class="btn">KHÁM PHÁ NGAY</a>
        </div>
        <div class="product-card">
            <img src="../image/minipc.jpg" alt="Mini PC">
            <div class="warranty">3 NĂM<br>BẢO HÀNH</div>
            <h3>Mini PC</h3>
            <p>Kiểu dáng gọn gàng,<br>hiện đại, hiệu suất cao</p>
            <a href="#" class="btn">KHÁM PHÁ NGAY</a>
        </div>
    </div>
</section>

<!-- AI Solutions -->
<section class="product-section">
    <h2>AI SOLUTIONS</h2>
    <p>Giải pháp toàn diện cho công việc và cuộc sống</p>
    <div class="ai-grid">
        <div class="ai-card">
            <img src="../image/chatbot.png" alt="Chatbot AI">
            <p>Chatbot AI<br>Tư vấn 24/7</p>
        </div>
        <div class="ai-card">
            <img src="../image/camera.png" alt="Chấm công IP Camera">
            <p>Chấm công<br>IP Camera</p>
        </div>
        <div class="ai-card">
            <img src="../image/nextcloud.png" alt="Lưu trữ Nextcloud">
            <p>Lưu trữ<br>Nextcloud</p>
        </div>
    </div>
</section>

<!-- Khóa học Python -->
<section class="python-banner">
    <img src="../image/background_python.png" alt="Python Cơ bản">
    <div class="python-text">
        <button class="btn-outline">KHÓA HỌC</button>
        <h2>PYTHON CƠ BẢN</h2>
        <p>Khởi đầu mạnh mẽ - Chinh phục thế giới lập trình</p>
    </div>
</section>

<!-- Tin tức -->
<section class="product-section">
    <h2>TIN TỨC</h2>
    <p>Cập nhật tin tức công nghệ và khuyến mãi</p>
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

        $sql = "SELECT article_title, article_date, article_image, article_link 
                FROM article 
                ORDER BY article_date DESC 
                LIMIT 3";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="news-card">';
                echo '<a href="/tintuc/' . htmlspecialchars($row['article_link']) . '">';
                echo '<img src="/tintuc_test/admin/modules/blog/uploads/' . htmlspecialchars($row['article_image']) . '" alt="News">';
                echo '</a>';
                echo '<div class="news-title">' . htmlspecialchars($row['article_title']) . '</div>';
                echo '<p class="news-date">Ngày đăng: ' . date('d/m/Y', strtotime($row['article_date'])) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>Không có tin tức để hiển thị.</p>';
        }

        $conn->close();
        ?>
    </div>
</section>

<!-- FAQ -->
<section class="product-section">
    <h2>CÂU HỎI THƯỜNG GẶP</h2>
    <p>Xem giải đáp nhanh thắc mắc phổ biến</p>
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
            <div class="faq-item active" data-category="tuvan">
                <div class="faq-question">ROSA hiện tại có chi nhánh không?</div>
                <div class="faq-answer">
                    Hiện tại Rosa chỉ có một địa chỉ giao dịch chính thức tại:<br>
                    150 Tô, đường Bùi Thị Xuân, phường Bến Thành, TP. Hồ Chí Minh.
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../script/trangchu.js"></script>
<?php require "footer.php" ?>
