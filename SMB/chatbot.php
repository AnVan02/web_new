<title>Chatbot AI</title>
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
                <img src="../image/banner_sp_2.png" alt="Nextcloud">
            </div>
        </div>
    </div>
</section>

<!-- Tính năng nổi bật -->
<section class="features-section">
     <h2>Tính năng nổi bật</h2>
    <div class="container">
        <div class="feature-image">
            <img src="../image/nen_ai2.png" alt="Nextcloud Features">
        </div>
    </div>
</section>

<!-- Đối tượng -->
<section class="target-section">
    <div class="container">
        <div class="target-image">
            <img src="../image/nen_ai3.png" alt="Nextcloud Target Users">
            <div class="target-text">
                <h2>LỢI ÍCH VƯỢT TRỘI</h2>
                <p>
                    Tiết kiệm thời gian, tăng năng suất mọi loại báo thao tác thủ công và tìm kiếm suốt dữ. 
                    Giao diện tùy chỉnh thân thiện, không cần đào tạo. Thông tin truy xuất tức thì 
                    giúp lãnh đạo quyết định nhanh, an toàn và minh bạch.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- ROSA AI SMB -->
<section class="install-section">
     <div class="container">
          <div class="install-steps">
               <!-- Step 1 -->
               <div class="install-step">
                    <div class="step-content">
                         <div class="step-text">
                         <h3>Đa dạng đối tượng </h3>
                         <p>Phù hợp với doanh nghiệp vừa và nhỏ muốn tối ưu vận hành, công ty công nghệ và startup cần hệ sinh thái chuyên nghiệp, tổ chức giáo dục yêu cầu bảo mật chính xác, cùng các doanh nghiệp lo ngại rủi ro lưu trữ không đồng bộ.</p>
                         </div>
                         <div class="step-image">
                         <img src="../image/chat_ai1.png" alt="Step 1">
                         </div>
                    </div>
               </div>

               <!-- Step 2 -->
               <div class="install-step reverse">
                    <div class="step-content">
                         <div class="step-text">
                         <h3>Giải pháp toàn diện</h3>
                         <p>Doanh nghiệp nhận gói phần mềm toàn diện  gồm Nextcloud Enterprise, chatbot AI, phần mềm chấm công và trợ lý ảo AI khi mua ROSA AI SMB. Tất cả được triển khai bởi đội ngũ chuyên nghiệp với bảo trì và nâng cấp định kỳ. </p>
                         </div>
                         <div class="step-image">
                         <img src="../image/chat_ai2.png" alt="Step 2">
                         </div>
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
    font-family: 'Montserrat';
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

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.target-image {
    position: relative;
    display: inline-block;
    width: 100%;
}

.target-image img {
    width: 100%;
    height: auto;
    display: block;
}

.target-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #000; /* chỉnh màu chữ theo ý muốn */
    max-width: 70%;
}

.target-text h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
}

.target-text p {
    font-size: 16px;
    line-height: 1.6;
}


/* Common Section Styles */
section {
    padding: 40px 0; /* Giảm padding để bớt khoảng trắng */
    background: #f8f9fa;
}

section h2 {
    text-align: center;
    font-size: 30px;
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
.install-section .btn-group {
    display: flex;
    justify-content: center; /* căn giữa ngang */
    margin-top: 20px;
}



.install-section .btn-learn {
    display: inline-block;
    padding: 12px 28px;
    margin: 5px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    background-color: #fff;
    color: #d10000;
    border: 2px solid #d10000;
    transition: 0.3s;
}

.install-section .btn-learn:hover {
    background-color: #d10000;
    color: #fff;
}


@media (max-width: 768px) {
    /* Điều chỉnh section target (ảnh nền với text chồng lên) */
    .target-text {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        max-width: 100%;
        padding: 20px 15px;
        background: rgba(255,255,255,0.9);
        color: #333;
    }
    
    .target-text h2 {
        font-size: 22px;
        margin-bottom: 10px;
    }
    
    .target-text p {
        font-size: 14px;
    }
    
    /* Điều chỉnh padding các section */
    section {
        padding: 25px 0;
    }
    
    /* Tiêu đề nhỏ hơn */
    section h2 {
        font-size: 22px;
        margin-bottom: 15px;
        padding: 0 15px;
    }
    
    /* Mô tả nhỏ hơn */
    .description {
        font-size: 14px;
        padding: 0 15px;
        margin-bottom: 15px;
    }
    
    /* Các bước install */
    .install-step {
        padding: 15px 0;
        margin-bottom: 25px;
    }
    
    .step-content,
    .install-step.reverse .step-content {
        flex-direction: column;
        gap: 15px;
    }
    
    .step-text h3 {
        font-size: 18px;
        text-align: center;
    }
    
    .step-text p {
        font-size: 14px;
        text-align: center;
    }
    
    /* Nút tìm hiểu */
    .btn-group {
        margin-top: 15px;
    }
    
    .btn-learn {
        padding: 10px 20px;
        font-size: 14px;
    }
    
}

@media (max-width: 480px) {
    /* Điều chỉnh cho màn hình rất nhỏ */
    .target-text {
        padding: 15px 10px;
    }
    
    .target-text h2 {
        font-size: 20px;
    }
    
    section h2 {
        font-size: 20px;
    }
    
    .step-text h3 {
        font-size: 17px;
    }
    
    /* Giảm padding container */
    .container {
        padding: 0 10px;
    }
}

</style>

<?php require "../web/footer.php" ?>
