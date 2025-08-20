<?php require "header.php" ?>
<?php require "../data/common.php"; ?>

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
