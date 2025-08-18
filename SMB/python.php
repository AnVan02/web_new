<title>Pythonbasic</title>
<?php 
require_once 'header.php';
?>
<link rel="stylesheet" href="../new/style.css">
<div class="banner">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner position-relative"> <!-- Thêm position-relative để chứa phần tuyệt đối -->

                    <div class="carousel-item active">
                        <img src="../new/background python.png" class="img-fluid" alt="python" onclick="window.location.href='product.php#gaming'">
                    </div>

                    <div class="hero-text">
                        <button class="button-style">KHOÁ HỌC</button>
                        <h2>THỊ GIÁC MÁY TÍNH</h2>
                        <p>Khởi đầu hành trình chinh phục thế giới lập trinh </p>
                    </div>

                    <!-- Bạn có thể thêm nhiều carousel-item khác ở đây -->

                </div> <!-- .carousel-inner -->
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Các dấu chấm -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../image/background python.png" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="../image/python1.png" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="../image/python2.png" class="d-block w-100" alt="Banner 3">
        </div>
    </div>
</div>
   <div class="feature-section">
        <div class="feature-row">
            <div class="feature-text">
                <img src="RS x HS.png" alt="ROSA x Hoa Sen" class="feature-logo">
                <h2 class="feature-title">Bắt đầu dễ dàng và tự tin</h2>
                <p class="feature-desc">Khóa học này giúp bạn xây dựng nền tảng Python vững chắc. Nắm vững các khái niệm từ biến, vòng lặp đến hàm để tự tin viết những dòng code đầu tiên một cách dễ hiểu và hiệu quả.</p>
                <p class="feature-link">
                    <span><img class="arrow-icon" src="../new/icon1.png" ></span>
                    Được chứng nhận bởi Đại học Hoa Sen
                </p>
            </div>
            <div class="feature-img">
                <img src="../new/python1.png" alt="Python Coding">
            </div>
        </div>

        <div class="feature-row reverse">
            <div class="feature-text">
                <h2 class="feature-title">Biến ý tưởng thành hiện thực</h2>
                <p class="feature-desc">Khóa học này sẽ trao cho bạn trọn bộ công cụ cốt lõi để biến những ý tưởng thành hiện thực. Công cụ bạn sẽ nhận được bao gồm:</p>
                <ul class="feature-list">
                    <li>Câu lệnh rẽ nhánh</li>
                    <li>Vòng lặp vĩnh cửu (và hữu hạn)</li>
                    <li>Hàm - "Hộp đen" đa năng</li>
                </ul>
                <p class="feature-link">
                    <span><img class="arrow-icon" src="../new/icon2.png" ></span>
                    Khóa học miễn phí đi kèm khi mua máy ROSA
                </p>
            </div>
            <div class="feature-img">
                <img src="../new/python2.png" alt="Laptop Coding">
            </div>
        </div>

        <div class="feature-row">
            <div class="feature-text">
                <h2 class="feature-title">Mục tiêu khoá học</h2>
                <p class="feature-desc">Khóa học này giúp bạn xây dựng nền tảng Python vững chắc. Nắm vững các khái niệm từ biến, vòng lặp đến hàm để tự tin viết những dòng code đầu tiên một cách dễ hiểu và hiệu quả. Khóa học này giúp bạn xây dựng nền tảng Python vững chắc. Nắm vững các khái niệm từ biến, vòng lặp đến hàm để tự tin viết những dòng.</p>
                <p class="feature-link">
                    <span><img class="arrow-icon" src="../new/icon1.png" ></span>
                    Tự tin viết các chương trình Python cơ bản
                </p>
            </div>
            <div class="feature-img">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?w=500&h=300&fit=crop" alt="Python Coding">
            </div>
        </div>
    </div>

    <div class="course-section-title">Chương trình khóa học</div>
    <div class="accordion-container">
        <div class="accordion-item">
            <button class="accordion-header active">
                <span>Chương 1: Giới thiệu chung về Python</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content active">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Tổng quan về Python</li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Làm quen với Python</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Biến và các kiểu dữ liệu cơ bản</span>
                            <span class="accordion-estimate"><span class="icon"> <img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Toán tử trong Python</li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 1</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <span>Chương 2: Cấu trúc điều kiện, vòng lặp và hàm trong Python</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Cấu trúc điều kiện</li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Vòng lặp trong Python</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Try và except trong Python</span>
                            <span class="accordion-estimate"><span class="icon"><img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 2</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <span>Chương 3: Cấu trúc dữ liệu trong Python</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> List trong Python</li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Tuples trong Python</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Dictionary trong Python</span>
                            <span class="accordion-estimate"><span class="icon"><img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Set trong Python</li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 3</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <span>Chương 4: Module và Package</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Module</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Package</span>
                            <span class="accordion-estimate"><span class="icon"><img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 4</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <span>Chương 5: Pandas</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Series</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Dataframe</span>
                            <span class="accordion-estimate"><span class="icon"><img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 5</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                <span>Chương 6: Matplotlib</span>
                <svg class="accordion-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="accordion-content">
                <div class="accordion-body">
                    <ul class="accordion-list">
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Pyplot cơ bản</li>
                        <li class="li-estimate">
                            <span><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Lưu biểu đồ</span>
                            <span class="accordion-estimate"><span class="icon"><img src="../new/DH.png" alt="Python Coding"></span> Ước tính khoảng 3 ngày học</span>
                        </li>
                        <li><span class="icon"> <img src="../new/icon3.png" alt="Python Coding"></span> Bài tập chương 6</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');
            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const isActive = content.classList.contains('active');
                    
                    // Toggle accordion hiện tại
                    if (isActive) {
                        this.classList.remove('active');
                        content.classList.remove('active');
                    } else {
                        // Đóng tất cả accordion khác
                        accordionHeaders.forEach(otherHeader => {
                            const otherContent = otherHeader.nextElementSibling;
                            otherHeader.classList.remove('active');
                            otherContent.classList.remove('active');
                        });
                        
                        // Mở accordion hiện tại
                        this.classList.add('active');
                        content.classList.add('active');
                    }
                });
            });
        });
    </script>


    <div class="testimonial-section-title">Đánh giá từ học viên</div>
    <div class="testimonial-container">
        <div class="testimonial-card">
            <div class="testimonial-header">
                <img class="avatar" src="../new/Nam.jpg" alt="Lê Nhật Nam">
                <div class="name-date">
                    <div class="name">Anh Nhật Nam</div>
                    <div class="date">18:10 04/08/2025</div>
                </div>
            </div>
            <div class="content" sty>
                Lúc mua máy ROSA thấy có sẵn khóa học nên thử học luôn. Bài giảng dễ hiểu, có cả ví dụ thực tế. Học xong mình tự làm được tựa game đơn giản, thấy tự tin hẳn.
            </div>
        </div>
        <div class="testimonial-card">
            <div class="testimonial-header">
                <img class="avatar" src="../new/Quân.jpg" alt="Nam Nhật Lê">
                <div class="name-date">
                    <div class="name">Anh Quân</div>
                    <div class="date">9:10 05/08/2025</div>
                </div>
            </div>
            <div class="content" style="font-family: 'Montserrat'">
                Không nghĩ mua máy mà được tặng khóa học chất lượng vậy. Không cần tải gì thêm, mở máy ra học được liền. Tiết kiệm thời gian, học đâu làm đó.
            </div>
        </div>
        <div class="testimonial-card">
            <div class="testimonial-header">
                <img class="avatar" src="../new/An.jpg" alt="Lê Nam">
                <div class="name-date">
                    <div class="name">Chị An</div>
                    <div class="date">18:10 05/08/2025</div>
                </div>
            </div>
            <div class="content" style="font-family: 'Montserrat'">
                Mình rất ấn tượng với chất lượng khóa học. Nội dung được trình bày rõ ràng, dễ hiểu. Các bài tập thực hành giúp mình áp dụng kiến thức vào thực tế một cách hiệu quả.
                
            </div>
        </div>
        <div class="testimonial-card">
            <div class="testimonial-header">
                <img class="avatar" src="../new/Chị Nhi.jpg" alt="Nhật Nam Lê">
                <div class="name-date">
                    <div class="name">Chị Nhi</div>
                    <div class="date">19:10 04/08/2025</div>
                </div>
            </div>
            <div class="content" style="font-family: 'Montserrat'">
                Mình đã học qua nhiều khóa học online nhưng khóa này là tốt nhất. Nội dung đầy đủ, dễ hiểu, có video hướng dẫn chi tiết. Mình đã áp dụng kiến thức vào dự án thực tế và thấy hiệu quả rõ rệt.
            </div>
        </div>
    </div>

    <div style="display:flex; justify-content:center; margin: 48px 0 0 0;">
        <button style="font-weight:700; color:#FFFFFF; background:#205AB1; border:none; border-radius: 12px; padding: 14px 38px; font-size:1.1rem; box-shadow:0 2px 8px 0 rgba(32,90,177,0.08); cursor:pointer;">THAM GIA NGAY</button>
    </div>

    <div class="course-card-section">
          <div class="course-card dark">
            <img class="course-card-bg" src="../new/python1.png" alt="Học máy">
            <div class="course-card-content">
                <div class="course-card-title">Học máy</div>
                <div class="course-card-desc">Tìm hiểu cách máy học từ dữ liệu. Hướng dẫn các thuật toán phổ biến như Linear Regression, Decision Trees, k-NN với ví dụ thực hành trực quan.</div>
                <button class="course-card-btn" disabled>SẮP RA MẮT</button>
            </div>
        </div>
        <div class="course-card">
            <img class="course-card-bg" src="../new/moi1.png" alt="Thị giác máy tính">
            <div class="course-card-content">
                <div class="course-card-title">Mô hình ngôn ngữ lớn</div>
                <div class="course-card-desc">Khóa học giúp bạn hiểu cách sử dụng môn học trong lập trình và ứng dụng thực tế trong AI.</div>
                <button class="course-card-btn" disabled>SẮP RA MẮT</button>
            </div>
        </div>
    </div>

<?php require_once 'footer.php';?>