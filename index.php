<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị sản phẩm</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            background: #f0f0f0;
        }
        .product-showcase {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .product-image-container {
            height: 400px; /* Chiều cao lớn */
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        /* Các hình ảnh thực tế - thay bằng đường dẫn hình của bạn */
        .office-img { background-image: url('office.jpg'); }
        .gaming-img { background-image: url('gaming.jpg'); }
        .ai-img { background-image: url('ai.jpg'); }
        .minipc-img { background-image: url('minipc.jpg'); }
    </style>
</head>
<body>
    <div class="product-showcase">
        <!-- Chỉ hiển thị hình ảnh, không có text -->
        <div class="product-image-container office-img"></div>
        <div class="product-image-container gaming-img"></div>
        <div class="product-image-container ai-img"></div>
        <div class="product-image-container minipc-img"></div>
    </div>
</body>
</html>