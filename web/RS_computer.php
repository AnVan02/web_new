<?php require "../header.php" ?>
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
         <!-- Các dấu chấm -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/CTTH.png" class="d-block w-100" alt="Banner 1">
            </div>
            <!-- <div class="carousel-item">
                <img src="../image/Backtoschool.jpg" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="../image/banner_sp_3.png" class="d-block w-100" alt="Banner 3">
            </div> -->
        </div>
    </div>
    
<section class="why-choose-section">
    <div class="container">
        <h2></h2><br>
        <p class="description">
            <p>
                Trong căn phòng nhỏ của gia đình, nơi luôn ngập tràn máy tính, bo mạch và thiết bị công nghệ, cậu bé <a style="font-weight: bold; color:#cf0000ff">Nguyễn Minh Tuấn </a>  đã sớm nuôi dưỡng giấc mơ 
                chinh phục thế giới công nghệ. Cha anh,người sáng lập và điều hành <a style="font-weight: bold; color:#cf0000ff "> Viết Sơn JSC </a>– một trong những nhà phân phối thiết bị máy tính hàng đầu Việt Nam – chính là người thắp lên ngọn lửa đam mê ấy.
                    
                </p>

            <p><a style="font-weight: bold; color:#cf0000ff">
                Nguyễn Minh Tuấn </a> lớn lên giữa những câu chuyện kinh doanh, những buổi trao đổi sản phẩm với đối tác, cùng niềm tin bền bỉ rằng “công nghệ sẽ thay đổi cách con người làm việc, kết nối và sáng tạo”.
                Từ nhỏ, anh đã được tiếp cận với những khái niệm tưởng chừng xa vời như hệ thống quản trị dữ liệu, lưu trữ đám mây hay trí tuệ nhân tạo. Điều bắt đầu từ sự tò mò đã dần trở thành mục tiêu và lý tưởng sống.
            </p>

            <p>Hành trình học tập và làm việc đưa anh đến nhiều quốc gia, từ Canada đến Mỹ, nơi anh nghiên cứu và triển khai các giải pháp robot, trí tuệ nhân tạo và điều khiển thông minh. Mỗi dự án, mỗi sản phẩm mà anh tham gia đều củng cố niềm tin: doanh nghiệp Việt hoàn toàn có thể làm chủ những giải pháp công nghệ tiên tiến ngang tầm quốc tế, nếu có chiến lược đúng đắn và sự kiên định theo đuổi.</p>
            
                <h2 >TỪ GIẤC MƠ ĐẾN SỨ MỆNH</h2>

                <img src="../image/CEO_AnhTuân.jpg" class="d-block w-100" alt="Banner 1"><br>

            <p>Trở về Việt Nam, <a style="font-weight: bold; color:#cf0000ff">Nguyễn Minh Tuấn </a>cùng cha khởi xướng một hành trình mới với việc thành lập  <p><a style="font-weight: bold; color:#cf0000ff"> ROSA Computer </a>. Trên cương vị Giám đốc, anh không chỉ định vị ROSA như một thương hiệu máy tính bền bỉ và mạnh mẽ, mà còn phát triển thành một hệ sinh thái công nghệ toàn diện. Từ phần cứng tối ưu cho doanh nghiệp, phần mềm quản trị, chatbot AI hỗ trợ bán hàng 24/7 đến hệ thống lưu trữ đám mây Nextcloud Server, mỗi giải pháp đều được thiết kế nhằm nâng cao hiệu quả vận hành và thúc đẩy doanh nghiệp Việt bứt phá trong kỷ nguyên số.</p>

            <p>Với Nguyễn Minh Tuấn, công nghệ không chỉ là sản phẩm, mà còn là cây cầu đưa doanh nghiệp đến tương lai. Anh tin rằng một thương hiệu Việt hoàn toàn có thể sánh vai cùng các tên tuổi lớn toàn cầu, miễn là có khát vọng, sự tận tâm và tầm nhìn dài hạn. </p>

            <p>Ngày nay, <a style="font-weight: bold; color:#cf0000ff"> ROSA Computer </a>không chỉ là niềm tự hào của gia đình <a style="font-weight: bold; color:#cf0000ff"> Viết Sơn JSC </a>, mà còn là minh chứng sống động cho tinh thần dám nghĩ dám làm, cho khát vọng chinh phục công nghệ và cho sứ mệnh đồng hành cùng hàng ngàn doanh nghiệp Việt trên con đường chuyển đổi số. Mỗi chiếc máy tính, mỗi giải pháp phần mềm ROSA mang đến thị trường đều hàm chứa một cam kết: giúp doanh nghiệp Việt không chỉ theo kịp, mà còn tiên phong dẫn dắt xu thế công nghệ. </p>
        </p>
    </div>
</section>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat';
    line-height: 1.7;
    color: #333;
    background: #f5f5f5;
    font-size:18px;
}



/* Tùy chỉnh dấu chấm banner */
.carousel-indicators [data-bs-target] {
    width: 5px;              /* 👈 tăng kích thước */
    height: 5px;             /* 👈 tăng kích thước */
    border-radius: 50%;       /* tròn */
    background-color: rgba(255, 255, 255, 0.5);
    margin: 0 6px;            /* khoảng cách giữa các chấm */
    border: none;
}

.carousel-indicators .active {
    background-color: #cf0000ff; /* màu chấm active */
}


/* banner nên */
.target-section .container {
    max-width: 100%;
    padding: 0;
}

.target-image {
    width: 100%;
}

.target-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* ===== HEADER & BANNER ======= */

.banner, .row, .hero-section {
    width: 100%;
    height: auto;
    overflow: visible;
}
.hero-image {
    width: 100%;
    height: auto;
    display: block;
}

/*  ====== phân trang ====== */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}


.description {
    font-size: 25px;
    line-height: 1.8;
    color: #000000;
    max-width: 1000px;
    margin-bottom: 80px;
    margin: 0 auto;
    padding: 0 20px;
}


section h2 {
    text-align: center;
    font-size: 30px;
    font-weight: 700;
    color: #333;
    margin-top: 80px;    /* khoản cách trên the h2*/
    margin-bottom: 60px;
    letter-spacing: 1px;
}



</style>
    
    

<?php require "../footer.php"?>