<?php
require "common.php";
?>
<title>Sản Phẩm ROSA</title>


<style>
    .banner {
        width: 100%;
    }
    .hero-section {
        position: relative;
        width: 100%;
        overflow: hidden;
    }
    .hero-image {
        width: 100%;
        height: auto; /* Giữ đúng tỉ lệ ảnh */
        display: block;
    }
    .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 2rem;
        text-align: center;
    }
</style>
</head>
<body>

<div class="banner">
    <div class="row">
        <div class="hero-section">
            <img src="image/banner.png" alt="Banner" class="hero-image">
            <div class="hero-text">
                <!-- Nội dung chữ nếu cần -->
            </div>
        </div>
    </div>
</div>

</body>
</html>


<div class="header">
    <div class="title">Máy tính bộ</div>
    <div class="subtitle">Đa dụng, bền bỉ</div>
</div>

<div class="product-container-custom">
    <!-- Thanh chọn loại sản phẩm -->
    <div class="category-tabs-wrapper">
     <div class="category-tabs">
          <button onclick="showCategory('vanphong')" class="active">Văn phòng</button>
          <button onclick="showCategory('gaming')">Gaming</button>
          <button onclick="showCategory('mini')">MiniPC</button>
          <button onclick="showCategory('ai')">AI</button>
     </div>
     </div>

    <!-- Văn phòng -->
    <div class="product-group vanphong">
        <?php 
        $vp_list = [$rosa_office_n100, $rosa_office_1, $rosa_office_2];
        foreach ($vp_list as $product) { ?>
            <div class="card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="vanphong">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3>
                    <p><?= htmlspecialchars($product->subtitle) ?></p>
                    <div class="key-specs"><?= $product->content ?></div>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- Gaming -->
    <div class="product-group gaming">
        <?php 
        $gaming_list = [$rosa_gamer_x3d, $rosa_gamer_1, $rosa_gamer_2];
        foreach ($gaming_list as $product) { ?>
            <div class="card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="gaming">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3>
                    <p><?= htmlspecialchars($product->subtitle) ?></p>
                    <div class="key-specs"><?= $product->content ?></div>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Mini PC -->
    <div class="product-group mini">
        <?php 
        $mini_list = [$rosa_mini_1 , $rosa_mini_2];
        foreach ($mini_list as $product) { ?>
            <div class="card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="mini">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3>
                    <p><?= htmlspecialchars($product->subtitle) ?></p>
                    <div class="key-specs"><?= $product->content ?></div>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- AI -->
    <div class="product-group ai">
        <?php 
        $ai_list = [$rosa_ai];
        foreach ($ai_list as $product) { ?>
            <div class="card">
                <div class="image-container">
                    <a href="<?= htmlspecialchars($product->page) ?>">
                        <img src="<?= htmlspecialchars($product->image) ?>" alt="ai">
                    </a>
                </div>
                <div class="details">
                    <h3><?= htmlspecialchars($product->title) ?></h3>
                    <p><?= htmlspecialchars($product->subtitle) ?></p>
                    <div class="key-specs"><?= $product->content ?></div>
                    <div class="price"><?= htmlspecialchars($product->price) ?></div>
                    <a href="<?= htmlspecialchars($product->page) ?>" class="shop-button">Mua ngay</a>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<style>
/* ===== Thanh tab ===== */
/* Bọc thanh tab vào div cha */
.category-tabs {
    background-color: #f2f2f2;
    border-radius: 50px;
    display: inline-flex;
    padding: 5px;
    gap: 5px;
}

/* Thêm lớp bao để căn giữa */
.category-tabs-wrapper {
    display: flex;
    justify-content: center; /* Căn giữa ngang */
    margin-bottom: 20px;
}

.category-tabs button {
    border: none;
    background: transparent;
    padding: 8px 15px;
    border-radius: 50px;
    cursor: pointer;
    font-size: 15px;
    color: #333;
    transition: all 0.3s ease;
}

.category-tabs button.active {
    background-color: #b71c1c; /* đỏ */
    color: white;
    font-weight: 500;
}
/* ===== Lưới sản phẩm ===== */
.product-group {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.image-container {
    width: 100%;
    background: #fff;
    padding: 10px;
}
.image-container img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* ===== Thông tin sản phẩm ===== */
.details {
    padding: 10px;
    width: 100%;
    text-align: center;
}
.details h3 {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin: 10px 0;
}
.key-specs {
    font-size: 14px;
    color: #000;
    line-height: 1.4;
    text-align: left;
    padding: 0 15px;
}
.price {
    font-size: 18px;
    font-weight: bold;
    color: #c62828;
    margin: 10px 0;
}

/* ===== Nút mua ngay ===== */
.shop-button {
    display: inline-block;
    background: #c62828;
    color: #fff;
    font-weight: bold;
    padding: 10px 25px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 16px;
    margin-bottom: 10px;
    transition: background 0.3s ease;
}
.shop-button:hover {
    background: #a82222;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
    .product-group {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 600px) {
    .product-group {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
function showCategory(category) {
    document.querySelectorAll(".product-group").forEach(g => g.style.display = "none");
    document.querySelector("." + category).style.display = "grid";

    document.querySelectorAll(".category-tabs button").forEach(btn => btn.classList.remove("active"));
    document.querySelector(`.category-tabs button[onclick="showCategory('${category}')"]`).classList.add("active");
}
document.addEventListener("DOMContentLoaded", () => {
    showCategory('vanphong');
});


</script>
<!-- WHY ROSA -->
<section class="why-rosa-section">
  <h2 class="why-rosa-title">Tại sao nên chọn ROSA</h2>

  <div class="why-rosa-grid">
    <!-- Card 1 -->
    <article class="why-rosa-card">
      <div class="why-rosa-icon">
        <!-- Shield SVG -->
        <svg viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 2l7 3v6c0 5.25-3.5 9.74-7 11-3.5-1.26-7-5.75-7-11V5l7-3zm0 2.18L7 5.82v5.18c0 4.1 2.67 7.74 5 8.94 2.33-1.2 5-4.84 5-8.94V5.82l-5-1.64zm4.2 5.7l-5.05 5.06-2.35-2.35 1.06-1.06 1.29 1.29 3.99-4 1.06 1.06z"/></svg>
      </div>
      <h3 class="why-rosa-card-title">Bảo hành 3 năm</h3>
      <div class="why-rosa-divider"></div>
      <p class="why-rosa-desc">An tâm sử dụng với chính sách bảo hành toàn diện suốt 36 tháng, hỗ trợ nhanh chóng toàn quốc.</p>
    </article>

    <!-- Card 2 -->
    <article class="why-rosa-card">
      <div class="why-rosa-icon">
        <!-- Chip SVG -->
        <svg viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M9 3V1h2v2h2V1h2v2h3a2 2 0 012 2v3h2v2h-2v2h2v2h-2v3a2 2 0 01-2 2h-3v2h-2v-2h-2v2H9v-2H6a2 2 0 01-2-2v-3H2v-2h2v-2H2V8h2V5a2 2 0 012-2h3zm-3 5v8h12V8H6zm2 2h8v4H8v-4z"/></svg>
      </div>
      <h3 class="why-rosa-card-title">Linh kiện chính hãng</h3>
      <div class="why-rosa-divider"></div>
      <p class="why-rosa-desc">An tâm sử dụng với chính sách bảo hành toàn diện suốt 36 tháng, hỗ trợ nhanh chóng toàn quốc.</p>
    </article>

    <!-- Card 3 -->
    <article class="why-rosa-card">
      <div class="why-rosa-icon">
        <!-- Graduation cap SVG -->
        <svg viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 3l10 5-10 5L2 8l10-5zm6 7.09V14c0 2.21-3.58 4-8 4s-8-1.79-8-4v-3.91l8 4 8-4z"/></svg>
      </div>
      <h3 class="why-rosa-card-title">Tích hợp khoá học</h3>
      <div class="why-rosa-divider"></div>
      <p class="why-rosa-desc">Tặng khoá học lập trình được chứng nhận bởi Đại học Hoa Sen, giúp bạn tự tin tạo lợi thế nghề nghiệp.</p>
    </article>

    <!-- Card 4 -->
    <article class="why-rosa-card">
      <div class="why-rosa-icon">
        <!-- AI text SVG -->
        <svg viewBox="0 0 64 24" width="48" height="48" fill="currentColor"><path d="M8.5 20L4 8h3l.9 2.6h4.2L13 8h3l-4.6 12h-2.9zm2-6.8H8.2l1.3 3.8 1-3.8zM28 20V8h3v12h-3zm0-14V3h3v3h-3zM37 20V8h4.8c2.9 0 4.7 1.6 4.7 4s-1.8 4-4.7 4H40v4h-3zm3-6h1.7c1.3 0 2-0.7 2-2s-0.7-2-2-2H40v4z"/></svg>
      </div>
      <h3 class="why-rosa-card-title">Đi kèm giải pháp AI</h3>
      <div class="why-rosa-divider"></div>
      <p class="why-rosa-desc">Tích hợp AI chatbot, AI chấm công và lưu trữ Nextcloud, tối ưu quản lý cho doanh nghiệp SMB.</p>
    </article>
  </div>
</section>

<style>
/* ---- isolated styles (won't clash) ---- */
.why-rosa-section{padding:48px 16px;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif}
.why-rosa-title{margin:0 auto 28px;font-size:32px;line-height:1.2;font-weight:800;color:#6b6b6b;text-align:center}
.why-rosa-grid{max-width:1000px;margin:0 auto;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:24px}
.why-rosa-card{background:#fff;border:1px solid #e8e8e8;border-radius:12px;padding:26px 28px;display:flex;flex-direction:column;align-items:flex-start}
.why-rosa-icon{color:#111;margin-bottom:12px}
.why-rosa-card-title{margin:4px 0 10px;font-size:22px;line-height:1.3;font-weight:800;color:#111}
.why-rosa-divider{width:100%;height:1px;background:#eee;margin:6px 0 12px;border-radius:1px}
.why-rosa-desc{margin:0;color:#666;font-size:14.5px;line-height:1.6;text-align:left}

/* responsive */
@media (max-width: 760px){.why-rosa-grid{grid-template-columns:1fr}}
</style>
