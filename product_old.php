<title>Sản Phẩm ROSA</title>

<?php require "header.php" ;?>
<?php require "data/common.php"; ?>

<div class="banner">
<div class="container">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Backtoschool.jpg" class="img-fluid" alt="backtoschool" onclick="window.location.href='product.php'">
            </div>
        </div>
    
	<div class="row">
	<div class="col-lg-12 mb-3">         
        <div class="container">
        	<div class="title">
        	   <br><!-- Tạo khoảng cách bằng thẻ br -->
        		<h3><b style='color: red ;font-weight: bolder;'>Cấu Hình Máy Bộ ROSA</b></h3>
        		<p>ROSA PC cung cấp ba dòng sản phẩm tối ưu: PC Văn Phòng, PC AI và PC Gaming, đáp ứng mọi nhu cầu công việc và giải trí</p>
        	</div>
        	
        	 <!--Văn phòng-->
        	 <div id="vanphong"><br>
             <div class="main-banner" style="background: linear-gradient(to right,#000000,#000000);">
                <div class="banner-content">
                   <H3><b style="color:#FFF">VĂN PHÒNG</b></H3>
            		<h5 style="color:#DCDCDC">Mang đến hiệu suất ổn định và tính năng bảo mật cao, hoàn hảo cho công việc văn phòng hàng ngày</h5>
                </div>
                <div class="banner-image">
                    <img src="assets/images/VP.jpg" alt="Gaming PC" />
                </div>
            </div>    
             <div class="product-group vanphong">
                    <?php 
                        $vp_list = [$rosa_office_0, $rosa_office_1, $rosa_office_2];

                        foreach ($vp_list as $product) {
                            ?>
                            <div class="card">
                                <div class="image-container">
                                    <a href="<?= htmlspecialchars($product->page) ?>">
                                        <img src="<?= htmlspecialchars($product->image) ?>" alt="vanphong">
                                    </a>
                                </div>
                            
                                <div class="details">
                                    <h3 style="color: red; font-size: 21px; text-align: center;font-weight: bold;"><?= htmlspecialchars($product->title) ?></h3>
                                    <p><?= htmlspecialchars($product->subtitle) ?></p>
                                    <div class="key-specs">
                                        <?= $product->content  ?>
                                    </div>
                                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                 <!--GAMER-->
                  <div id="gaming"><br>
                 <div class="main-banner" style="background: linear-gradient(to right,#000000,#000000);">
                    <div class="banner-content">
                        <H3><b style="color:#FFF">GAMING</b><H3>
                        <h5 style="color:#DCDCDC">Trang bị cấu hình đỉnh cao và các card đồ họa mạnh mẽ, mang đến hiệu suất vượt trội cho các tựa game yêu thích. Máy tính này giúp bạn trải nghiệm đồ họa sắc nét và chơi game mượt mà, ngay cả với các tựa game nặng</h5>
                    </div>
                    <div class="banner-image">
                        <img src="assets/images/game.jpg" alt="Gaming PC" />
                    </div>
                </div>
                 <div class="product-group vanphong">
                        <?php 
                            $gaming_list = [$rosa_gamer_x3d, $rosa_gamer_1, $rosa_gamer_2,$rosa_gamer_palit1,$rosa_gamer_palit2,$rosa_gamer_palit3];

                            foreach ($gaming_list as $product) {
                                ?>
                                <div class="card">
                                    <div class="image-container">
                                        <a href="<?= htmlspecialchars($product->page) ?>">
                                            <img src="<?= htmlspecialchars($product->image) ?>" alt="gaming">
                                        </a>
                                    </div>
                                    <div class="details">
                                       <h3 style="color: red; font-size: 21px; text-align: center;font-weight: bold; "><?= htmlspecialchars($product->title) ?></h3>
                                        <p><?= htmlspecialchars($product->subtitle) ?></p>
                                        <div class="key-specs">
                                            <?= $product->content ?>
                                        </div>
                                        <div class="price"><?= htmlspecialchars($product->price) ?></div>
                                        <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    
                      <!--Mini PC-->
                <div id="mini">
                <div class="main-banner" style=" background: linear-gradient(to right,#000000,#000000);">
                    <div class="banner-content">
                       <H3><b style="color:#FFF">MINI PC</b><H3>
                		<h5 style="color:#DCDCDC">Lựa chọn hoàn hảo cho không gian làm việc gọn gàng, cung cấp hiệu suất cao và khả năng đa nhiệm mượt mà với thiết kế nhỏ gọn, thích hợp cho cả văn phòng và nhu cầu sử dụng hàng ngày</h5>
                    </div>
                    <div class="banner-image">
                        <img src="assets/images/mini.jpg" alt="Mini PC" style="width: 100%; height: auto"/>
                    </div>
                </div> 
                 <div class="product-group vanphong">
                        <?php 
                            $mini_list = [$rosa_mini_1 , $rosa_mini_2];

                            foreach ($mini_list as $product) {
                                ?>
                                <div class="card">
                                    <div class="image-container">
                                        <a href="<?= htmlspecialchars($product->page) ?>">
                                            <img src="<?= htmlspecialchars($product->image) ?>" alt="mini">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <h3  style="color: red; font-size: 21px; text-align: center;font-weight: bold;"><?= htmlspecialchars($product->title) ?></h3>
                                        <p><?= htmlspecialchars($product->subtitle) ?></p>
                                        
                                        <div class="key-specs">
                                            <?= $product->content  ?>
                                        </div>
                                        <div class="price"><?= htmlspecialchars($product->price) ?></div>
                                        <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                                    </div>
                                </div>
                                <?php
                                }
                            ?>
                    </div>
           
               
                 <!--AI-->
                <div class="main-banner" style=" display: flex; justify-content: space-between; padding: 5px; background: rgba(255,102,0,0.85);">
                    <div class="banner-image">
                        <img src="assets/images/Palit_banner%2016.5.2025.png" alt="Mini PC" style="width: 100%; height: auto"/>
                    </div>
                </div>
                <div class="product-group ai">
                        <?php 
                            $ai_list = [$rosa_ai,$rosa_server_1,$rosa_server_2];

                            foreach ($ai_list as $product) {
                                ?>
                                <div class="card">
                                    <div class="image-container">
                                        <a href="<?= htmlspecialchars($product->page) ?>">
                                            <img src="<?= htmlspecialchars($product->image) ?>" alt="ai">
                                        </a>
                                    </div>
                                    <p></p>
                                    <div class="details">
                                        <p></p>
                                        <h3  style="color: red; font-size: 21px; text-align: center;font-weight: bold;"><?= htmlspecialchars($product->title) ?></h3>
                                        <p><?= htmlspecialchars($product->subtitle) ?></p>
                                        <div class="key-specs">
                                            <?= $product->content  ?>
                                        </div>
                                        <div class="price"><?= htmlspecialchars($product->price) ?></div>
                                        <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                                        
                                    </div>
                            </div>
                                <?php
                            }
                            ?>
                    </div>
            	</div>
                </div>
                </div>
            </header>
            
        <style>
            
        .body {
            font-family: Arial, sans-serif; 
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
       

        .title h1 {
            font-size: 28px;
            margin: 10px 0;
            font-family: 'Arial', sans-serif; 
        }
    
        .title p {
            color: #000000;
        }
        h5 {
            font-size: 18px;
        }
    
        .title {
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            text-align: center;  
            margin-bottom: 20px; 
            font-family: 'Arial', sans-serif;
            color: #333; 
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
        /*max-width: 100%; */
        height: 155px; 
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
        width: 100%;
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
     .shop-button:hover {
        background-color: #cc0000; /* Giữ hiệu ứng hover */
    }

    /* Main banner */
    .main-banner {
        flex-direction: column; /* Xếp chồng nội dung và hình ảnh */
        padding: 15px; /* Giảm padding */
        border-radius: 6px; /* Bo góc nhẹ hơn */
    }

    .banner-content h3 {
        font-size: 18px; /* Giảm kích thước tiêu đề */
        margin-bottom: 10px;
    }

    .banner-content h5 {
        font-size: 14px; /* Giảm kích thước mô tả */
        line-height: 1.5; /* Tăng khoảng cách dòng */
    }

    .banner-image img {
        height: 120px; /* Giảm chiều cao hình ảnh */
        width: 100%; /* Đảm bảo chiếm toàn bộ chiều rộng */
        object-fit: cover; /* Đảm bảo hình ảnh không bị méo */
    }
    
}
            	
        </style>

        
        <?php
            require "footer.php" ;
        ?>