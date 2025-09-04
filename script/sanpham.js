

document.addEventListener("DOMContentLoaded", () => {
    // Nếu có anchor trên URL thì show đúng tab
    const hash = window.location.hash.replace('#', '');
    if (['vanphong', 'gaming', 'mini', 'ai'].includes(hash)) {
        showCategory(hash);
    } else {
        showCategory('vanphong');
    }
});

// banner
const images = document.querySelectorAll('.hero-section .hero-image');
let currentIndex = 0;

function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add('active');

    // tạo delay ngẫu nhiên từ 1 đến 5 giây
    const randomDelay = Math.floor(Math.random() * 4000) + 1000;

    setTimeout(showNextImage, randomDelay);
}

// chạy lần đầu
setTimeout(showNextImage, 1000);


function showCategory(category) {
    // Ẩn tất cả nhóm
    document.getElementById("vanphong").style.display = "none";
    document.getElementById("gaming").style.display = "none";
    document.getElementById("mini").style.display = "none";
    document.getElementById("ai").style.display = "none";

    // Bỏ active ở tất cả nút
    document.querySelectorAll(".category-tabs button").forEach(btn => {
        btn.classList.remove("active");
    });

    // Hiện nhóm được chọn
    document.getElementById(category).style.display = "block";

    // Thêm active cho nút được chọn
    document.getElementById("btn-" + category).classList.add("active");
}


