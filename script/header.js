// Toggle main mobile menu
document.querySelector('.hamburger_container').addEventListener('click', function () {
    document.querySelector('.hamburger_menu').classList.add('show');
});
document.querySelector('.hamburger_close').addEventListener('click', function () {
    document.querySelector('.hamburger_menu').classList.remove('show');
});

// Toggle submenus on mobile only
document.querySelectorAll('.hamburger_menu .submenu-toggle').forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        const icon = this.querySelector('i');

        // Check if this submenu is already open
        const isOpen = submenu.classList.contains('show');

        // Close all submenus at the same level (siblings)
        const parentUl = this.closest('ul');
        parentUl.querySelectorAll('.submenu.show').forEach(function (siblingSubmenu) {
            if (siblingSubmenu !== submenu) {
                siblingSubmenu.classList.remove('show');
                const siblingToggle = siblingSubmenu.previousElementSibling.querySelector('i');
                if (siblingToggle) {
                    siblingToggle.classList.remove('fa-chevron-up');
                    siblingToggle.classList.add('fa-chevron-down');
                }
            }
        });

        // Toggle the current submenu
        submenu.classList.toggle('show');
        if (isOpen) {
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        } else {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        }
    });
});

// Language selector script (unchanged)
document.addEventListener("DOMContentLoaded", function () {
    const languageSelect = document.getElementById("languageSelect");
    if (languageSelect) {
        let currentLang = localStorage.getItem("lang") || "vi";
        languageSelect.value = currentLang;
        loadLanguage(currentLang);

        languageSelect.addEventListener("change", function () {
            let selectedLang = this.value;
            localStorage.setItem("lang", selectedLang);
            loadLanguage(selectedLang);
        });

        function loadLanguage(lang) {
            fetch("translations.json")
                .then(response => response.json())
                .then(data => {
                    document.getElementById("home").innerText = data[lang]["home"];
                    document.getElementById("about").innerText = data[lang]["about"];
                    document.getElementById("products").innerText = data[lang]["products"];
                });
        }
    }
});