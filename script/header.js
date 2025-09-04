// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {

    // Toggle main mobile menu
    const hamburgerContainer = document.querySelector('.hamburger_container');
    const hamburgerMenu = document.querySelector('.hamburger_menu');
    const hamburgerClose = document.querySelector('.hamburger_close');

    if (hamburgerContainer && hamburgerMenu) {
        hamburgerContainer.addEventListener('click', function () {
            hamburgerMenu.classList.add('show');
        });

        /* Additional CSS fixes for mobile menu */
    }

    if (hamburgerClose && hamburgerMenu) {
        hamburgerClose.addEventListener('click', function () {
            hamburgerMenu.classList.remove('show');
        });
    }

    // Toggle submenus on mobile only
    document.querySelectorAll('.hamburger_menu .submenu-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            const icon = this.querySelector('i');

            // Check if this submenu is already open
            const isOpen = submenu && submenu.classList.contains('show');

            // Close all submenus at the same level (siblings)
            const parentUl = this.closest('ul');
            if (parentUl) {
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
            }

            // Toggle the current submenu
            if (submenu) {
                submenu.classList.toggle('show');
                if (isOpen) {
                    if (icon) {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                } else {
                    if (icon) {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    }
                }
            }
        });
    });

    // Language selector script
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
                    const homeElement = document.getElementById("home");
                    const aboutElement = document.getElementById("about");
                    const productsElement = document.getElementById("products");

                    if (homeElement) homeElement.innerText = data[lang]["home"];
                    if (aboutElement) aboutElement.innerText = data[lang]["about"];
                    if (productsElement) productsElement.innerText = data[lang]["products"];
                })
                .catch(error => {
                    console.error('Error loading translations:', error);
                });
        }
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function (e) {
        if (hamburgerMenu && hamburgerMenu.classList.contains('show')) {
            if (!hamburgerMenu.contains(e.target) && !hamburgerContainer.contains(e.target)) {
                hamburgerMenu.classList.remove('show');
            }
        }
    });
});