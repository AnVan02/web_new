<?php
// Import danh sách sản phẩm (file product_list.php bạn đã viết)
require "../data/common.php"; // file chứa class Entry và $list_sp

// Lấy từ khóa người dùng nhập
$keyword = isset($_GET['rosa']) ? trim($_GET['rosa']) : "";

// Kết quả tìm kiếm
$results = [];

if ($keyword !== "") {
    foreach ($list_sp as $sp) {
        // Kiểm tra trong title hoặc subtitle (không phân biệt hoa thường)
        if (stripos($sp->title, $keyword) !== false || stripos($sp->subtitle, $keyword) !== false) {
            $results[] = $sp;
        }
    }
}
?>
<?php require "header.php" ?>
  
    <div class="container mt-4">
        <!-- tim kiêm sản phẩm  -->
        <form class="search-box" action="search.php" method="get">
            <i class="fas fa-search"></i>
            <input type="text" name="rosa" id="searchInput" placeholder="Tìm kiếm..." autocomplete="off">
        </form>
        <hr>
        <?php if (empty($results)): ?>
            <p>❌ Không tìm thấy sản phẩm nào.</p>
        <?php else: ?>
            <!-- Hiển thị sản phẩm thuộc sản phẩm đó  -->
            <?php foreach ($results as $sp): ?>
                <div class="product-card">
                    <img src="<?= $sp->image ?>" alt="<?= $sp->title ?>">
                    <div>
                        <h4><a href="<?= $sp->page ?>"><?= $sp->title ?></a></h4>
                        <p><?= $sp->content ?></p>
                        <strong>Giá: <?= $sp->price ?></strong>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>  
    </div>
    <style>
        body {
            font-family: 'Montserrat';
            font-size: 16px;
            line-height: 1.6;
            background-color: #fff;
            color: #0e0e0e;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            display: flex;
            align-items: center;
        }
        .product-card img {
            width: 350px;
            height: auto;
            margin-right: 20px;
        }

        a {
            text-decoration: none !important;
        }

        p, {
            margin-bottom: 6rem;
            font-size:19px;
            color: #000;
        }

        b, strong {
            font-size:20px;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box i {
            position: absolute;
            left: 10px;
            font-size: 14px;
            color: #999;
        }

        .search-box input {
            padding-left: 20px;   /* cách icon kính lúp */
            padding-right: 25px;  /* chừa chỗ cho nút xoá */
            
        }

        .clear-btn {
            position: absolute;
            right: 10px;
            cursor: pointer;
            display: none;         /* ẩn khi input trống */
            font-size: 16px;
            color: #999;
        }
    </style>
<?php require "footer.php" ?>