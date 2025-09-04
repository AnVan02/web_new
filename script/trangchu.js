//=== banner ====
const images = document.querySelectorAll('.hero-section .hero-image');
let currentIndex = 0;

function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add('active');

    // tạo delay ngẫu nhiên từ 1 đến 5 giây
    const randomDelay = Math.floor(Math.random() * 2000) + 1000;
    setTimeout(showNextImage, randomDelay);
}

// chạy lần đầu
setTimeout(showNextImage, 1000);


// === Xử lý click các nút category ===
document.querySelectorAll('.faq-button').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        document.querySelectorAll('.faq-button').forEach(btn => {
            btn.classList.remove('active');
        });

        // Add active class to clicked button
        button.classList.add('active');

        // Get category from button
        const category = button.getAttribute('data-category');

        // Hide all FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });

        // Show FAQ items for selected category and show all answers
        document.querySelectorAll(`.faq-item[data-category="${category}"]`).forEach(item => {
            item.classList.add('active');
            // Hiển thị luôn câu trả lời
            const answer = item.querySelector('.faq-answer');
            if (answer) {
                answer.classList.add('show');
            }
        });

        // Hide all answers from other categories
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item.getAttribute('data-category') !== category) {
                const answer = item.querySelector('.faq-answer');
                if (answer) {
                    answer.classList.remove('show');
                }
            }
        });
    });
});



// ==== Xử lý click các câu hỏi để hiển thị/ẩn câu trả lời ===
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;

        // Toggle hiển thị câu trả lời
        if (answer.classList.contains('show')) {
            answer.classList.remove('show');
        } else {
            // Ẩn tất cả câu trả lời khác trong cùng category
            const currentCategory = question.closest('.faq-item').getAttribute('data-category');
            document.querySelectorAll(`.faq-item[data-category="${currentCategory}"] .faq-answer`).forEach(ans => {
                ans.classList.remove('show');
            });

            // Hiển thị câu trả lời hiện tại
            answer.classList.add('show');
        }
    });
});

// Khởi tạo: Hiển thị category đầu tiên (Tư vấn) khi trang load
document.addEventListener('DOMContentLoaded', () => {
    // Đảm bảo chỉ hiển thị items của category "tuvan" khi load trang
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item.getAttribute('data-category') === 'tuvan') {
            item.classList.add('active');
            // Hiển thị luôn câu trả lời khi load trang
            const answer = item.querySelector('.faq-answer');
            if (answer) {
                answer.classList.add('show');
            }
        } else {
            item.classList.remove('active');
        }
    });
});

function showCategory(category) {
    // Ẩn tất cả nhóm
    document.getElementById("vanphong").style.display = "none";
    document.getElementById("gaming").style.display = "none";
    document.getElementById("mini").style.display = "none";
    document.getElementById("ai").style.display = "none";

    // Hiện nhóm được chọn
    document.getElementById(category).style.display = "block";

    // Cuộn xuống phần sản phẩm để user thấy ngay
    document.getElementById(category).scrollIntoView({ behavior: "smooth" });
}
