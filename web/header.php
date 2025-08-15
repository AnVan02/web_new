<!DOCTYPE html>
<html lang="en">
<head>
<title>ROSA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="rosacomputer">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="/assets/images/rosa-icon.png" type="rosacomputer">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="../style/header.css">
<script src="../script/header.js"></script>
</head>
<body>
    <!-- Main Header -->
    <header class="header">
        <div class="container d-flex align-items-center justify-content-between py-2">
            <div class="logo_container">
                <a href="/"><img src="../image/rosa.png" alt="Logo"></a>
            </div>
            <nav class="nav_container d-none d-md-block">
                <ul class="d-flex">
                    <li><a href="">Sản phầm </a></li>
                    <li><a href="#">Giải pháp AI <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">KHOÁ HỌC AI <i class="fas fa-chevron-right"></i></a>
                                <ul class="submenu">
                                    <li><a href="">ỨNG DỤNG ROSA</a></li>
                                    <li><a href="">PYTHON CƠ BẢN</a></li>
                                    <li><a href="">THỊ GIÁC MÁY TÍNH</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">SMB <i class="fas fa-chevron-right"></i></a>
                                <ul class="submenu">
                                    <li><a href="">CHATBOT AI</a></li>
                                    <li><a href="">CHẤM CÔNG CAMERA AI</a></li>
                                    <li><a href="">NEXCLOUND</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Chương trình</a></li>
                    <li><a href="">Tin tức </a></li>
                    <li><a href="">Bảo hành </a></li>
                    <li><a href="">Đơn hàng</a></li>
                </ul>
            </nav>
            <!-- TÌM KIẾM  -->
            <form class="search-box d-none d-md-flex" action="search.php" method="get">
                <i class="fas fa-search"></i>
                <input type="text" name="q" placeholder="Tìm kiếm">
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
        <div class="hamburger_menu_content">
            <ul class="menu_top_nav">
                <li><a href="">Sản phẩm</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">Giải pháp AI <i class="fas fa-chevron-down" style="margin-left: 15px"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="javascript:void(0)" class="submenu-toggle">KHOÁ HỌC AI<i class="fas fa-chevron-down" style="margin-left: 15px"></i></a>
                            <ul class="submenu">
                                <li><a href="/ROSA-SW.php">ỨNG DỤNG ROSA</a></li>
                                <li><a href="/courses/python-course.php">PYTHON CƠ BẢN</a></li>
                                <li><a href="/courses/yolo-course.php">THỊ GIÁC MÁY TÍNH</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li class="has-submenu">
                            <a href="javascript:void(0)" class="submenu-toggle">SMB<i class="fas fa-chevron-down" style="margin-left:15px"></i></a>
                            <ul class="submenu">
                                <li><a href="/courses/Assitant.php">CHATBOX AI</a></li>
                                <li><a href="/courses/AIchamcong.php">CHẤM CÔNG CAMERA AI</a></li>
                                <li><a href="/courses/Nextcloud.php">NEXTCLOUND</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="/tintuc_test/template.php">Tin tức</a></li>
                <li><a href="/baohanh.php">Bảo hành</a></li>
                <li><a href="/check.php">Đơn hàng</a></li>
            </ul>
        </div>
    </div>

</body>
</html>