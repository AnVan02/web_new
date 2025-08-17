<title>Châm công qua IP Camera</title>
<?php require "../web/header.php" ?>
<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner_camera.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div>

<!-- Section: Tại sao chọn -->
<section class="why-choose-section">
    <div class="container">
        <h2>Tiên phong chấm công qua IP Camera</h2>
        <p class="description">
            ROSA - AI Ready là thương hiệu tiên phong giải pháp chấm công truyền thống bằng IP Camera AI, 
            mang đến sự tiết kiệm, nhanh chóng, chính xác cho doanh nghiệp        
        </p>
        <div class="nextcloud-circles">
            <div class="feature-image">
                <img src="../image/chamcong1.png" alt="Nextcloud">
            </div>
        </div>
    </div>
</section>

<!-- Tính năng nổi bật -->
<section class="features-section">
    <div class="container">
        <div class="feature-image">
            <img src="../image/chamcong3.png" alt="Nextcloud Features">
        </div>
    </div>
</section>

<!-- Đối tượng -->
<section class="target-section">
    <div class="container">
        <div class="target-image">
            <img src="../image/chamcong4.png" alt="Nextcloud Target Users">
        </div>
    </div>
</section>

<!-- ROSA AI SMB -->
<section class="rosa-smb-section">
    <div class="container">
        <h2>ROSA AI SMB</h2>
        <p class="description">
            ROSA AI SMB là máy chủ on-premise mạnh mẽ, thiết kế cho doanh nghiệp cần xử lý AI, 
            lưu trữ và vận hành ổn định. Máy đi kèm gói phần mềm doanh nghiệp: chấm công tự động, 
            quản lý nhân sự và công cụ bảo mật trên Nextcloud.
        </p>
        <p class="description">
            Hỗ trợ VGA linh hoạt như <b>ASUS DUAL RX6500XT O4G</b> hoặc 
            <b>PALIT RTX 5070 GAMINGPRO 12GB</b>, đảm bảo hiệu năng cao cho AI, 
            phân tích hình ảnh và đồ họa 3D.
        </p>

        <div class="target-image">
            <img src="../image/chamcong5.png" alt="Nextcloud Target Users">
        </div>
    </div>
     <div class="btn-group">
          <a href="#" class="btn-learn">TÌM HIỂU NGAY</a>
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

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}


/* Common Section Styles */
section {
    padding: 40px 0; /* Giảm padding để bớt khoảng trắng */
    background: #f8f9fa;
}

section h2 {
    text-align: center;
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 25px; /* giảm khoảng cách dưới tiêu đề */
    letter-spacing: 1px;
}

.description {
    text-align: center;
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    max-width: 1000px;
    margin: 0 auto 20px auto; /* thêm margin dưới để tách vừa phải */
    padding: 0 20px;
}

/* Why Choose Section */
.why-choose-section {
    background: #f8f9fa;
}

.nextcloud-circles {
    text-align: center;
    margin: 20px 0 30px 0; /* giảm khoảng cách */
}

.feature-image,
.target-image {
    text-align: center;
    margin: 20px 0 30px 0; /* giảm margin */
}

.feature-image img,
.target-image img {
    max-width: 100%;
    height: auto;
}

/* Install Section */
.install-section {
    background: #f8f9fa;
}

.install-steps {
    max-width: 1000px;
    margin: 0 auto;
}

.install-step {
    margin-bottom: 40px;
    padding: 20px 0;
    position: relative;
}

.step-content {
    display: flex;
    align-items: center;
    gap: 30px;
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
    margin-bottom: 15px;
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
    border-radius: 8px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
}

/* === tim hiêu ngay === */
.rosa-smb-section {
    text-align: center;
    padding: 40px 20px;
}

.rosa-smb-section .btn-group {
    margin-top: 20px;
}

.rosa-smb-section .btn-contact,
.rosa-smb-section .btn-learn {
    display: inline-block;
    padding: 12px 28px;
    margin: 5px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
}

.rosa-smb-section .btn-contact {
    background-color: #d10000;
    color: #fff;
}

.rosa-smb-section .btn-contact:hover {
    background-color: #a80000;
}

.rosa-smb-section .btn-learn {
    background-color: #fff;
    color: #d10000;
    border: 2px solid #d10000;
}

.rosa-smb-section .btn-learn:hover {
    background-color: #d10000;
    color: #fff;
}


/* Mobile Responsive */
@media (max-width: 768px) {
    section {
        padding: 30px 0;
    }
    
    section h2 {
        font-size: 20px;
        margin-bottom: 20px;
    }
    
    .install-step {
        padding: 20px 10px;
        margin-bottom: 30px;
    }
    
    .step-content,
    .install-step.reverse .step-content {
        flex-direction: column;
        gap: 20px;
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
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    section h2 {
        font-size: 18px;
    }
    
    .install-step {
        padding: 15px 10px;
    }
}
</style>

<?php require "../web/footer.php" ?>
