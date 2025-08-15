function showCategory(category) {
    document.querySelectorAll(".product-group").forEach(g => g.style.display = "none");
    document.querySelector("." + category).style.display = "grid";

    document.querySelectorAll(".category-tabs button").forEach(btn => btn.classList.remove("active"));
    document.querySelector(`.category-tabs button[onclick="showCategory('${category}')"]`).classList.add("active");
}

document.addEventListener("DOMContentLoaded", () => {
    showCategory('vanphong');
});