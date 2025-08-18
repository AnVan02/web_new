<title>ROSA</title>
<?php if(isset($_SESSION["message"])):?>

	<script>

		function message() {
		window.alert("<?php echo $_SESSION["message"];?>");
		}
		
	</script>
<?php endif;?>
<?php require "data/common.php"; ?>
<?php require "header.php";?>
<?php require "popupkm.php";?>

<head>
<!-- Banner bự-->
<div class="banner">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/Banner Palit website.png" class="img-fluid" alt="palit Banner" onclick="window.location.href='product.php#gaming'">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/Backtoschool.jpg" class="img-fluid" alt="backtoschool" onclick="window.location.href='product.php'">
                        </div>
                        
                         <div class="carousel-item">
                            <img src="assets/images/Banner web 2.png" class="img-fluid" alt="Palit Banner" onclick="window.location.href='product.php'">
                        </div>
                        
                        <div class="carousel-item">
                            <img src="assets/images/Banner web 3.png" class="img-fluid" alt="New Year Banner" onclick="window.location.href='product.php#gaming'">
                        </div>

                         <div class="carousel-item">
                            <img src="assets/images/Banner web 1.png" class="img-fluid" alt="New Year Banner" onclick="window.location.href='product.php#vanphong'">
                        </div> 
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
/* Banner */
.banner {
    margin: 30px auto;
    width: 95%;
    max-width: 100%;
    border-radius: 10px;
    overflow: hidden;
}
.banner img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    padding: 10px;
}
</style>

</head>
<body>
<header>

<?php
    $servername = "localhost";
    $username = "nvpbgqcv_banhang";
    $password = "Vietson@123";
    $dbname = "nvpbgqcv_banhang";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy 1 bài viết mới nhất
$sql = "SELECT article_tag, article_title, article_date, article_image, article_link, article_content
        FROM article 
        ORDER BY article_date DESC 
        LIMIT 1";

$result = $conn->query($sql);
?>

