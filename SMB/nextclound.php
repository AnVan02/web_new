<title>Nextcloud</title>
<?php require "../web/header.php" ?>
<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner1.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div>

<!-- Section: Tại sao chọn -->
<section class="why-choose-section">
    <div class="container">
        <h2>TẠI SAO CHỌN NEXTCLOUD?</h2>
        <p class="description">
            Không chỉ là dịch vụ đám mây, Nextcloud bảo vệ dữ liệu bằng mã hoá tiên tiến, cho phép tự lưu trữ, tuỳ chỉnh linh hoạt và tiết kiệm chi phí. Hoạt động mượt trên mọi thiết bị, không phụ thuộc nhà cung cấp độc quyền.
        </p>
        <div class="nextcloud-circles">
            <div class="feature-image">
                <img src="../image/nextclound1.png" alt="Nextcloud">
            </div>
        </div>
    </div>
</section>

<!-- Tính năng nổi bật -->
<section class="features-section">
    <div class="container">
        <h2>TÍNH NĂNG NỔI BẬT</h2>
        <p class="description">
            Nextcloud cung cấp giải pháp quản lý dữ liệu và công tác toàn diện với Hub để họp, chat, chia sẻ màn hình; Files để lưu trữ, chia sẻ, đồng bộ; Groupware để quản lý lịch, danh bạ email.
        </p>
        <div class="feature-image">
            <img src="../image/nextclound2.png" alt="Nextcloud Features">
        </div>
    </div>
</section>

<!-- Đối tượng -->
<section class="target-section">
    <div class="container">
        <h2>NEXTCLOUD DÀNH CHO AI?</h2>
        <p class="description">
            NEXTCLOUD phù hợp nhiều đối tượng: cá nhân lưu trữ, chia sẻ an toàn; doanh nghiệp quản lý dự án, chia sẻ nội bộ và tích hợp văn phòng tiết kiệm chi phí; chính phủ lưu trữ thông tin nhạy cảm đạt chuẩn an ninh.
        </p>
        <div class="target-image">
            <img src="../image/nextclound3.png" alt="Nextcloud Target Users">
        </div>
       
    </div>
</section>

<!-- Cài đặt -->
<section class="install-section">
    <div class="container">
        <h2>CÁCH CÀI ĐẶT NEXTCLOUD</h2>
        <div class="install-steps">
            <!-- Step 1 -->
            <div class="install-step">
                <div class="step-content">
                    <div class="step-text">
                        <h3>Bước 1: Cài đặt ứng dụng</h3>
                        <p>Để cài đặt trên điện thoại di động, người dùng cần tải xuống ứng dụng Nextcloud từ Google Play Store hoặc App Store trên iOS. Với máy tính PC, bạn tiến hành mở tệp vừa tải và chọn → Run as administrator → Yes → Next → Install nếu được hỏi để tiến hành cài đặt ứng dụng</p>
                    </div>
                    <div class="step-image">
                        <img src="../image/buoc1.png" alt="Step 1">
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="install-step reverse">
                <div class="step-content">
                    <div class="step-text">
                        <h3>Bước 2: Đăng nhập tài khoản</h3>
                        <p>Mở ứng dụng, chọn Log in và nhập Server Address của hệ thống Nextcloud. Khi giao diện Connect to your account hiện ra, chọn Log in, nhập tên đăng nhập và mật khẩu đã được cung cấp, sau đó chọn Login → Grant Access để cấp quyền kết nối.</p>
                    </div>
                    <div class="step-image">
                        <img src="../image/buoc2.png" alt="Step 2">
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="install-step">
                <div class="step-content">
                    <div class="step-text">
                        <h3>Bước 3: Đồng bộ và Quản lý tệp</h3>
                        <p>Chọn đồng bộ toàn bộ dữ liệu hoặc chỉ những mục cần thiết, sau đó tại Local Folder chọn thư mục lưu trữ từ Nextcloud và bấm Connect. Khi thông báo đồng bộ thành công xuất hiện, vào This PC để kiểm tra dữ liệu đã được lưu trong thư mục Nextcloud.</p>
                    </div>
                    <div class="step-image">
                        <img src="../image/buoc3.png" alt="Step 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    background: #f5f5f5;
}


/* banner nên */
.target-section .container {
    max-width: 100%;
    padding: 0;
}

.target-image {
    width: 100%;
}

.target-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* ===== HEADER & BANNER ======= */

.banner, .row, .hero-section {
    width: 100%;
    height: auto;
    overflow: visible;
}
.hero-image {
    width: 100%;
    height: auto;
    display: block;
}

/*  ====== phân trang ====== */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Common Section Styles */
section {
    padding: 80px 0;
    /* margin-bottom: 60px; tạo khoảng cách giữa các section */
}

section:nth-of-type(odd) {
    background: #f8f9fa; /* nền xám nhạt */
}

section:nth-of-type(even) {
    background: #ffffff; /* nền trắng xen kẽ */
}

section h2 {
    text-align: center;
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 60px;
    letter-spacing: 1px;
}

.description {
    text-align: center;
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Why Choose Section */
.nextcloud-circles {
    text-align: center;
    margin: 40px 0 60px 0;
}

.nextcloud-logo img {
    max-width: 200px;
    height: auto;
}

/* Features & Target Section */
.feature-image,
.target-image {
    text-align: center;
    margin: 40px 0 60px 0;
}

.feature-image img,
.target-image img {
    max-width: 100%;
    height: auto;
}

/* Install Section */
.install-steps {
    max-width: 1000px;
    margin: 0 auto;
}

.install-step {
    margin-bottom: 60px;
    padding: 40px 0;
    position: relative;
}

.step-content {
    display: flex;
    align-items: center;
    gap: 50px;
}

.install-step.reverse .step-content {
    flex-direction: row-reverse;
}

.step-text {
    flex: 1;
}

.step-text h3 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.step-text p {
    font-size: 15px;
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
}
ol, ul {
    margin: 0;          /* bỏ margin mặc định */
    padding-left: 0;    /* bỏ padding mặc định */
    list-style: none;   /* bỏ dấu chấm, số */
}


/* Mobile Responsive */
@media (max-width: 768px) {
    section {
        padding: 50px 0;
        margin-bottom: 40px;
    }
    
    section h2 {
        font-size: 20px;
        margin-bottom: 40px;
    }
    
    .install-step {
        padding: 30px 20px;
        margin-bottom: 50px;
    }
    
    .step-content,
    .install-step.reverse .step-content {
        flex-direction: column;
        gap: 30px;
        text-align: center;
    }
    
    .step-text h3 {
        font-size: 18px;
    }
    
    .step-text p {
        font-size: 14px;
    }
    
    .description {
        font-size: 14px;
        padding: 0 10px;
    }
    /* Install Steps */
    .step-content {
        flex-direction: column !important;
        gap: 20px;
        text-align: center;
    }

    .step-text h3 {
        font-size: 17px;
    }

    .step-text p {
        font-size: 14px;
        line-height: 1.6;
    }

    .step-image img {
        max-width: 90%;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    section h2 {
        font-size: 18px;
    }
    
    .install-step {
        padding: 25px 15px;
    }
        .description {
        font-size: 13px;
        padding: 0 8px;
    }

    .step-text h3 {
        font-size: 16px;
        margin-bottom: 12px;
    }

    .step-text p {
        font-size: 13px;
        line-height: 1.5;
    }

    .step-image img {
        width: 100%;
        border-radius: 8px;
    }
}
</style>

<?php require "../web/footer.php" ?>
