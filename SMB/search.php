
<?php
$all_products = [
    [
        'name' => 'ROSA AI',
        'file' => 'rosa_ai.php'
    ],
    [
        'name' => 'ROSA OFFICE ZERO',
        'file' => 'ROSA-OFFICE-ZERO.php'
    ],
    [
        'name' => 'ROSA OFFICE Ⅰ',
        'file' => 'ROSA-OFFICE.php'
    ],
    [
        'name' => 'ROSA OFFICE Ⅱ',
        'file' => 'workstation.php'
    ],

    [
        'name' => 'ROSA-GAMER-X3D',
        'file' => 'ROSA-GAMER-X3D.php'
    ],

    [
        'name' => 'ROSA GAMER Ⅱ',
        'file' => 'ROSA-GAMER-2.php'
    ],


    [
        'name' => 'ROSA GAMER PALIT1',
        'file' => 'ROSA-GAMER-PALIT1.php'
    ],

    [
        'name'=> 'ROSA GAMER PALO'
    ]


    // Thêm tất cả các trang sản phẩm khác ở đây
];
?>


<?php

$keyword = isset($_GET['q']) ? strtolower(trim($_GET['q'])) : '';
$results = [];

if ($keyword !== '') {
    foreach ($all_products as $product) {
        if (strpos(strtolower($product['name']), $keyword) !== false) {
            $results[] = $product;
        }
    }
}
?>

<form method="get" action="search.php">
    <input type="text" name="q" placeholder="Tìm sản phẩm..." value="<?= htmlspecialchars($keyword) ?>">
    <button type="submit">Tìm kiếm</button>
</form>

<?php if ($keyword !== ''): ?>
    <h2>Kết quả tìm kiếm cho: <?= htmlspecialchars($keyword) ?></h2>
    <?php if (empty($results)): ?>
        <p>Không tìm thấy sản phẩm nào.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($results as $item): ?>
                <li><a href="<?= $item['file'] ?>"><?= htmlspecialchars($item['name']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>
