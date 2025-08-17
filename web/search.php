<?php
// Import danh sách sản phẩm (file product_list.php bạn đã viết)
require "../data/common.php"; // file chứa class Entry và $list_sp

// Lấy từ khóa người dùng nhập
$keyword = isset($_GET['q']) ? trim($_GET['q']) : "";

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

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="assets/styles/bootstrap4/bootstrap.min.css">
    <style>
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            display: flex;
            align-items: center;
        }
        .product-card img {
            width: 180px;
            height: auto;
            margin-right: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>Kết quả tìm kiếm cho: <em><?= htmlspecialchars($keyword) ?></em></h2>
    <hr>

    <?php if (empty($results)): ?>
        <p>❌ Không tìm thấy sản phẩm nào.</p>
    <?php else: ?>
        <?php foreach ($results as $sp): ?>
            <div class="product-card">
                <img src="<?= $sp->image ?>" alt="<?= $sp->title ?>">
                <div>
                    <h4><a href="<?= $sp->page ?>"><?= $sp->title ?></a></h4>
                    <p><?= $sp->subtitle ?></p>
                    <strong>Giá: <?= $sp->price ?></strong>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</body>
</html>
