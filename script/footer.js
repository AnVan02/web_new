//  chatbot 
function showChatbot() {
    const popup = document.getElementById('chatbot-popup');
    popup.style.display = 'block';
    popup.style.zIndex = '999999999';
    popup.classList.add('show');
}

// Sửa onclick của chatbot icon
document.querySelector('.chabot_main img').onclick = function () {
    showChatbot();
}


function toggleChatbotSize() {
    const popup = document.getElementById('chatbot-popup');
    if (popup.classList.contains('fullscreen')) {
        popup.style.width = '90vw';
        popup.style.height = '80vh';
        popup.classList.remove('fullscreen');
    } else {
        popup.style.width = '100vw';
        popup.style.height = '100vh';
        popup.classList.add('fullscreen');
    }
}


(function () {
    const originalUrl = window.location.href;

    // Hàm mở popup
    function openPopup() {
        const popup = document.getElementById("rosaPopupForm");
        const overlay = document.getElementById("rosaOverlay");
        if (popup && overlay) {
            popup.style.display = "block";
            overlay.style.display = "block";
            if (!window.location.search.includes("?popup=open")) {
                const newUrl = originalUrl.includes("?")
                    ? `${originalUrl}&popup=open`
                    : `${originalUrl}?popup=open`;
                window.history.pushState({ popup: true }, "Đăng ký", newUrl);
            }
        }
    }

    // Hàm đóng popup
    function closePopup() {
        const popup = document.getElementById("rosaPopupForm");
        const overlay = document.getElementById("rosaOverlay");
        if (popup && overlay) {
            popup.style.display = "none";
            overlay.style.display = "none";
            window.history.pushState({ popup: false }, "Trang chủ", originalUrl);
        }
    }

    // Khi nhấn nút "ĐĂNG KÝ"
    const openPopupBtn = document.getElementById("rosaOpenPopup");
    if (openPopupBtn) {
        openPopupBtn.addEventListener("click", function () {
            const email = document.getElementById("rosaEmailInput").value.trim();
            if (email === "") {
                alert("⚠ Vui lòng nhập email trước!");
                return;
            }
            openPopup();
        });
    }

    // Khi nhấn nút "X" hoặc "Đóng"
    const closePopupBtn = document.getElementById("rosaClosePopup");
    const closePopupBtnAlt = document.getElementById("rosaClosePopupBtn");
    if (closePopupBtn) {
        closePopupBtn.addEventListener("click", closePopup);
    }
    if (closePopupBtnAlt) {
        closePopupBtnAlt.addEventListener("click", closePopup);
    }

    // Khi nhấn nút "Gửi"
    const submitFormBtn = document.getElementById("rosaSubmitForm");
    if (submitFormBtn) {
        submitFormBtn.addEventListener("click", function () {
            const email = document.getElementById("rosaEmailInput").value.trim();
            const name = document.getElementById("rosaNameInput").value.trim();
            const phone = document.getElementById("rosaPhoneInput").value.trim();
            const messageBox = document.getElementById("rosaMessageBox");

            // Validation (giữ nguyên code của bạn)
            if (name === "" || !/^[A-Za-zÀ-Ỹà-ỹ\s]+$/.test(name) || phone === "" || !/^[0-9]{9,11}$/.test(phone)) {
                // Validation logic...
                return;
            }

            const formData = new FormData();
            formData.append("email", email);
            formData.append("name", name);
            formData.append("phone", phone);

            console.log("Sending data:", { email, name, phone });
            fetch("test_mail/send_email.php", { // Sửa đường dẫn nếu cần
                method: "POST",
                body: formData
            })
                .then(response => {
                    if (!response.ok) throw new Error(`Server error: ${response.status}`);
                    return response.text();
                })
                .then(data => {
                    console.log("Response:", data);
                    messageBox.style.display = "block";
                    messageBox.innerHTML = data.includes("✅")
                        ? `<span style="color: green;">${data}</span>`
                        : `<span style="color: red;">${data}</span>`;
                    if (data.includes("✅")) {
                        closePopup();
                        document.getElementById("rosaSubscribeForm").reset();
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    messageBox.style.display = "block";
                    messageBox.innerHTML = `<span style="color: red;">❌ Lỗi: ${error.message}</span>`;
                });
        });
        // Kiểm tra URL ngay khi mã chạy
        (function checkPopupOnLoad() {
            const currentUrl = window.location.href;
            if (currentUrl.includes("?popup=open")) {
                openPopup();
            }
        })();

        // Xử lý nút back/forward của trình duyệt
        window.addEventListener("popstate", function (event) {
            const currentUrl = window.location.href;
            if (currentUrl.includes("?popup=open")) {
                openPopup();
            } else {
                closePopup();
            }
        });
    }
})();


document.addEventListener("DOMContentLoaded", function () {
    const newsletterForm = document.querySelector(".newsletter-form");
    const rosaPopupForm = document.getElementById("rosaPopupForm");
    const rosaOverlay = document.getElementById("rosaOverlay");
    const rosaClosePopup = document.getElementById("rosaClosePopup");
    const rosaClosePopupBtn = document.getElementById("rosaClosePopupBtn");

    // Khi submit form thì hiện popup
    newsletterForm.addEventListener("submit", function (e) {
        e.preventDefault(); // không reload trang
        rosaPopupForm.style.display = "block";
        rosaOverlay.style.display = "block";
    });

    // Đóng popup bằng nút X
    rosaClosePopup.addEventListener("click", function () {
        rosaPopupForm.style.display = "none";
        rosaOverlay.style.display = "none";
    });

    // Đóng popup bằng nút Đóng
    rosaClosePopupBtn.addEventListener("click", function () {
        rosaPopupForm.style.display = "none";
        rosaOverlay.style.display = "none";
    });

    // Đóng popup khi bấm ra ngoài overlay
    rosaOverlay.addEventListener("click", function () {
        rosaPopupForm.style.display = "none";
        rosaOverlay.style.display = "none";
    });
});

// gửi email đăng ký nhận tin tức
document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.getElementById("rosaEmailInput");
    const openPopupBtn = document.getElementById("rosaOpenPopup");
    const popup = document.getElementById("rosaPopupForm");
    const overlay = document.getElementById("rosaOverlay");
    const closePopupBtn = document.getElementById("rosaClosePopup");
    const closePopupBtnAlt = document.getElementById("rosaClosePopupBtn");
    const submitBtn = document.getElementById("rosaSubmitForm");
    const messageBox = document.getElementById("rosaMessageBox");

    function openPopup() {
        popup.style.display = "block";
        overlay.style.display = "block";
    }
    function closePopup() {
        popup.style.display = "none";
        overlay.style.display = "none";
    }

    openPopupBtn.addEventListener("click", function () {
        if (emailInput.value.trim() === "") {
            alert("⚠ Vui lòng nhập email trước!");
            return;
        }
        openPopup();
    });

    closePopupBtn.addEventListener("click", closePopup);
    closePopupBtnAlt.addEventListener("click", closePopup);
    overlay.addEventListener("click", closePopup);

    submitBtn.addEventListener("click", function () {
        const email = emailInput.value.trim();
        const name = document.getElementById("rosaNameInput").value.trim();
        const phone = document.getElementById("rosaPhoneInput").value.trim();

        if (name === "" || phone === "") {
            alert("⚠ Vui lòng nhập đầy đủ thông tin!");
            return;
        }

        const formData = new FormData();
        formData.append("email", email);
        formData.append("name", name);
        formData.append("phone", phone);

        fetch("send_email.php", { // ⚠ Đường dẫn đến file PHP xử lý gửi mail
            method: "POST",
            body: formData
        })
            .then(res => res.text())
            .then(data => {
                messageBox.innerHTML = data;
                if (data.includes("✅")) {
                    document.getElementById("rosaSubscribeForm").reset();
                    closePopup();
                }
            })
            .catch(err => {
                messageBox.innerHTML = "❌ Lỗi: " + err.message;
            });
    });
});
