<?php require "../web/header.php" ?>
<link rel="stylesheet" href="../style/chamcong.css">


<div id="bannerCarousel" class ="corousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../image/Chatbot.png" alt="Banner" class="hero-image">   
        </div>
        
        <div class="carousel-item">
            <img src="" clas="d-block w-100" alt="">
        </div>

        <div class="carousel-item">
            <img src="" clas="d-block w-100"  alt="">
        </div>

    </div> 
</div>

<script>
    //=== banner ====
    const images = document.querySelectorAll('.hero-section .hero-image');
    let currentIndex = 0;

    function showNextImage() {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');

        // tạo delay ngẫu nhiên từ 1 đến 5 giây
        const randomDelay = Math.floor(Math.random() * 2000) + 1000;
        setTimeout(showNextImage, randomDelay);
    }

    // chạy lần đầu
    setTimeout(showNextImage, 1000);

</script>

<!-- Title -->
<section style="max-width:700px;margin:0 auto;text-align:center;padding:48px 24px 0 24px;">
    <h4 style="font-size:1.5rem;font-weight:500;margin-bottom:12px;color:#222;">Tiên phong chấm công qua IP Camera</h4>
    <p style="font-size:1.08rem;color:#222;line-height:1.6;margin-bottom:0;">ROSA - AI Ready là thương hiệu tiên phong giải pháp chấm công truyền thống bằng IP Camera AI, mang đến sự tiết kiệm, nhanh chóng, chính xác cho doanh nghiệp.</p>
</section>

<div class="why-section">
    <div class="row">
        <div class="why-section">
            <img src="../image/chamcong1.png" alt="Banner" class="why-section">
        </div>
    </div>
</div><br>
    <div class="why-section">
        <img src="../image/chamcong4.png" alt="banner" class="why-section">
    </div><br>

    <div class="why-section">
        <h2>Quy trinh nhanh gọn </h2>
    <section style="max-width:700px;margin:0 auto;text-align:center;padding:48px 24px 0 24px;">
        <h4 style="font-size:1.5rem;font-weight:500;margin-bottom:12px;color:#222;">ROSA AI SMB</h4>
        <p style="font-size:1.08rem;color:#222;line-height:1.6;margin-bottom:0;">ROSA AI SMB là máy chủ on-premise mạnh mẽ, thiết kế cho doanh nghiệp cần xử lý AI, lưu trữ và vận hành ổn định. Máy đi kèm gói phần mềm doanh nghiệp: chấm công tự động, quản lý nhân sự và công cụ bảo mật trên Nextcloud. 
                Hỗ trợ VGA linh hoạt như ASUS DUAL RX6500XT O4G hoặc PALIT RTX 5070 GAMINGPRO 12GB, đảm bảo hiệu năng cao cho AI, phân tích hình ảnh và đồ họa 3D.        
        </p>
    </section>
    

    <div class="why-section">
        <img src="../image/chamcong5.png" alt="banner" class="why-section">
    </div><br>


    <div class="button">
        <button class="shop-button" onclick="window.location='https://zalo.me/909749126673606301'">Liên hệ ngay</button>
    </div>


    
<?php require "../web/footer.php" ?>