<style>
    .news-container {
        display: flex;
        gap: 20px;
        justify-content: center;
        max-width: 1356px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .news-card {
        width: 100%;
        max-width: 700px; /* Increased width */
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        background: white;
        transition: 0.3s;
    }
    .news-card:hover {
        transform: translateY(-5px);
    }
    .news-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .news-content {
        padding: 15px;
    }
    .news-title a {
        text-decoration: none;
        color: black;
        font-size: 18px;
        font-weight: bold;
        font-family: Arial, sans-serif;
    }
    .news-title a:hover {
        color: red;
    }
    .image-img {
        width: 100%;
        height: 200px;
        border-radius: 10px;
        object-fit: cover; /* Đảm bảo hình ảnh không bị méo */
        max-width: 100%; /* Giữ responsive trên màn hình nhỏ */
    }

    /* Media Queries for Mobile Devices */
    @media (max-width: 768px) {
        .news-container {
            flex-direction: column;
            align-items: center;
        }
        .news-card {
            width: 90%;
            max-width: 300px;
        }
        .news-card img {
            height: 150px;
        }
        .news-title a {
            font-size: 16px;
        }
        .news-content {
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        .news-card {
            max-width: 280px;
        }
        .news-card img {
            height: 120px;
        }
        .news-title a {
            font-size: 14px;
        }
        .news-content {
            padding: 8px;
        }
    }
</style>


<div class="news-container">
   <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="news-card">
            <a href="/tintuc/<?= htmlspecialchars($row['article_link'], ENT_QUOTES, 'UTF-8'); ?>">
                <img src="/tintuc_test/admin/modules/blog/uploads/<?= htmlspecialchars($row['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="News Image">
            </a>
            <div class="news-content">
                <p>Tin tức</p>
                <div class="news-title">
                    <a href="/tintuc/<?= htmlspecialchars($row['article_link'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($row['article_title'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
                <p class="customer-feedback__text">
                    <?= strip_tags(substr($row['article_content'], 0, 1200));?>
                </p>
            </div>
        </div>
    <?php } ?>

    
    <div class="news-card">
        <a href="product.php#vanphong">
            <img src="assets/images/456.jpg" alt="ROSA VĂN PHÒNG">
        </a>
        <div class="news-content">
            <p>Khuyến mãi<p>
            <div class="news-title">
                <a href="product.php#vanphong">ROSA VĂN PHÒNG</a>
            </div>
            <p>Cấu hình máy tính đồng bộ mạnh mẽ mang lại hiệu suất làm việc tối ưu</p>
        </div>
    </div>
    
    <div class="news-card">
        <a href="product.php#ai">
            <img  src="assets/images/123.jpg" alt="ROSA AI">
        </a>
        <div class="news-content">
        <p>Khuyến mãi<p>
            <div class="news-title">
                <a href="product.php#ai">ROSA AI</a>
            </div>
            <p>Giải pháp tối ưu cho lập trình và phát triển AI với cấu hình mạnh mẽ, bảo hành 3 năm</p>
        </div>
    </div>
   
    </div>
</div>

<!--<div class="image-container">-->
<!--    <img  id="accordionImage" style="width:60%; height:90%," src="assets/images/sanpham2.jpg"  alt="">-->
<!--</div>-->

<!-- TỔNG QUAN VỀ SẢN PHÂM -->
<div class="container my-5">
   
    <div style="width: 10%; height: 2px; background-color:red; margin-top: 1px;"></div><p></p>
        <p>Khám phá các dòng máy ROSA phù hợp với nhu cầu sử dụng của bạn</p>
    <div class="container">
        <div class="grid">
            <div class="card">
               <a href="product.php#vanphong"><img src="assets/images/name (3).jpg" alt="Background" class="large"></a>
                <a href="product.php#vanphong"><img src="assets/images/Rosa_Office_3-removebg-preview.png" alt="PC" class="small" style= " bottom: 270px;"></a>
                <h3 style="font-weight: bolder">ROSA OFFICE</h3>
                <p style="text-align:center">Mang đến hiệu suất ổn định và tính năng bảo mật cao, hoàn hảo cho công việc văn phòng hàng ngày</p>
                <ul1 class="pList-logo-sec ul1">
                    <li1>
                        <img src="https://img.icons8.com/fluency/48/windows-11.png" alt="microsoft-powerpoint-2019--v1"/>                    
                    </li1>

                    <li1>
                        <img src="https://img.icons8.com/color/48/microsoft-powerpoint-2019--v1.png" alt="" class="img-fluid">
                    </li1> 
                   
                    <li1>
                        <img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" alt="" class="img-fluid">
                    </li1>

                    <li1>
                        <img src="https://img.icons8.com/fluency/48/microsoft-word-2019.png" alt="" class="img-fluid">
                    </li1>
                
                
                </ul1>
                    <a href="product.php#vanphong" class="btn" style="background:#FF0000 ; color:#FFFFFF ">KHÁM PHÁ</a>
            </div>

            <div class="card">
                <a href="product.php#ai"><img src="assets/images/deep-learning.jpg" alt="Background" class="large"></a>
                <a href="product.php#ai"><img src="assets/images/2.png" alt="PC" class="small" style =" bottom:270px;"></a>
                <h3 style="font-weight: bolder">ROSA AI / SERVER</h3>
                <p style=" text-align:center">Tối ưu cho lập trình AI, với công cụ cải tiến và cấu hình mạnh mẽ để phát triển ứng dụng trí tuệ nhân tạo</p>
                    <ul1 class="pList-logo-sec ul1">
                        <li1>
                            <img src="https://img.icons8.com/color/48/python--v1.pnghttps://img.icons8.com/color/48/python--v1.png" alt="" class="PYTHON">
                        </li1>
                        <li1>
                            <img src="https://img.icons8.com/color/48/visual-studio-code-2019.png" alt="artificial"/>
                        </li1>
                        <li1>
                            <img src="https://img.icons8.com/fluency/48/pytorch.png" alt="" class="img-fluid">
                        </li1>
                        <li1>
                            <img src="https://scikit-learn.org/stable/_static/favicon.ico" alt="" class="img-fluid">
                        </li1>
                    </ul1>
                    <a href="product.php#ai" class="btn" style="background:#FF0000 ; color:#FFFFFF ">KHÁM PHÁ</a>
            </div>

            <div class="card">
               <a href="product.php#gaming"><img src="assets/images/name (6).jpg" alt="Background" class="large"></a>
                <a href="product.php#gaming"><img src="assets/images/case 510 (1).png" alt="PC" class="small" style="width: 417px; bottom:258px"></a>
                <h3 style="font-weight: bolder">ROSA GAMING</h3>
                <p style="text-align:center">Cấu hình cao và các card đồ họa mạnh mẽ, mang đến hiệu suất vượt trội cho các tựa game yêu thích</p>
                <ul1 class= "pList-logo-sec ul1">
                    <li1>
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/73206bd9-257c-4f50-b1f3-59a306e24084/di02q99-d9964ac7-2ca4-4a86-9a65-cc92fa8ebea5.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzczMjA2YmQ5LTI1N2MtNGY1MC1iMWYzLTU5YTMwNmUyNDA4NFwvZGkwMnE5OS1kOTk2NGFjNy0yY2E0LTRhODYtOWE2NS1jYzkyZmE4ZWJlYTUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.yIxX6QcEmdPfLbEdT7-7tmX0arFEkcpQFC6Jj9ul0GU" style="max-width: 90%" alt="" class="garena">
                    </li1>
                    <li1>
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c78bc3fc-9f08-47ca-81ae-d89055c7ec49/da3boqn-b579891b-64ec-4829-87fd-30ec09c5105f.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M3OGJjM2ZjLTlmMDgtNDdjYS04MWFlLWQ4OTA1NWM3ZWM0OVwvZGEzYm9xbi1iNTc5ODkxYi02NGVjLTQ4MjktODdmZC0zMGVjMDljNTEwNWYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.EO8hYNczCni4vhKiugDczwkzC3hYIZED_n_brW_t_7w" style="max-width: 90%" alt="" class="free-fire" >
                    </li1>
                    <li1>
                        <img src="https://www.freepnglogos.com/uploads/apex-legends-logo-png/apex-legends-characters-circle-logo-transparent-png-24.png" style="max-width: 95%" alt="" class="img-fluid">
                    </li1>
                    <li1>
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/73206bd9-257c-4f50-b1f3-59a306e24084/dfnd3kn-3aaf12be-fed0-4e71-8e67-764a792c5849.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzczMjA2YmQ5LTI1N2MtNGY1MC1iMWYzLTU5YTMwNmUyNDA4NFwvZGZuZDNrbi0zYWFmMTJiZS1mZWQwLTRlNzEtOGU2Ny03NjRhNzkyYzU4NDkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.k0Ot6s9-JI_0ipxVWoabMeQxbB9aLU2Nli_7E3Y19VY" style="max-width: 90%" alt="" class="img-fluid">
                    </li1>
                </ul1>
                    <a href="product.php#gaming" class="btn" style="background:#FF0000 ; color:#FFFFFF ">KHÁM PHÁ</a>

            </div>

            <div class="card">
                <a href="product.php#mini"><img src="assets/images/name (4).jpg" alt="Background" class="large" style="display:flex"></a>
                <a href="product.php#mini"><img src="assets/images/1.2.png" alt="PC" class="small" style="bottom: 240px;"></a>
                <h3 style="font-weight: bolder">ROSA MINI </h3>
                <p style="text-align:center">Tối ưu cho lập trình AI, với công cụ cải tiến và cấu hình mạnh mẽ để phát triển ứng dụng trí tuệ nhân tạo</p>
                <ul1 class = "pList-logo-sec ul1">
                    <li1>
                        <img src="https://img.icons8.com/fluency/48/windows-11.png" alt="microsoft-powerpoint-2019--v1"/>                    
                    </li1>

                    <li1>
                        <img src="https://img.icons8.com/color/48/microsoft-powerpoint-2019--v1.png" alt="" class="img-fluid">
                    </li1> 
                   
                    <li1>
                        <img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" alt="" class="img-fluid">
                    </li1>

                    <li1>
                        <img src="https://img.icons8.com/fluency/48/microsoft-word-2019.png" alt="" class="img-fluid">
                    </li1>
                                   
                </ul1>
                    <a href="product.php#mini" class="btn" style="background:#FF0000 ; color:#FFFFFF ">KHÁM PHÁ</a>
            </div>
        </div>
    </div>

<style>

    /* Áp dụng cho các phần tử cụ thể trong trường hợp có lớp cha */
    .container,
    .grid,
    .card,
    img.large,
    img.small {
        /* background: none !important; */
        background-color: transparent !important;
        
    }
    .container img,
    .grid img,
    .card img {
        /* background: none !important; */
        background-color: transparent !important;
    }

    .small {
        display: block;
    }
    .pList-logo-sec ul1 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        padding: 5px;
        
    }
    .pList-logo-sec li {
        display: flex;
        align-items: center;
    }

    .pList-logo-sec img {
        width: 50px;  /* Điều chỉnh kích thước logo */
        height: auto;  /* Giữ nguyên tỷ lệ */
        transition: transform 0.3s ease-in-out;
    }

    .pList-logo-sec img:hover {
        transform: scale(1.1);  /* Hiệu ứng phóng to khi hover */
}
    
    span:before {
        content: '';
        top: 50%;
        width: 39%;
        height: 1px;
        background: rgba(59, 58, 58, 0.2);
    }
    
    .ul1 {
        display: flex; /* layout khoang cách icon */
        gap: 50px; /* khoảng cách icon */
        list-style: none; /* Removes bullet points */
        padding: 0;
        justify-content: center; /* Centers the icons horizontally */
        vertical-align: inherit;
    }

    .li1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .subtitle {
        font-size: 18px;
        margin-bottom: 20px;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        /*padding: 50px;*/
    }
    .card {
        position: relative;
        background: #d50000;
        padding: 0px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .card img.large {
        width: 100%;
        border-radius: 10px;
        filter: brightness(100%) blur(3px); /* Làm tối và mờ nền */
    }
    .card img.small {
        position: absolute;
        /* bottom: 180px; */
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        border-radius: 10px;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); */
        background: white;
        padding: 1px;
    }
    .card h3 {
        margin: 60px 0 10px;
    }

    .btn {
        display: block;
        text-align: center;
        padding: 20px 15px;
        background: #D50000; /* Đỏ đậm */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 10px;
        transition: background 0.3s ease-in-out;
    }
        /* Áp dụng cho màn hình nhỏ hơn 768px (thiết bị di động) */
        @media (max-width: 768px) {
        .container {
            padding: 10px;
        }
                
        .grid {
            grid-template-columns: 1fr; /* Hiển thị mỗi thẻ card thành một cột duy nhất */
            gap: 10px;
        }

        .card {
            padding: 15px;
            border-radius: 10px;
        }

        .card img.large {
            filter: brightness(100%) blur(3px); /* Làm tối và mờ nền */
        }

        .card img.small {
            /* position: static; */
            display: block;
            /* width: 100%; */
            margin-top: 10px;
            border-radius: 5px;
        }
        
        .card h3 {
            font-size: 20px;
            margin: 10px 0;
        }

        .btn {
            padding: 15px;
            font-size: 16px;
        }
    }
        /* Responsive cho thiết bị di động */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
    
    .grid {
        grid-template-columns: 1fr; /* Hiển thị một cột */
        gap: 10px;
        padding: 10px;
    }

    .card {
        padding: 15px;
    }

    .card img.large {
        filter: brightness(80%) blur(2px); /* Làm tối nhẹ */
    }

    .card img.small {
        /* position: static; */
        width: 60%;
        max-width: 250px;
        margin: -36 auto;
        display: block;
    }

    .pList-logo-sec {
        flex-wrap: wrap;
        gap: 10px;
    }

    .pList-logo-sec img {
        width: 35px;
    }

    .card h3 {
        font-size: 18px;
        margin: 10px 0;
    }

    .btn {
        font-size: 14px;
        padding: 10px;
    }
}


    </style>
    

