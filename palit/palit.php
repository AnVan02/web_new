<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="rosa-icon.png" type="image/png">

  <title>ROSA AI READY</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="palit.css" rel="stylesheet">
</head>
<body>
    <!-- Desktop Header -->
    <header class="desktop-header">
        <div class="container">
            <div class="logo">
                <a href="https://rosacomputer.vn/">
                    <img src="https://rosacomputer.vn/assets/images/rosa.png" alt="ROSA Logo">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <a href="https://rosacomputer.vn/product.php">SẢN PHẨM</a>
                <a href="https://rosacomputer.vn/ROSA-SW.php">AI SOLUTIONS</a>
                <a href="https://rosacomputer.vn/baohanh.php">BẢO HÀNH</a>
                <a href="https://rosacomputer.vn/tintuc_test/template.php">TIN TỨC</a>
                <a href="https://rosacomputer.vn/gioithieu.php">GIỚI THIỆU</a>
            </nav>

            <!-- Hamburger Menu Button (Mobile Only) -->
            <button class="hamburger-btn" id="hamburgerBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <div class="logo">
                    <img src="https://rosacomputer.vn/assets/images/rosa.png" alt="ROSA Logo">
                </div>
                <button class="mobile-close-btn" id="mobileCloseBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="mobile-nav">
                <a href="https://rosacomputer.vn/product.php">SẢN PHẨM</a>
                <a href="https://rosacomputer.vn/ROSA-SW.php">AI SOLUTIONS</a>
                <a href="https://rosacomputer.vn/baohanh.php">BẢO HÀNH</a>
                <a href="https://rosacomputer.vn/tintuc_test/template.php">TIN TỨC</a>
                <a href="https://rosacomputer.vn/gioithieu.php">GIỚI THIỆU</a>
            </nav>
        </div>
    </div>
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <div class="logo">
                    <img src="https://via.placeholder.com/120x40/007bff/ffffff?text=ROSA" alt="ROSA Logo">
                </div>
                <button class="mobile-close-btn" id="mobileCloseBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="hamburger_menu_content">
                <div class="hamburger_close" id="hamburgerClose"><i class="fa fa-times" aria-hidden="true"></i></div>
                <!--  -->
                <div class="menu_logo">
                    <a href="/"><img src="/assets/images/rosa.png" alt="Logo"></a>
                    <ul class="mobile-nav">
                        <li><a href="/product.php">Sản phẩm</a></li>
                        <li><a href="/gioithieu.php">Giới thiệu</a></li>
                        <li><a href="/ROSA-SW.php">AI SOLUTIONS</a></li>
                        <li><a href="/baohanh.php">Bảo hành</a></li>
                        <li><a href="tintuc_test/template.php">Tin tức</a></li>
                    </ul>
              </div>
          </div>
      </div>
   </div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileOpenBtn = document.getElementById("mobileOpenBtn");
    const mobileCloseBtn = document.getElementById("mobileCloseBtn");

    // Mở menu
    mobileOpenBtn.addEventListener("click", function() {
      mobileMenu.classList.add("active");
    });

    // Đóng menu
    mobileCloseBtn.addEventListener("click", function() {
      mobileMenu.classList.remove("active");
    });
  });
</script>

  <div class="rtx-section">
    

  <!-- code hiện thị trên deptop -->
 <!-- Banner Desktop -->




<!-- Banner MOBILE CARD RTX 50 SERIES-->


<section class="palit-mobile-card">
  <div class="palit-mobile-card-inner">
    <img class="palit-mobile-card-img" src="111.png" alt="GeForce RTX 50 Series" />
    <div class="palit-mobile-card-content">
      <h3>GeForce<br>RTX 50 Series</h3>
      <p class="palit-mobile-card-sub">Người Thay đổi cuộc chơi</p>
      <p class="palit-mobile-card-desc">
        GPU GeForce RTX 50, được hỗ trợ bởi NVIDIA Blackwell, mang đến những khả năng thay đổi cuộc chơi cho trải nghiệm và sáng tạo. Được trang bị sức mạnh AI khủng, dòng RTX 50 mang đến hiệu năng vượt trội và mở rộng khả năng sáng tạo. Hiệu suất hình ảnh lên tầm cao mới nhờ tính năng tiên tiến của NVIDIA DLSS 4, công nghệ Ray Tracing thế hệ mới, và giải pháp sáng tạo cao cấp với NVIDIA Studio.
      </p>
      <a href="https://rosacomputer.vn/product.php" target="_blank" class="palit-mobile-card-btn">MUA HÀNG</a>
      <div class="palit-mobile-card-logos">
        <img src="logo1.png" alt="Palit Logo" />
        <img src="logo2.png" alt="GeForce Logo" />
      </div>
    </div>
  </div>
