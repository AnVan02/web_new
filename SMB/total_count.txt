<?php require "../web/header.php" ?>
<link rel="stylesheet" href="../style/chatbot.css">

<!-- Banner -->

<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner_chatbot.png" alt="Banner" class="hero-image">
            <div class="hero-text">
                <h2>MÁY TÍNH THƯƠNG HIỆU VIỆT NAM</h2>
                <p>Tiên phong giải pháp AI và chuyển đổi số</p>
            </div>
        </div>
    </div>
</div>
</div><br>
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    
  <!-- Các dấu chấm -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
  </div>
    <div class="carousel-intem">
        <div class="carousel-item active">
            <img src="" class="d-clock w-100"  alt="banner 1">            
        </div>

        <div class="carousel-item">
            <img src="" class="d-clock w-100" alt="banner 2" >
        </div>

        <div class="carousel-item">
            <img src="" class="d-clock w-100" alt="banner 3">
        </div>
    </div>
</div>



<!-- Title -->
<section class="product-section">
    <h2>TƯƠNG TÁC THÔNG MINH</h2>
    <p>Chatbot AI ROSA kết hợp Nextcloud mang đến trợ lý ảo AI, AI camera chấm công và lưu trữ đám mây nội bộ, cho phép người dùng giao tiếp tự nhiên để tìm kiếm, truy xuất và xử lý công việc nhanh chóng, bảo mật tối đa.</p>
</section>




<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/nen_ai1.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div><br>
<div class="banner" style="margin-bottom: 20px;">
    <div class="row">
        <div class="hero-section" style="width: 50%; height: auto; margin: 0 auto;">
            <img src="../image/nen_ai2.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div><br>

<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="../image/nen_ai3.png" alt="Banner" class="hero-image">
            <div class="hero-text">
                <h2 style="color:#000000">LỢI ÍCH VƯỢT TRI</h2>
                <p style="color:#000000">Tiết kiệm thời gian, tăng năng suất nhờ loại bỏ thao tác thủ công và tìm kiếm rườm rà. Giao diện trò chuyện thân thiện, không cần đào tạo. Thông tin truy xuất tức thì giúp lãnh đạo quyết định nhanh, an toàn và minh bạch </p>
            </div>
        </div>
    </div>
</div>
     <div class="install-step">
        <div class="install-text">
            <h3>Đa dạng đối tượng </h3>
            <p> Phù hợp với doanh nghiệp vừa và nhỏ muốn tối ưu vận hành, công ty công nghệ và startup cần hệ sinh thái chuyên nghiệp, tổ chức giáo dục yêu cầu bảo mật chính xác, cùng các doanh nghiệp lo ngại rủi ro lưu trữ không đồng bộ.</p>
        </div>
        <div class="install-image">
            <img src="../image/chat_ai1.png" alt="Cài đặt">
        </div>
    </div>  
    

    <div class="install-step reverse">
        <div class="install-text">
            <h3>Giải pháp toàn diện</h3>
            <p>Doanh nghiệp nhận gói phần mềm toàn diện  gồm Nextcloud Enterprise, chatbot AI, phần mềm chấm công và trợ lý ảo AI khi mua ROSA AI SMB. Tất cả được triển khai bởi đội ngũ chuyên nghiệp với bảo trì và nâng cấp định kỳ. </p>
        </div>
        <div class="install-image">
            <img src="../image/chat_ai2.png" alt="Đăng nhập">
        </div>
    </div>
    

 <div class="container rosa-footer-contact">
  <div class="rosa-footer-newsletter">
    <!-- Nhận thông tin từ ROSA -->
    <div style="background-color: #1d2c4b; padding: 20px; display: flex; justify-content: center; align-items: center; gap: 90px;">
        <button type="button" id="rosaOpenPopup"
          style="background-color: #007bff; color: white; font-weight: bold; padding: 10px 20px; border: none; cursor: pointer; font-size: 14px;">
          ĐẶT MUA HÀNG
        </button>
      </form>
    </div>

    <!-- Overlay -->
    <div class="update-rosa" id="rosaOverlay" 
         style="display:none; position: fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:999;">
    </div>

    <!-- Popup Form -->
    <div id="rosaPopupForm" style="display: none; position: fixed; top: 31%; left: 50%; transform: translate(-50%, -50%);
          background: #FFFF; padding: 20px; box-shadow: 5px 5px 15px rgba(253, 23, 23, 0.3); border-radius: 10px; 
          width: 30%; border: 2px solid red; z-index:1000;">
      <span id="rosaClosePopup" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px; color: red;">✖</span>
      <h4><i class="fas fa-user-check" style="color:red; margin-right: 5px;"></i> THÔNG TIN KHÁCH HÀNG</h4>
        <label for="name">Tên của bạn: <span style="color: red;">*</span></label>
        <input type="text" id="rosaNameInput" required 
             style="width: 100%; padding: 5px; margin: 5px 0; border: 1px solid #ff0000; border-radius: 5px;">
        <label for="phone">Số điện thoại: <span style="color: red;">*</span></label>
        <input type="tel" id="rosaPhoneInput" required 
             style="width: 100%; padding: 5px; margin: 5px 0; border: 1px solid #ff0000; border-radius: 5px;">

        <label for="name">Địa chỉ Email: <span style="color:#fff">*</label>
        <input type="email" id="rosaPhoneIput" require
            style="width:100%; padding: 5px; margin: 5px 0; border: 1px solid #FF0000; bordep-radius: 5px;">
       <button id="rosaSubmitForm" 
              style="background: red; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">Gửi</button>
      <button id="rosaClosePopupBtn" 
              style="background: gray; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">Đóng</button>
    </div>
  </div>
</div>

<script>
  const openBtn = document.getElementById('rosaOpenPopup');
  const popup = document.getElementById('rosaPopupForm');
  const overlay = document.getElementById('rosaOverlay');
  const closeBtn = document.getElementById('rosaClosePopup');
  const closeBtn2 = document.getElementById('rosaClosePopupBtn');

  // Mở popup
  openBtn.addEventListener('click', () => {
    popup.style.display = 'block';
    overlay.style.display = 'block';
  });

  // Đóng popup (nút X)
  closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
  });

  // Đóng popup (nút Đóng)
  closeBtn2.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
  });

  // Đóng khi click overlay
  overlay.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
  });
</script>


    <div class="update">
        <img src="../capnhap.png" alt="text-align:"style="text-align:center; color:F0F0F0">Nhật ký cập nhập

    </div>
