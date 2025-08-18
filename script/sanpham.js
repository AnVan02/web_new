function showCategory(category) {
    document.querySelectorAll(".product-group").forEach(g => g.style.display = "none");
    document.querySelector("." + category).style.display = "grid";

    document.querySelectorAll(".category-tabs button").forEach(btn => btn.classList.remove("active"));
    document.querySelector(`.category-tabs button[onclick="showCategory('${category}')"]`).classList.add("active");
}

document.addEventListener("DOMContentLoaded", () => {
    showCategory('vanphong');
});

// banner
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
