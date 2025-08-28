<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="rosacomputer">
  <meta name="google-site-verification" content="4USrUmb19Z0YVYJqkaUI3pgEwwi8Ma9yXo-9gqbx9Q0" />
  
  <title>ROSA</title>
  <link rel="icon" href="/assets/images/rosa-icon.png" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- Bootstrap 4.6.2 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">

  <!-- Font Awesome (Chỉ chọn phiên bản cao nhất bạn cần dùng, ở đây dùng 6.5.1) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Font Awesome 4.7.0 (nếu bạn cần các icon cũ không có ở bản mới) -->
  <link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Owl Carousel 2.2.1 -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Styles -->
  <!--<link rel="stylesheet" href="../style/header.css">-->
</head>

<body>
  <!-- Your content goes here -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap Bundle JS 4.6.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../script/header.js"></script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MSGJRVX2NY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MSGJRVX2NY');
</script>

<!-- Event snippet for Lượt xem trang conversion page -->


</head>
<body>
    <!-- Main Header -->
    <header class="header">
        <div class="container d-flex align-items-center justify-content-between py-2">
            <div class="logo_container">
                <a href="/"><img src="/assets/images/rosa.png" alt="Logo"></a>
            </div>
            <nav class="nav_container d-none d-md-block">
                <ul class="d-flex">
                    <li><a href="/product.php">Sản phầm </a></li>
                    <!-- <li><a href="/gioithieu.php">Giới thiệu</a><li> -->
                    <li><a href="#">Giải pháp AI <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">KHOÁ HỌC AI <i class="fas fa-chevron-right"></i></a>
                                <ul class="submenu">
                                    <li><a href="/ROSA-SW.php">ỨNG DỤNG ROSA</a></li>
                                    <li><a href="/courses/python-course.php">PYTHON CƠ BẢN</a></li>
                                    <li><a href="/courses/yolo-course.php">THỊ GIÁC MÁY TÍNH</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">SMB <i class="fas fa-chevron-right"></i></a>
                                <ul class="submenu">
                                    <li><a href="/courses/ChatbotAI.php">CHATBOT AI</a></li>
                                    <li><a href="/courses/AIchamcong.php">CHẤM CÔNG CAMERA AI</a></li>
                                    <li><a href="/courses/Nextcloud.php">NEXCLOUND</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/courses/palit.php">Chương trình</a></li>
                    <li><a href="/tintuc_test/template.php">Tin tức </a></li>
                    <li><a href="/baohanh.php">Bảo hành </a></li>
                    <li><a href="/check.php">Đơn hàng</a></li>
                </ul>
            </nav>
            
            <!-- TÌM KIẾM  -->
            <form class="search-box d-none d-md-flex" action="search.php" method="get">
                <i class="fas fa-search"></i>
            <input type="text" name="sp" placeholder="Tìm kiếm" autocomplete="off" value="<?= htmlspecialchars($keyword) ?>">
            </form>

        <!-- 3 GẠCH TRÊN PHONE -->
            <div class="hamburger_container d-md-none">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

<!-- Mobile Menu -->
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        
        <!-- Logo trong menu -->
        <div class="menu_logo">
            <a href="/"><img src="/assets/images/rosa.png" alt="Logo"></a>
        </div>
        
        <div class="hamburger_menu_content">
            <ul class="menu_top_nav">
                <li><a href="product.php">Sản phẩm</a></li>
                <li><a href="gioithieu.php">Giới thiệu</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">Giải pháp AI <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="javascript:void(0)" class="submenu-toggle">KHÓA HỌC AI <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="/ROSA-SW.php">ỨNG DỤNG ROSA</a></li>
                                <li><a href="/courses/python-course.php">PYTHON CƠ BẢN</a></li>
                                <li><a href="/courses/yolo-course.php">THỊ GIÁC MÁY TÍNH</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)" class="submenu-toggle">SMB <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="/courses/Assitant.php">CHATBOT AI</a></li>
                                <li><a href="/courses/AIchamcong.php">CHẤM CÔNG CAMERA AI</a></li>
                                <li><a href="/courses/Nextcloud.php">NEXTCLOUD</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/courses/palit.php">Chương trình</a></li>
                <li><a href="/tintuc_test/template.php">Tin tức</a></li>
                <li><a href="/baohanh.php">Bảo hành</a></li>
                <li><a href="/check.php">Đơn hàng</a></li>
            </ul>
        </div>
    </div>
    <!--css-->
    <style>
        body {
    font-family: 'Montserrat';
    font-size: 16px;
    line-height: 1.6;
    /* background-color: #fff; */
    color: #1C1D1D;
}

.header {
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 1300;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 15px 0;
    font-size: 20px;
    font-family: Montserrat;
}

.nav_container {
    justify-content: center;
}

.nav_container ul {
    list-style: none;
    padding: 0;
}

.nav_container ul li {
    position: relative;
    margin: 0 35px;
}

.nav_container ul li a:hover {
    color: #007bff;
}

/* ====== THANH TÌM KIẾM ======== */
.search-box {
    border: 1px solid #ccc;
    border-radius: 25px;
    padding: 5px 20px;
    display: flex;
    align-items: center;
    background: white;
    max-width: 250px;
}

