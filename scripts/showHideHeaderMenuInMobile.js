"use strict";
(function () {
    document.addEventListener("DOMContentLoaded", ready);

    function ready() {
        let menu = document.getElementById("menu-mobile")
        let menuShowClick = document.getElementById("main-navigation-mobile-open");
        let menuHideClick = document.getElementById("main-navigation-mobile-close");
        if (menuShowClick) {
            menuShowClick.addEventListener("click", function () {
                menu.style.display = 'block';
            });
        }
        if (menuHideClick) {
            menuHideClick.addEventListener("click", function () {
                menu.style.display = 'none';
            });
        }
    }


})();


