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