.search-box i {
    color: #666;
    margin-right: 8px;
    font-size: 14px;
}

.search-box input {
    border: none;
    outline: none;
    font-size: 14px;
    width: 100%;
    font-family: 'Montserrat';
}

.search-box input::placeholder {
    color: #888;
}


/* ======= CSS CHO SUBMENU ======= */
.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: 200px;
    z-index: 999;
}

.submenu li {
    position: relative;
}

.submenu li a {
    display: block;
    padding: 10px;
    color: #333;
    white-space: nowrap;
    font-size: 14px;
}

.submenu li a:hover {
    background: #f8f8f8;
    color: #007bff;
}

/* Hiển thị submenu khi hover (desktop) */
.nav_container ul li:hover>.submenu {
    display: block;
}

/* Định dạng submenu cấp 2 */
.has-submenu {
    position: relative;
}

.has-submenu .submenu {
    position: absolute;
    top: 0;
    left: 100%;
    white-space: nowrap;
    background: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 8px 0;
    list-style: none;
    display: none;
    min-width: 200px;
}

/* Hiển thị submenu cấp 2 khi hover (desktop) */
.has-submenu:hover>.submenu {
    display: block;
}

/* Định dạng menu trên mobile */
/* Add these CSS fixes to your header.css file */

/* ==================== MOBILE MENU CSS ==================== */