</section>





<!-- nội dung trang  -->
    <div class="container blackwell-section" style="max-width: 1326px">
        <div class="image-container">
            <img class="main-content-image" src="palit_img/image5 (1).png" alt="NVIDIA AI Platform"/>
        </div>
        
        <div class="image-container">
            <img class="main-content-image" src="palit_img/image4.png" alt="NVIDIA AI Platform"/>
        </div>

        <div class="image-container">
            <img class="main-content-image" src="https://w.ladicdn.com/s1550x850/5d142f1f620fa47f5c176213/dlss-4-20250617042619-ojo6u.png" alt="NVIDIA AI Platform"/>
        </div>

        <div class="image-container">
            <img class="main-content-image" src="palit_img/hienthuchoathaydoicuocchoi.png" alt="NVIDIA AI Platform"/>
        </div>

        <div class="image-container">
            <img class="main-content-image" src="https://w.ladicdn.com/s1650x900/5d142f1f620fa47f5c176213/reflex-20250617042738-tscbd.png" alt="NVIDIA AI Platform"/>
        </div>

        <div class="image-container">
            <img class="main-content-image" src="https://w.ladicdn.com/s1550x850/5d142f1f620fa47f5c176213/rtx-ai-pcs-20250617042809-aogjb.png"/>
        </div>
    </div>

    <div class="image-container">
        <img class="main-content-image" src="https://w.ladicdn.com/s1550x1150/5d142f1f620fa47f5c176213/creators-20250617042830-g7eaj.png" alt="NVIDIA AI Platform"/>
    </div>
    <!-- hình nền  -->

    <div class="image-container">
        <img class="main-content-image" src="https://w.ladicdn.com/s1150x1350/5d142f1f620fa47f5c176213/additional-features-and-benefits-20250617042856-eslsy.png" alt="NVIDIA AI Platform"/>
    </div>
    
    <div class="image-container">
        <img class="main-content-image" src="palit_img/hinhpalit.png" alt="NVIDIA AI Platform"/>
    </div>

    <div class="container product-section">
      <h2>Bộ sưu tập hình ảnh</h2>
       <div class="product-list">
        <div class="product" >
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT1.php"><img src="anh1.png" alt="RTX 5060"></a>
        </div>
        <div class="product">
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT2.php"><img src="anh2.png" alt="RTX 5070"></a>
        </div>
        <div class="product">
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT3.php"><img src="anh3.png" alt="RTX 5080"></a>
        </div>
        </div>
    </div>
   
    <div class="container product-section">
        <h2>Mua Dòng GeForce RTX</h2>
        <div class="product-list">
        <div class="product" >
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT1.php"><img src="palit_img/Group 18.png" alt="RTX 5060"></a>
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT1.php" class="btn" style="background:#76b900; color:#fff; font-weight:700; text-decoration:none; display:inline-block; text-align:center; padding:12px 32px; font-size:1rem; margin-top:12px;">Tìm hiểu thêm</a>
        </div>
        <div class="product">
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT2.php"><img src="palit_img/Group 19.png" alt="RTX 5070"></a>
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT2.php" class="btn" style="background:#76b900; color:#fff; font-weight:700; text-decoration:none; display:inline-block; text-align:center; padding:12px 32px; font-size:1rem; margin-top:12px;">Tìm hiểu thêm</a>
        </div>
        <div class="product">
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT3.php"><img src="palit_img/Group 21.png" alt="RTX 5080"></a>
            <a href="https://rosacomputer.vn/sanpham/ROSA-GAMER-PALIT3.php" class="btn" style="background:#76b900; color:#fff; font-weight:700; text-decoration:none;  display:inline-block; text-align:center; padding:12px 32px; font-size:1rem; margin-top:12px;">Tìm hiểu thêm</a>
        </div>
        </div>
    </div>


    
  <!-- Partner Logos Footer -->
<hr style="width:50%; margin:20px auto; border:1px solid #444;">

<footer>
  <div class="footer-logos">
    <img src="Group 9.png" alt="ESRB" />
    <img src="logo2.png" alt="GeForce RTX" />
    <img src="logo1.png" alt="Palit Logo" />
  </div>
  <p>
    ©2025 NVIDIA Corporation. NVIDIA, logo NVIDIA, GeForce, GeForce RTX và G-SYNC là các nhãn hiệu đã đăng ký 
    và/hoặc nhãn hiệu của NVIDIA Corporation tại </p>
  <p>
     Hoa Kỳ và các quốc gia khác. 
    Tất cả các nhãn hiệu và bản quyền khác là tài sản của các chủ sở hữu tương ứng.
  </p>
</footer>

    <!-- Footer Mobile -->
</body>
</html>
