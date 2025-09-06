<title>Sản Phẩm ROSA</title>

<?php require "header.php" ;?>
<?php require "data/common.php"; ?>

<div class="banner">
<div class="product-custom">
	<div class="row">
	<div class="col-lg-12 mb-3">         
        <div class="product-custom">
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
                        $vp_list = [$rosa_office_n100, $rosa_office_1, $rosa_office_2];

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
                </div>
                 <!--GAMER-->
                 <div id="gaming"><br>
                 <div class="main-banner" style="background: linear-gradient(to right,#000000,#000000) ; ">
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
                            $gaming_list = [$rosa_gamer_x3d, $rosa_gamer_1, $rosa_gamer_2];

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
                <div class="main-banner" style=" background: linear-gradient(to right,rgba(255,102,0,0.85);,rgba(255,102,0,0.85););">

                    <div class="banner-image">
                        <img src="assets/images/Palit_banner%2016.5.2025.png" alt="Mini PC" style="width: 100%; height: auto"/>
                    </div>
                </div>
             <div class="product-group ai">
                        <?php 
                            $ai_list = [$rosa_ai];

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
            </header>
        <style>
         /* General Styling */
.body {
    font-family: Arial, sans-serif;
    line-height: 1.5;
    margin: 0;
    padding: 0;
}

/* Thêm parent class hoặc id để giới hạn phạm vi */
.product-custom {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
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

.title h3 {
    font-size: 28px;
    margin: 10px 0;
    font-family: Arial, sans-serif;
}

.title p {
    color: #000000;
}

h5 {
    font-size: 20px;
    font-family: Arial, sans-serif;
}

/* Product Group Styling (Desktop - Unchanged) */
.product-group {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 products per row on desktop */
    gap: 20px; /* Spacing between products */
}

/* Card Styling */
.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 8px;
    gap: 20px;
    padding: 16px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
}

.image-container {
    width: 100%;
    height: 250px;
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
}

.details h3 {
    font-size: 18px;
    color: red;
    margin: 10px 0;
    font-family: 'Arial', sans-serif;
    text-align: center;
    font-weight: bold;
}

.details p {
    font-size: 16px;
    color: #4F4F4F;
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

/* Main Banner Styling */
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
    height: 200px;
}

/* Media Queries for Mobile Devices */
@media (max-width: 768px) {
    .product-group {
        display: grid;
        grid-template-columns: 1fr; /* 1 product per row on mobile */
        gap: 15px; /* Reduced spacing for mobile */
    }

    /* Special Case for AI Section (1 product, centered) */
    .product-group.ai {
        grid-template-columns: 1fr; /* Already 1 product, ensure centering */
        justify-items: center;
    }

    .card {
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }

    .image-container {
        width: 100%;
        height: 180px; /* Adjusted for mobile */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .details h3 {
        font-size: 16px;
    }

    .details p {
        font-size: 14px;
    }

    .key-specs {
        font-size: 12px;
    }

    .price {
        font-size: 16px;
    }

    .shop-button {
        width: 100%;
        padding: 10px 0;
        font-size: 14px;
    }

    .main-banner {
        flex-direction: column;
        padding: 20px;
    }

    .title h3 {
        font-size: 22px;
    }

    .banner-image img {
        height: 171px;
    }
}

@media (max-width: 480px) {
    .image-container {
        height: 150px; /* Further reduced for smaller screens */
    }

    .details h3 {
        font-size: 14px;
    }

    .details p {
        font-size: 12px;
    }

    .key-specs {
        font-size: 11px;
    }

    .price {
        font-size: 14px;
    }

    .shop-button {
        font-size: 13px;
        padding: 8px 0;
    }
}
            	
        </style>
        
<?php
    require "footer.php" ;
?>