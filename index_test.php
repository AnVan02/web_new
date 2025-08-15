<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Carousel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .carousel-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .carousel-slides {
            display: flex;
            width: 500%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 20%;
            height: 100%;
            position: relative;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Navigation Buttons */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
            z-index: 10;
        }

        .nav-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev-btn {
            left: 20px;
        }

        .next-btn {
            right: 20px;
        }

        /* Dots Indicator */
        .dots-container {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .dot.active {
            background: white;
        }



        /* Placeholder styling for demo images */
        .placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .slide:nth-child(1) .placeholder { background: linear-gradient(45deg, #ff6b6b, #4ecdc4); }
        .slide:nth-child(2) .placeholder { background: linear-gradient(45deg, #45b7d1, #96ceb4); }
        .slide:nth-child(3) .placeholder { background: linear-gradient(45deg, #feca57, #ff9ff3); }
        .slide:nth-child(4) .placeholder { background: linear-gradient(45deg, #54a0ff, #5f27cd); }
        .slide:nth-child(5) .placeholder { background: linear-gradient(45deg, #00d2d3, #54a0ff); }

        /* Responsive */
        @media (max-width: 768px) {
            .banner {
                height: 250px;
            }
            
            .nav-btn {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .prev-btn {
                left: 10px;
            }
            
            .next-btn {
                right: 10px;
            }

        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="carousel-container">
            <div class="carousel-slides" id="carouselSlides">
                <!-- Slide 1 -->
                <div class="slide">
                    <div class="placeholder">Banner 1</div>
                    <!-- Thay thế bằng: <img src="../image/banner_sp_1.png" alt="Banner 1" class="hero-image"> -->
                </div>
                
                <!-- Slide 2 -->
                <div class="slide">
                    <div class="placeholder">Banner 2</div>
                    <!-- Thay thế bằng: <img src="../image/banner_sp_2.png" alt="Banner 2" class="hero-image"> -->
                </div>
                
                <!-- Slide 3 -->
                <div class="slide">
                    <div class="placeholder">Banner 3</div>
                    <!-- Thay thế bằng: <img src="../image/banner_sp_3.png" alt="Banner 3" class="hero-image"> -->
                </div>
                
                <!-- Slide 4 -->
                <div class="slide">
                    <div class="placeholder">Banner 4</div>
                    <!-- Thay thế bằng: <img src="../image/banner_sp_4.png" alt="Banner 4" class="hero-image"> -->
                </div>
                
                <!-- Slide 5 -->
                <div class="slide">
                    <div class="placeholder">Banner 5</div>
                    <!-- Thay thế bằng: <img src="../image/banner_sp_5.png" alt="Banner 5" class="hero-image"> -->
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="nav-btn prev-btn" onclick="prevSlide()">❮</button>
            <button class="nav-btn next-btn" onclick="nextSlide()">❯</button>



            <!-- Dots Indicator -->
            <div class="dots-container" id="dotsContainer">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div>

    <script>
        let currentSlideIndex = 0;
        let totalSlides = 5;
        let autoplayInterval;
        let isAutoplay = true;

        // Initialize carousel
        function initCarousel() {
            showSlide(currentSlideIndex);
            startAutoplay();
        }

        // Show specific slide
        function showSlide(index) {
            const slides = document.getElementById('carouselSlides');
            const dots = document.querySelectorAll('.dot');
            
            // Ensure index is within bounds
            if (index >= totalSlides) {
                currentSlideIndex = 0;
            } else if (index < 0) {
                currentSlideIndex = totalSlides - 1;
            } else {
                currentSlideIndex = index;
            }
            
            // Move slides
            const translateX = -currentSlideIndex * 20; // 20% per slide
            slides.style.transform = `translateX(${translateX}%)`;
            
            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentSlideIndex);
            });
        }

        // Next slide
        function nextSlide() {
            showSlide(currentSlideIndex + 1);
        }

        // Previous slide
        function prevSlide() {
            showSlide(currentSlideIndex - 1);
        }

        // Go to specific slide
        function currentSlide(index) {
            showSlide(index - 1);
        }

        // Start autoplay
        function startAutoplay() {
            if (isAutoplay) {
                autoplayInterval = setInterval(nextSlide, 4000); // 4 seconds
            }
        }

        // Stop autoplay
        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        // Toggle autoplay
        function toggleAutoplay() {
            if (isAutoplay) {
                stopAutoplay();
                isAutoplay = false;
            } else {
                isAutoplay = true;
                startAutoplay();
            }
        }

        // Reset autoplay
        function resetAutoplay() {
            stopAutoplay();
            currentSlideIndex = 0;
            showSlide(0);
            if (isAutoplay) {
                startAutoplay();
            }
        }

        // Pause autoplay on hover
        document.querySelector('.banner').addEventListener('mouseenter', () => {
            if (isAutoplay) stopAutoplay();
        });

        document.querySelector('.banner').addEventListener('mouseleave', () => {
            if (isAutoplay) startAutoplay();
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });

        // Touch/swipe support
        let startX = 0;
        let endX = 0;

        document.querySelector('.banner').addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        document.querySelector('.banner').addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const threshold = 50; // minimum swipe distance
            const diff = startX - endX;
            
            if (Math.abs(diff) > threshold) {
                if (diff > 0) {
                    nextSlide(); // swipe left -> next
                } else {
                    prevSlide(); // swipe right -> previous
                }
            }
        }

        // Initialize when page loads
        window.addEventListener('load', initCarousel);
    </script>
</body>
</html>