<?php require "header.php" ?>

<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

  <!-- Các dấu chấm -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../image/nengt.png" class="d-block w-100" alt="Banner 1" onclick="window.location.href='https://rosacomputer.vn/.php'">
        </div>
        <!-- <div class="carousel-item">
            <img src="../image/Backtoschool.jpg" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="../image/banner_sp_3.png" class="d-block w-100" alt="Banner 3">
        </div> -->
    </div>
</div>

<div class="course-card-section">
    <div class="course-card">
        <img class="course-card-bg" src="../new/moi1.png" alt="Thị giác máy tính">
        <div class="course-card-content">
            <div class="course-card-title">Sứ mệnh </div>
            <div class="course-card-desc">Khóa học giúp bạn hiểu cách sử dụng môn học trong lập trình và ứng dụng thực tế trong AI.</div>
        </div>
    </div>
    <div class="course-card ">
        <img class="course-card-bg" src="../new/python1.png" alt="Học máy">
        <div class="course-card-content">
            <div class="course-card-title">Tầm nhìn</div>
            <div class="course-card-desc">Tìm hiểu cách máy học từ dữ liệu. Hướng dẫn các thuật toán phổ biến như Linear Regression, Decision Trees, k-NN với ví dụ thực hành trực quan.</div>
        </div>
    </div>
</div>


<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../image/banner_sp_3.png" class="d-block w-100" alt="Banner 1">
    </div>
</div>


<style>
    /* COURSE CARDS */
.course-card-section {
    display: flex;
    justify-content: center;
    gap: 32px;
    margin: 40px 0 60px 0;
    flex-wrap: wrap;

}

.course-card {
    max-width: 1300px;
    position: relative;
    width: 320px;
    height: 400px;
    border-radius: 22px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 2px 16px 0 rgba(0, 0, 0, 0.08);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    transition: box-shadow 0.2s;
}

.course-card:hover {
    box-shadow: 0 6px 24px 0 rgba(32, 90, 177, 0.18);
}

.course-card-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
    filter: brightness(0.82) saturate(1.1);
    transition: filter 0.2s;
}

.course-card.dark .course-card-bg {
    filter: brightness(0.45) saturate(1.1);
}

.course-card-content {
    position: relative;
    z-index: 2;
    padding: 32px 24px 24px 24px;
    color: #222;
    /* display: flex; */
    flex-direction: column;
    flex: 1 1 auto;
    min-height: 0;
    justify-content: flex-end;
}

.course-card-title {
    font-size: 1.35rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #222;
    text-shadow: 0 2px 8px rgba(255, 255, 255, 0.12);
}

.course-card.dark .course-card-title {
    color: #fff;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
}

.course-card-desc {
    font-size: 1.01rem;
    color: #222;
    margin-bottom: 32px;
    text-shadow: 0 2px 8px rgba(255, 255, 255, 0.10);
}

.course-card.dark .course-card-desc {
    color: #f3f3f3;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
}

.course-card-btn {
    display: inline-block;
    background: rgba(32, 90, 177, 0.85);
    color: #fff;
    font-weight: 600;
    flex-direction: row;
    border: none;
    border-radius: 12px;
    padding: 10px 32px;
    font-size: 1.05rem;
    margin-top: 8px;
    cursor: not-allowed;
    box-shadow: 0 2px 8px 0 rgba(32, 90, 177, 0.08);
    transition: background 0.2s;
    text-align: center;
    opacity: 0.92;
}

.course-card-btn:active,
.course-card-btn:focus {
    outline: none;
}

.course-card-btn[disabled] {
    opacity: 0.7;
    cursor: not-allowed;
}

</style>

<?php require "footer.php" ?>