<!--software-->
<!--<div class="image-container">-->
<!--    <img id="accordionImage" style="width:100%; height:90%" src="/assets/images/mission-education-ai.jpg" alt="Hình ảnh minh họa">-->
<!--</div>-->

<div class="container my-5">
<h3><b style='color: red ;font-weight: bolder;'>GIẢI PHÁP PHẦN MỀM KHOÁ HỌC CHO BẠN</b></h3>
<div style="width: 10%; height: 2px; background-color:red; margin-top: 1px;"></div><p></p>
    <p>Khám phá khoá học & phần mềm AI thú vị mà ROSA mang đến cho bạn </p>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <div class="container my-5">
        <div class="container-box">
            <div class="content">
                <div class="accordion" id="accordionExample">
                    <!-- Mục 1 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                PYTHON CƠ BẢN
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Khóa học Python cơ bản giúp bạn xây dựng nền tảng vững chắc trong lập trình Python</p>
                                <ul>
                                    <li>Khóa học này bao gồm các khái niệm cốt lõi như biến, vòng lặp, hàm, và cấu trúc dữ liệu căn bản. Từng bước, bạn sẽ học cách viết mã dễ hiểu, hiệu quả và làm quen với những ứng dụng đơn giản</li>
                                    <li>Khóa học này sẽ giúp bạn làm chủ các kiến thức nền tảng về Python, từ cú pháp cơ bản đến việc sử dụng các thư viện phổ biến như NumPy và Pandas</li>
                                </ul>
                                <a href="/courses/python-course.php" class="explore-link" style="position: relative; right: -75%;">Khám phá</a>

                            </div>
                        </div>
                    </div>
                    <!-- Mục 2 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                THỊ GIÁC MÁY TÍNH
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Khám phá thuật toán tiên phong trong lĩnh vực Thị giác máy tính</p>
                                <ul>
                                    <li>Khóa học này được thiết kế để phù hợp với mọi đối tượng, từ người mới bắt đầu đến những chuyên gia muốn nâng cao kiến thức</li>
                                    <li>Khóa học sẽ là nền tảng vững chắc để bạn xây dựng các giải pháp thông minh, giải quyết hiệu quả các bài toán thực tiễn, đồng thời mở rộng cơ hội phát triển trong lĩnh vực AI đang không ngừng phát triển</li>
                                </ul>
                                <a href="/courses/yolo-course.php" class="explore-link" style="position: relative; right: -75%;;">Khám phá</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mục 3 -->
                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                PHẦN MỀM QUẢN TRỊ DOANH NGHIỆP
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Nextcloud là một phần mềm mã nguồn mở cung cấp các giải pháp cloud</p>
                                <ul>
                                    <li>Nextcloud là một phần mềm có mã nguồn mở cung cấp các giải pháp cloud, tạo và sử dụng các dịch vụ lưu trữ tệp cho các cá nhân và doanh nghiệp</li>
                                    <li>Với hình thức lưu trữ theo cấu trúc thư mục thông thường, người dùng có thể lưu files trên các server riêng. Nexcloud cung cấp quyền kiểm soát hai bên, 
                                    vì thế người dùng có thể quyết định được nơi lưu trữ ảnh, tài liệu và cấp phép truy cập cho người khác một cách tiện lợi</li>
                                </ul>
                                <a href="/courses/Nextcloud.php" class="explore-link" style="position: relative; right: -75%;">Khám phá</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hình nền khoá học -->
            <div class="image-container">
                <img id="accordionImage" src="assets/images/education.jpg" alt="Hình ảnh minh họa">
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.accordion-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                const imagePaths = ['.jpg', '.png', '.png'];
                document.getElementById('accordionImage').src = imagePaths[index];
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</div>
 <style>

        body {
            font-family: Arial, sans-serif;
        }
       
        .faq-container-sw {
            display: flex;
            gap: 40px;
            max-width: 1100px;
            margin: auto;
            padding: 40px 0;
            
        }
        .faq-left {
            width: 35%;
        }
        .faq-right {
            width: 65%;
        }
        
        .faq-title {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .faq-subtitle {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .tab-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .tab-container {
            display : flex;
            gap:40px;
            max-width:1100px;
            margin: auto;
            padding: 40px 0;
        }
        .tab-buttons button {
            border: 1px solid #ddd;
            background: none;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
        }
        .tab-buttons .active {
            background-color: red;
            color: white;
        }
        .contact-box {
            background: #f8f8f8;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        .contact-box button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
        }
        .accordion-button {
            font-weight: bold;
        }
@media (max-width: 768px) {
    /* Chuyển từ hàng ngang sang dọc */
    .container-box {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    /* Giảm khoảng cách accordion */
    .accordion-item {
        width: 100%;
        max-width: 100%;
        padding: 5px 10px;
    }

    /* Chỉnh văn bản trong accordion */
    .accordion-button {
        font-size: 14px;
        text-align: left;
        white-space: normal; /* Cho phép xuống dòng */
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .accordion-body {
        font-size: 14px;
        text-align: left;
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        line-height: 1.5;
    }

    /* Căn chỉnh lại ảnh minh họa */
    .image-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Điều chỉnh nút bấm */
    .tab-buttons {
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
    }

    .tab-buttons button {
        font-size: 13px;
        padding: 6px 10px;
        white-space: nowrap;
    }
}

    </style>
<!--<div class="image-container">-->
<!--    <img id="accordionImage"  style="width:60%; height:90%" src="assets/images/faq_web.jpg" alt="Hình ảnh minh họa">-->
<!--</div>-->

<!-- CÂU HỎI LIÊN QUAN  -->
<div id="cauhoi"><br>
<div class="container my-5">
<h3><b style='color: red ;font-weight: bolder;'>CÂU HỎI LIÊN QUAN ĐẾN ROSA  </b></h3>
<div style="width: 10%; height: 2px; background-color:red; margin-top: 1px;"></div><p></p>
    <p>Những câu hỏi phổ biển nhất có thể bạn chưa biết đến ROSA</p>
    <style>
   
        body {
            font-family: Arial, sans-serif;
        }
       
        .faq-container {
            display: flex;
            gap: 40px;
            max-width: 1100px;
            margin: auto;
            padding: 40px 0;
            
        }
        .faq-left {
            width: 35%;
        }
        .faq-right {
            width: 65%;
        }
        
        .faq-title {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .faq-subtitle {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .tab-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .tab-container {
            display : flex;
            gap:40px;
            max-width:1100px;
            margin: auto;
            padding: 40px 0;
        }
        .tab-buttons button {
            border: 1px solid #ddd;
            background: none;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
        }
        .tab-buttons .active {
            background-color: red;
            color: white;
        }
        .contact-box {
            background: #f8f8f8;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        .contact-box button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            cursor: pointer;
        }
        .accordion-button {
            font-weight: bold;
        }
@media (max-width: 768px) {
    /* Chuyển từ hàng ngang sang dọc */
    .container-box {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    /* Giảm khoảng cách accordion */
    .accordion-item {
        width: 100%;
        max-width: 100%;
        padding: 5px 10px;
    }

    /* Chỉnh văn bản trong accordion */
    .accordion-button {
        font-size: 14px;
        text-align: left;
        white-space: normal; /* Cho phép xuống dòng */
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .accordion-body {
        font-size: 14px;
        text-align: left;
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        line-height: 1.5;
    }

    /* Căn chỉnh lại ảnh minh họa */
    .image-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Điều chỉnh nút bấm */
    .tab-buttons {
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
    }

    .tab-buttons button {
        font-size: 13px;
        padding: 6px 10px;
        white-space: nowrap;
    }
}

    </style>

  <div class="faq-container">
        <!-- Phần bên trái -->
        <div class="faq-left">
            <div class="tab-buttons">
                <button class="active" onclick="setActive(this)">Tư vấn</button>
                <button onclick="setActive(this)">Bảo hành</button>
                <button onclick="setActive(this)">Cấu hình</button>
                <button onclick="setActive(this)">Giao hàng</button>
                <button onclick="setActive(this)">Phương thức thanh toán</button>
                <button onclick="setActive(this)">Sản phẩm & linh kiện</button>
                <p style="color:red , font-size: 18px;">Bạn không có câu trả lời mình cần trong danh sách này? Hãy gửi câu hỏi cho chung tôi tại đây nhé !</p>
                <a href="https://zalo.me/909749126673606301" 
                    style="display: inline-block; padding: 10px 25px; font-size: 16px; font-weight: bold; 
                            color: white; background-color: red; border-radius: 25px; 
                            cursor: pointer; text-decoration: none; text-align: center; 
                            transition: background 0.3s ease; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">
                        Liên hệ
                    </a>
            </div>
        </div>

        <!-- Phần bên phải -->
        <div class="faq-right">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Aptent lorem blandit donec iaculis metus?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Lorem finibus eget phasellus euismod urna?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Diam metus leo hendrerit, congue sodales donec.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const faqData = {
        "Tư vấn": [
            {
              "question": "Rosa hiện tại có chi nhánh không?",
              "answer": "Hiện tại Rosa chỉ có một địa chỉ giao dịch chính thức tại: 150 Ter, đường Bùi Thị Xuân, phường Phạm Ngũ Lão, Quận 1, TP. Hồ Chí Minh"
            },
            {
              "question": "Giờ làm việc chính thức của Rosa là khi nào?",
              "answer": "Rosa hoạt động từ Thứ 2 đến Thứ 7, trong khung giờ hành chính. Để đảm bảo phục vụ tốt nhất, quý khách vui lòng truy cập website của chúng tôi để cập nhật thông tin thời gian làm việc chi tiết: <a href='https://rosacomputer.vn/' target='_blank'>https://rosacomputer.vn/</a>"
            },
            {
              "question": "Rosa có bán hàng trên các sàn thương mại điện tử không?",
              "answer": "Hiện tại Rosa phân phối sản phẩm qua các kênh như cửa hàng online, đại lý ủy quyền và ví điện tử. Tuy nhiên, để đảm bảo quyền lợi và nhận được sự hỗ trợ tốt nhất, chúng tôi khuyến khích quý khách mua hàng trực tiếp tại showroom chính thức hoặc đặt hàng qua website: <a href='https://rosacomputer.vn/' target='_blank'>https://rosacomputer.vn/</a>"
            }
        ],
         "Cấu hình": [
            {
              "question": "CPU AMD Ryzen 3 4350G",
              "answer": "Dòng APU phổ thông của AMD với kiến trúc Zen 3, tích hợp nhân đồ họa Radeon. Cấu hình: 4 nhân 8 luồng, xung nhịp 3.8GHz, cache L2: 2MB, L3: 4MB"
            },
            {
              "question": "Đồ họa tích hợp của AMD Ryzen 3 4350G",
              "answer": "Radeon RX Vega 6 cho khả năng xử lý đồ họa ổn định, chơi mượt các game phổ biến. Trang bị 6 nhân đồ họa, sản xuất trên tiến trình TSMC 7nm FinFET"
            },
            {
              "question": "CPU Intel Core i5 14400",
              "answer": "CPU 10 nhân 16 luồng, xung nhịp cơ bản 2.5GHz, turbo 4.7GHz, cache 20MB. Hỗ trợ tối đa 192GB RAM, DDR5-4800 và DDR4-3200"
            },
            {
              "question": "CPU AMD Ryzen 5 PRO 4650G",
              "answer": "6 nhân 12 luồng, tốc độ cơ bản 3.7GHz, tối đa 4.2GHz. Cache L2: 3MB, L3: 8MB. Tích hợp nhân đồ họa Radeon hiệu suất cao"
            },
            {
              "question": "CPU AMD Ryzen 5 5600X",
              "answer": "6 nhân 12 luồng, xung nhịp cơ bản 3.7GHz, cache L2: 3MB, L3: 32MB. Tối ưu cho xử lý đa tác vụ và gaming"
            },
            {
              "question": "CPU Intel Core i7-14700F",
              "answer": "Kiến trúc Performance-cores và Efficient-cores. Xung nhịp tối đa 5.4GHz. Hỗ trợ tốt các ứng dụng nặng và trò chơi cao cấp"
            }
        ],
      
        "Phương thức thanh toán": [
            {
              "question": "ROSA hổ trợ những phương thức thanh toán nào?",
              "answer": "Rosa hỗ trợ hai hình thức thanh toán: chuyển khoản qua ngân hàng và thanh toán tiền mặt"
            }        ],

        "Bảo hành": [
            {
              "question": "Tôi cần liên hệ ở đâu nếu sản phẩm gặp sự cố bảo hành?",
              "answer": "Thông tin chi tiết có trên website: <a href='https://rosacomputer.vn/' target='_blank'>https://rosacomputer.vn/</a>. Hoặc đến showroom tại: 150 Ter, đường Bùi Thị Xuân, phường Phạm Ngũ Lão, Quận 1, TP. Hồ Chí Minh"
            },
            {
              "question": "Máy bộ Rosa bảo hành bao lâu?",
              "answer": "Tất cả máy bộ Rosa được bảo hành 3 năm theo quy định từ nhà sản xuất"
            },
            {
              "question": "Số điện thoại trung tâm bảo hành Rosa là gì?",
              "answer": "(028) 3926 0996"
            }        ],
        "Giao hàng": [
            {
              "question": "Thời gian giao hàng mất bao lâu?",
              "answer": "Thời gian giao hàng tùy thuộc vào vị trí và khu vực nhận hàng Rosa luôn cố gắng giao nhanh nhất có thể"
            }      
        ],

        "Sản phẩm & linh kiện": [
             {
              "question": "Rosa hiện đang cung cấp những sản phẩm gì?",
              "answer": "Rosa tập trung vào dòng máy bộ PC với nhiều cấu hình phù hợp nhu cầu học tập, văn phòng, gaming, lập trình"
            },
            {
              "question": "Các dòng máy bộ chính của Rosa gồm những gì?",
              "answer": "ROSA AI, ROSA VĂN PHÒNG, ROSA GAMER"
            },
            {
              "question": "ROSA AI là gì?",
              "answer": "Dòng máy ROSA AI được thiết kế dành riêng cho lập trình và phát triển trí tuệ nhân tạo. Tích hợp cấu hình mạnh, cài sẵn công cụ AI, sẵn sàng cho hành trình sáng tạo của bạn"
            }        
        
        ]
    };

    // Hàm cập nhật nội dung bên phải khi bấm vào tab
    function setActive(button) {
        // Loại bỏ class 'active' khỏi tất cả nút
        document.querySelectorAll(".tab-buttons button").forEach(btn => btn.classList.remove("active"));
        // Thêm class 'active' vào nút được bấm
        button.classList.add("active");

        // Lấy nội dung cần hiển thị
        const category = button.innerText;
        const faqList = faqData[category] || [];

        // Cập nhật nội dung phần FAQ bên phải
        const faqContainer = document.getElementById("faqAccordion");
        faqContainer.innerHTML = faqList.map((item, index) => `
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button ${index === 0 ? '' : 'collapsed'}" type="button" data-bs-toggle="collapse" data-bs-target="#faq${index}">
                        ${item.question}
                    </button>
                </h2>
                <div id="faq${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">${item.answer}</div>
                </div>
            </div>
        `).join('');
    }
    // Khởi động: Đặt tab đầu tiên là "Tư vấn"
    document.addEventListener("DOMContentLoaded", () => {
        setActive(document.querySelector(".tab-buttons button"));
    });
    </script>


</header>

<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        
    }
    .banner {
        background-color: #f0f0f0;
        padding: 20px 0;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .col-md-4 {
        flex: 0 0 32%;
        max-width: 32%;
        box-sizing: border-box;
    }

    .banner_category {
        background-color: #ffffff;
        padding: 15px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .banner_category a {
        text-decoration: none;
        color: #333333;
        font-size: 18px;
        font-weight: bold;
    }

    .banner_category img {
        width: 100%;
        height: auto;
        margin-top: 10px;
        border-radius: 5px;
    }

    /*  */
    /*body {*/
    /*    background-color: #f8f9fa;*/
    /*    font-family: Arial, sans-serif;*/
    /*}*/
    
    .container-box {
        background: #fff;
        /*padding: 40px;*/
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        /* align-items: center; */
    }
    .content {
        flex: 1;
        padding-right: 30px;
    }
    .content h2 {
        font-family: Arial, sans-serif;
        font-size: 1.8rem;
        font-weight: bold;
    }
    .content ul {
        padding-left: 20px;
    }
    .content ul li {
        list-style: none;
        position: relative;
        padding-left: 20px;
        margin-bottom: 8px;
    }
    .content ul li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: red;
        font-size: 1.2rem;
    }
    .explore-link {
        color: red;
        font-weight: bold;
        text-decoration: none;
    }
    /* .explore-link:hover {
        text-decoration: underline;
    } */
    .image-container {
        flex: 1;
    }
    .image-container img {
        width: 100%;
        border-radius: 10px;
    }
    .accordion-p {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
    }
    .accordion-p:not(.collapsed) {
        color: red;
    }

    /*banner nhỏ  */

    .main-banner1 {
    display: flex; /* Sử dụng Flexbox để căn chỉnh */
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: space-between; /* Căn giữa theo chiều ngang */
    background: linear-gradient(to right, #0b011c, #0b011c); /* Màu nền gradient */
    padding: 30px; /* Tăng padding để làm cho banner lớn hơn */
    border-radius: 10px;
    background-color: #112233; /* Màu nền phía sau */
    margin: 0 auto 15px; /* Căn giữa banner và khoảng cách dưới */
    max-width: 1073px; /* Tăng chiều rộng tối đa cho banner */
}
.main-banner2 {
    display: flex; /* Sử dụng Flexbox để căn chỉnh */
    align-items: center; /* Căn giữa theo chiều dọc */
    justify-content: space-between; /* Căn giữa theo chiều ngang */
    background: linear-gradient(to right,#000000,#000000); /* Màu nền gradient */
    padding: 30px; /* Tăng padding để làm cho banner lớn hơn */
    border-radius: 10px;
    background-color: #112233; /* Màu nền phía sau */
    margin: 0 auto 15px; /* Căn giữa banner và khoảng cách dưới */
    max-width: 1073px; /* Tăng chiều rộng tối đa cho banner */
}


    .product-group {
        display: grid; 
        grid-template-columns: repeat(3, 1fr); /* 3 sản phẩm trên 1 hàng cho máy tính */
        gap: 20px; /* Khoảng cách giữa các sản phẩm */
    }
    
    .card {
        display: flex;
        flex-direction: column; /* Đặt các phần tử bên trong thẻ card theo chiều dọc */
        align-items: center; /* Căn giữa các phần tử bên trong */
        border: 1px solid #ddd;
        border-radius: 8px; 
        gap: 20px;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 20px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        width: 100%; /* Đảm bảo thẻ card chiếm toàn bộ chiều rộng */
    }
    
    .image-container {
        width: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều rộng */
        height: auto; /* Chiều cao tự động để giữ tỷ lệ hình ảnh */
        overflow: hidden; 
        display: flex;
        justify-content: center;
        align-items: center; 
    }
    h3 {
        font-size: 25px;
    }
    .image-container img {
        width: 100%; 
        height: auto; /* Đảm bảo hình ảnh không bị méo */
        object-fit: contain; /* Giữ tỷ lệ hình ảnh */
        object-position: center; 
    }

    .details {
        display: flex;
        flex-direction: column; /* Đảm bảo các chi tiết nằm theo chiều dọc */
        justify-content: flex-start; /* Căn chỉnh các phần tử ở đầu */
        margin-top: 10px; /* Khoảng cách giữa hình ảnh và chi tiết */
        width: 100%; /* Đảm bảo chi tiết chiếm toàn bộ chiều rộng */
        flex-grow: 1; /* Cho phép chi tiết mở rộng nếu cần */
    }
    .

    .details h3 {
        margin: 0 0 8px;
        font-size: 18px;
        color: red; 
        font-family: 'Arial', sans-serif;
    }

    .key-specs {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
    }

    .price {
        font-size: 18px;
        font-weight: bold;
        color: red;
        margin-top: 10px;
    }
    
    .shop-button {
        display: inline-block;
        width: 100%; /* Đảm bảo nút mua chiếm toàn bộ chiều rộng */
        text-align: center;
        background-color: #ff0000;
        color: white;
        padding: 10px 0;
        text-decoration: none;
        border-radius: 5px;
        font-size: 15px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        margin-top: 10px; /* Khoảng cách giữa giá và nút mua */
    }

    .shop-button:hover {
        background-color: #FF0000; 
    }

    .main-banner {
        display: flex; 
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(to right, #336699, #000000);
        padding: 50px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .banner-image img {
        max-width: 100%; 
        height: 200px; 
    }

/* Media Queries */
@media (max-width: 768px) {
    .product-group {
        font-family: Arial, sans-serif;
        display: flex; /* Sử dụng flexbox cho điện thoại */
        flex-direction: column; /* Sắp xếp theo chiều dọc */
        gap: 20px; /* Khoảng cách giữa các sản phẩm */
    }

    .main-banner {
        flex-direction: column; 
        padding: 20px;
    }

    .title h3 {
        font-size: 22px;
    }

    .details h3 {
        font-size: 16px; 
    }

    .key-specs {
        font-size: 12px;
    }

    .price {
        font-size: 16px;
    }

    .shop-button {
        padding: 12px 0;
    }
}
        
    .a{
        max-width:10px;
        margin :20px auto;
        padding: 0 20px;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }
    .title h1 {
        font-size: 28px;
        margin: 10px 0;
    }
    .title p {
        font-family: Arial, sans-serif;
        color: #666;
    }
    .card-content {
        min-height: 250px; /* Chiều cao tối thiểu cho phần nội dung */
        overflow: hidden; /* Ẩn nội dung thừa nếu vượt quá chiều cao */
    }

    /* Nút mua ngay */
    .card-footer {
        margin-top: 10px; /* Tạo khoảng cách giữa phần nội dung và nút */
        text-align: center;
    }

    .card {
        display: flex;
        flex-direction: column; /* Thay đổi từ row thành column để ảnh ở trên và chi tiết ở dưới */
        align-items: center; /* Căn giữa các phần tử */
        gap: 20px;
        justify-content: space-between; /* Căn đều nội dung bên trong */
        height: 100%; /* Đảm bảo chiều cao đồng nhất */
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .image-container {
        width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của thẻ */
        height: 250px; /* Cố định chiều cao ảnh */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        width: 100%;
        height: 95%;
        object-fit: cover;
        object-position: center;
    }

    .details {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* text-align: center; */
    }

    .details h3 {
        font-size: 18px;
        color: red;
        margin: 10px 0;
        font-family:'Arial', sans-serif;
    }

    .details p {
        font-size: 16px;
        color: #000000;
        margin: 10px 0;
    }

    .key-specs {
        font-size: 14px;
        color: #333;
        line-height: 1.5;
    }

    .price {
        font-size: 18px;
        font-weight: bold;
        color: red;
        margin: 10px 0;
    }

    .shop-button {
        display: block;
        width: 100%;
        text-align: center;
        background-color: #ff0000;
        color: white;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .shop-button:hover {
        background-color: #cc0000;
    }


    /* Styling for product titles */
    .details h3 {
        margin: 0 0 8px;
        font-size: 18px;
        color: red; /* Màu đỏ nổi bật */
    }

    /* Key specifications styling */
    .key-specs {
        font-size: 15px;
        color: #00000;
        line-height: 1.6;
    }

    /* Price styling */
    .price {
        font-size: 18px;
        font-weight: bold;
        color: red;
        margin-top: 10px;
    }

    p {
        font-size: 16px;
        margin-bottom: 10px; /* Khoảng cách giữa đoạn văn và nút */
        color: #4F4F4F;
        font-family: Arial, sans-serif;
    }

    .shop-button {
        display: inline-block; /* Đảm bảo hiển thị như một khối */
        width: 300px; /* Đặt chiều rộng cố định */
        text-align: center; /* Canh giữa chữ trong nút */
        background-color: #ff0000;
        color: white;
        padding: 10px 0; /* Khoảng cách trên và dưới */
        text-decoration: none;
        border-radius: 5px; /* Bo góc nút */
        font-size: 15px; /* Kích thước chữ riêng cho nút */
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .shop-button:hover {
        background-color: #FF0000; /* Hiệu ứng hover */
    }
    
	@media (max-width: 768px) {
    .card {
        flex-direction: column; /* Vẫn giữ layout ngang trên điện thoại */
        gap: 10px; /* Giảm khoảng cách giữa ảnh và nội dung */
        padding: 10px; /* Giảm padding để tối ưu không gian */
    }

    .image-container img {
        width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng */
        height: auto; /* Giữ tỷ lệ ảnh */
    }

    .details h3 {
        font-size: 16px; /* Giảm kích thước font tiêu đề */
    }
    
    p {
        font-size: 14px; /* Giảm kích thước chữ */
        font-family: Arial, sans-serif;
    }

    .key-specs {
        font-size: 12px; /* Giảm kích thước font cho thông số */
    }

    .price {
        font-size: 16px; /* Giảm kích thước giá */
    }

    /* Điều chỉnh nút "Mua ngay" */
    .shop-button {
        width: 100%; /* Đặt nút shop chiếm toàn bộ chiều rộng */
        padding: 12px 0; /* Thêm padding cho nút */
    }
}
/* Media Queries */
@media (max-width: 768px) {
    .product-group {
        display: flex; /* Sử dụng flexbox cho điện thoại */
        flex-direction: column; /* Sắp xếp theo chiều dọc */
        gap: 20px; /* Khoảng cách giữa các sản phẩm */
    }
    
    

    .main-banner {
        flex-direction: column; 
        padding: 20px;
    }

    .title h3 {
        font-size: 22px;
    }

    .details h3 {
        font-size: 16px; 
    }

    .key-specs {
        font-size: 12px;
    }

    .price {
        font-size: 16px;
    }

    .shop-button {
        padding: 12px 0;
    }
}
        
    .a{
        max-width:10px;
        margin :20px auto;
        padding: 0 20px;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }
    .title h1 {
        font-size: 28px;
        margin: 10px 0;
    }
    .title p {
        color: #666;
    }
    .card-content {
        min-height: 250px; /* Chiều cao tối thiểu cho phần nội dung */
        overflow: hidden; /* Ẩn nội dung thừa nếu vượt quá chiều cao */
    }

    /* Nút mua ngay */
    .card-footer {
        margin-top: 10px; /* Tạo khoảng cách giữa phần nội dung và nút */
        text-align: center;
    }

    .card {
        display: flex;
        flex-direction: column; /* Thay đổi từ row thành column để ảnh ở trên và chi tiết ở dưới */
        align-items: center; /* Căn giữa các phần tử */
        gap: 20px;
        justify-content: space-between; /* Căn đều nội dung bên trong */
        height: 100%; /* Đảm bảo chiều cao đồng nhất */
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .image-container {
        width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của thẻ */
        height: 250px; /* Cố định chiều cao ảnh */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .image-container img {
        width: 77%;
        height: 90%;
        object-fit: cover;
        object-position: center;
    }

    .details {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* text-align: center; */
    }

    .details h3 {
        font-size: 18px;
        color: red;
        margin: 10px 0;
        font-family:'Arial', sans-serif;
    }

    .details p {
        font-size: 16px;
        color: #000000;
        margin: 10px 0;
    }

    .key-specs {
        font-size: 14px;
        color: #333;
        line-height: 1.5;
    }

    .price {
        font-size: 18px;
        font-weight: bold;
        color: red;
        margin: 10px 0;
    }

    .shop-button {
        display: block;
        width: 100%;
        text-align: center;
        background-color: #ff0000;
        color: white;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .shop-button:hover {
        background-color: #cc0000;
    }


    /* Styling for product titles */
    .details h3 {
        margin: 0 0 8px;
        font-size: 18px;
        color: red; /* Màu đỏ nổi bật */
    }

    /* Key specifications styling */
    .key-specs {
        font-size: 15px;
        color: #00000;
        line-height: 1.6;
    }

    /* Price styling */
    .price {
        font-size: 18px;
        font-weight: bold;
        color: red;
        margin-top: 10px;
    }

    p {
        font-family: Arial, sans-serif;
        font-size: 16px;
        margin-bottom: 10px; /* Khoảng cách giữa đoạn văn và nút */
        color: #4F4F4F;
    }

    .shop-button {
        display: inline-block; /* Đảm bảo hiển thị như một khối */
        width: 300px; /* Đặt chiều rộng cố định */
        text-align: center; /* Canh giữa chữ trong nút */
        background-color: #ff0000;
        color: white;
        padding: 10px 0; /* Khoảng cách trên và dưới */
        text-decoration: none;
        border-radius: 5px; /* Bo góc nút */
        font-size: 15px; /* Kích thước chữ riêng cho nút */
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .shop-button:hover {
        background-color: #FF0000; /* Hiệu ứng hover */
    }
    
	@media (max-width: 768px) {
    .card {
        flex-direction: column; /* Vẫn giữ layout ngang trên điện thoại */
        gap: 10px; /* Giảm khoảng cách giữa ảnh và nội dung */
        padding: 10px; /* Giảm padding để tối ưu không gian */
    }

    .image-container img {
        width: 100%; /* Đảm bảo ảnh chiếm toàn bộ chiều rộng */
        height: auto; /* Giữ tỷ lệ ảnh */
    }

    .details h3 {
        font-size: 16px; /* Giảm kích thước font tiêu đề */
    }
    
    p {
        font-size: 14px; /* Giảm kích thước chữ */
    }

    .key-specs {
        font-size: 12px; /* Giảm kích thước font cho thông số */
    }

    .price {
        font-size: 16px; /* Giảm kích thước giá */
    }

    /* Điều chỉnh nút "Mua ngay" */
    .shop-button {
        width: 100%; /* Đặt nút shop chiếm toàn bộ chiều rộng */
        padding: 12px 0; /* Thêm padding cho nút */
    }
}


	</style>



<?php require "footer.php" ; ?>