<?php require "header.php" ?>

<?php require "../data/common.php"; ?>

<script src="../script/sanpham.js"></script>
<link rel="stylesheet" href="../style/sanpham.css">

<!-- Banner -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

  <!-- Các dấu chấm -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../image/banner_sp_1.png" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="../image/Backtoschool.jpg" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="../image/banner_sp_3.png" class="d-block w-100" alt="Banner 3">
        </div>
    </div>
</div>



<!-- Title -->

<div class="computer-section">
    <div class="computer-header section-header">
        <h2 class="computer-title section-title">Máy tính bộ</h2>
        <p href="#" class="computer-view-all view-all-link">Đa dạng, bền bỉ</p>
    </div>
    
<div class="product-container-custom">
    <!-- Thanh chọn loại sản phẩm -->
   <div class="category-tabs-wrapper">
        <div class="category-tabs">
            <!-- <button id="btn-vanphong" onclick="showCategory('vanphong')" class="active">Văn phòng</button> -->
            <button id="btn-vanphong" onclick="showCategory('vanphong')">Văn phòng</button>
            <button id="btn-gaming" onclick="showCategory('gaming')">Gaming</button>
            <button id="btn-mini" onclick="showCategory('mini')">MiniPC</button>
            <button id="btn-ai" onclick="showCategory('ai')">AI</button>
        </div>
    </div>
<div id="vanphong"><br>
    <!-- Văn phòng -->
    <div class="product-group vanphong">
        <?php 
        $vp_list = [$rosa_office_n100, $rosa_office_1, $rosa_office_2];
        foreach ($vp_list as $product) { ?>
            <div class="why-card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="vanphong">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3><hr>
                    <!-- <p><?= htmlspecialchars($product->subtitle) ?></p> -->
                    <div class="key-specs"><?= $product->content ?></div><hr>
                    
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <!-- Gaming -->
    <div id="gaming"><br>
    <div class="product-group gaming">
        <?php 
        $gaming_list = [$rosa_gamer_x3d, $rosa_gamer_1, $rosa_gamer_2,$rosa_gamer_palit1,$rosa_gamer_palit2,$rosa_gamer_palit3];

        foreach ($gaming_list as $product) { ?>
            <div class="why-card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="gaming">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3><hr>
                    <!-- <p><?= htmlspecialchars($product->subtitle) ?></p> -->
                    <div class="key-specs"><?= $product->content ?></div><hr>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div id="mini">
    <!-- Mini PC -->
    <div class="product-group mini">
        <?php 
        $mini_list = [$rosa_mini_1 , $rosa_mini_2];
        foreach ($mini_list as $product) { ?>
            <div class="why-card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="mini">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3><hr>
                    <!-- <p><?= htmlspecialchars($product->subtitle) ?></p> -->
                    <div class="key-specs"><?= $product->content ?></div><hr>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- AI -->
    <div class="product-group ai">
        <?php 
        $ai_list = [$rosa_ai,$rosa_server_1,$rosa_server_2];
        foreach ($ai_list as $product) { ?>
            <div class="why-card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="ai">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3><hr>
                    <!-- <p><?= htmlspecialchars($product->subtitle) ?></p> -->
                    <div class="key-specs"><?= $product->content ?></div><hr>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
</div>
  
<div class="banner" style="margin-bottom: 20px;">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner_sp_2.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div>

<div class="banner" style="margin-bottom: 20px;">
    <div class="row">
        <div class="hero-section" style="width: 50%; height: auto; margin: 0 auto;">
            <img src="../image/Frame 1000005520 (1).png" alt="Banner" class="hero-image">
        </div>
    </div>
</div>


<div class="banner" style="margin-bottom: 20px;">
    <div class="row">
        <div class="hero-section">
            <img src="../image/banner_sp_3.png" alt="Banner" class="hero-image">
        </div>
    </div>
</div>


<?php require "footer.php" ?>