/* Hamburger Button */
.hamburger_container {
    display: none;
    font-size: 24px;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.hamburger_container:hover {
    background-color: #f8f9fa;
}

.hamburger_container i {
    color: #333;
}

/* ==================== MOBILE MENU CSS - UPDATED ==================== */

/* Hamburger Button */
.hamburger_container {
    display: none;
    font-size: 24px;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.hamburger_container:hover {
    background-color: #f8f9fa;
}

.hamburger_container i {
    color: #333;
}

/* Mobile Menu Overlay */
.hamburger_menu {
    display: none;
    position: fixed;
    top: 0;
    left: -280px;
    width: 280px;
    height: 100vh;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    box-shadow: 4px 0 20px rgba(0, 0, 0, 0.15);
    z-index: 9999;
    transition: left 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    overflow-y: auto;
    border-right: 1px solid #e9ecef;
}

.hamburger_menu.show {
    display: block;
    left: 0;
}

/* Backdrop overlay */
.hamburger_menu.show::after {
    content: '';
    position: fixed;
    top: 0;
    left: 280px;
    width: calc(100vw - 280px);
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(2px);
    z-index: -1;
}

/* Close Button */
.hamburger_close {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 24px;
    cursor: pointer;
    color: #666;
    background: #f1f3f4;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    border: 1px solid #e0e0e0;
}

.hamburger_close:hover {
    background: #e8eaed;
    color: #333;
    transform: rotate(90deg);
}

/* Menu Header with Logo */
.hamburger_menu_content {
    padding: 70px 0 20px 0;
}

/* Logo in menu header */
.menu_logo {
    position: absolute;
    top: 15px;
    left: 20px;
    width: 80px;
    height: 40px;
    display: flex;
    align-items: center;
}

.menu_logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

/* Remove old MENU text */
.hamburger_menu_content::before {
    display: none;
}

/* Menu Items */
.hamburger_menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.hamburger_menu ul li {
    border-bottom: 1px solid #f0f0f0;
    position: relative;
}

.hamburger_menu ul li:last-child {
    border-bottom: none;
}

/* Main Menu Links */
.hamburger_menu ul li > a {
    color: #333;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 20px;
    font-size: 15px;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
}

.hamburger_menu ul li > a:hover {
    background: linear-gradient(90deg, #007bff08 0%, transparent 100%);
    color: #007bff;
    padding-left: 25px;
}

.hamburger_menu ul li > a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 0;
    height: 100%;
    background: #007bff;
    transition: width 0.3s ease;
}

.hamburger_menu ul li > a:hover::before {
    width: 4px;
}

/* Submenu Toggle Icon - Default DOWN arrow */
.submenu-toggle i {
    transition: transform 0.3s ease;
    font-size: 12px;
    margin-left: 10px !important;
    transform: rotate(0deg); /* Default down arrow */
}

/* When submenu is open, arrow stays DOWN (no rotation) */
.submenu-toggle.active i {
    transform: rotate(0deg); /* Keep arrow pointing down */
}

/* Alternative: If you want arrow to point UP when open, use this instead */
/*
.submenu-toggle.active i {
    transform: rotate(180deg);
}
*/

/* Submenu Styling */
.hamburger_menu .submenu {
    display: none;
    background: #f8f9fa;
    border-left: 3px solid #007bff;
    margin: 0;
    padding: 0;
    animation: slideDown 0.3s ease;
}

.hamburger_menu .submenu.show {
    display: block;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* First Level Submenu */
.hamburger_menu .submenu li {
    border-bottom: 1px solid #e9ecef;
}

.hamburger_menu .submenu li:last-child {
    border-bottom: none;
}

.hamburger_menu .submenu li > a {
    padding: 12px 20px 12px 40px;
    font-size: 14px;
    font-weight: 400;
    color: #555;
    position: relative;
}

.hamburger_menu .submenu li > a:hover {
    background: #e3f2fd;
    color: #1976d2;
    padding-left: 45px;
}

.hamburger_menu .submenu li > a::before {
    content: '→';
    position: absolute;
    left: 25px;
    color: #007bff;
    opacity: 0;
    transition: all 0.3s ease;
}

.hamburger_menu .submenu li > a:hover::before {
    opacity: 1;
    left: 28px;
}

/* Second Level Submenu */
.hamburger_menu .submenu .submenu {
    background: #ffffff;
    border-left: 3px solid #28a745;
    margin-left: 15px;
}

.hamburger_menu .submenu .submenu li > a {
    padding: 10px 20px 10px 50px;
    font-size: 13px;
    color: #666;
}

.hamburger_menu .submenu .submenu li > a:hover {
    background: #e8f5e8;
    color: #28a745;
    padding-left: 55px;
}

.hamburger_menu .submenu .submenu li > a::before {
    content: '•';
    left: 35px;
    color: #28a745;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .hamburger_container {
        display: flex !important;
        align-items: center;
        justify-content: center;
    }
    
    .nav_container {
        display: none !important;
    }
    
    .search-box {
        display: none !important;
    }
    
    /* Header adjustments for mobile */
    .header {
        padding: 10px 0;
    }
    
    .header .container {
        padding: 0 15px;
    }
}

@media (max-width: 480px) {
    .hamburger_menu {
        width: 100vw;
        left: -100vw;
    }
    
    .hamburger_menu.show::after {
        display: none;
    }
}

/* Smooth scrolling for menu */
.hamburger_menu {
    scroll-behavior: smooth;
}

.hamburger_menu::-webkit-scrollbar {
    width: 4px;
}

.hamburger_menu::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.hamburger_menu::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
}

.hamburger_menu::-webkit-scrollbar-thumb:hover {
    background: #a1a1a1;
}

/* Loading animation */
.hamburger_menu.show {
    animation: slideInLeft 0.3s ease-out;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-20px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Focus styles for accessibility */
.hamburger_container:focus,
.hamburger_close:focus,
.hamburger_menu a:focus {
    outline: 2px solid #007bff;
    outline-offset: 2px;
}

/* Active menu item */
.hamburger_menu ul li.active > a {
    background: linear-gradient(90deg, #007bff15 0%, transparent 100%);
    color: #007bff;
    font-weight: 600;
}

.hamburger_menu ul li.active > a::before {
    width: 4px;
}
.header-top {
    background: #f8f8f8;
    font-size: 14px;
    padding: 5px 0;
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
}

.logo_brand {
    display: flex;
}

.logo_container img {
    max-width: 120px;
    height: auto;
}

.brand_text {
    font-size: 13px;
    color: #333;
    white-space: nowrap;
}

.contact_info {
    font-size: 14px;
    color: #333;
    display: flex;
}

.contact_info i {
    margin-right: 5px;
    color: #007bff;
}

.contact_info span {
    margin-left: 15px;
}

@media (max-width: 768px) {
    .nav_container {
        display: none;
    }

    .hamburger_container {
        display: block;
    }

    .hamburger_menu {
        display: none;
    }

    .contact_info {
        display: block;
    }

    .nav_container {
        flex-direction: column;
    }

    .header_nav {
        flex-direction: column;
        width: 100%;
    }

    .header_nav li {
        width: 100%;
    }

    .submenu {
        position: relative;
        width: 100%;
        box-shadow: none;
    }

    .has-submenu .submenu {
        left: 0;
        margin-left: 0;
    }

    .header-top {
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .logo_brand {
        display: none;
    }

    .contact_info {
        flex-direction: column;
        align-items: center;
    }

    .contact_info span {
        margin-left: 0;
        margin-bottom: 5px;
    }

    .contact_info span:last-child {
        margin-bottom: 0;
    }

    .logo_brand {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .brand_text {
        font-size: 12px;
        margin-top: 5px;
        font-family: Arial, sans-serif;
    }

    .logo_container img {
        max-width: 120px;
    }
}

@media (max-width: 480px) {
    .nav_container ul {
        display: none;
        flex-direction: column;
        align-items: center;
    }

    .hamburger_container {
        display: block;
    }

    .contact_info {
        display: block;
    }
}

/* Fix desktop menu layout */
@media (min-width: 769px) {
    .nav_container ul {
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
    }

    .nav_container ul li {
        margin: 0 10px;
    }

    .nav_container ul li a {
        font-size: 15px;
        /* padding: 5px 10px; */
        color: #000000;
        /* Change text color to yellow */
        text-decoration: none;
        /* Remove underline */
    }

    .nav_container ul li a:hover {
        color: #000000;
        /* Keep yellow on hover */
        text-decoration: none;
        /* Ensure no underline on hover */
    }

    .container {
        max-width: 1050px;
    }
}

.breadcrumb-item+.breadcrumb-item::before {
    content: " > ";
}
    </style>
</body>
</html>


