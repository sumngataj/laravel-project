import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("resize", function () {
        const width = window.innerWidth;
        const logo = document.querySelector("#logo");
        const logoContainer = document.querySelector("#logo-container");
        const links = document.querySelector("#nav-links");
        const searchBtn = document.querySelector("#searchBtn");
        const loginBtn = document.querySelector("#loginBtn");
        const searchIcon = document.querySelector("#icon-open-modal");
        const burgerMenu = document.querySelector("#mobile-menu-button");

        console.log(width);
        if (width < 1030) {
            links.classList.add("hidden");
            searchBtn.classList.add("w-full");
            loginBtn.classList.add("hidden");
            burgerMenu.classList.remove("hidden");
            logoContainer.classList.remove("justify-center");
            logoContainer.classList.remove("items-center");
        } else if (width < 690) {
            searchBtn.classList.add("hidden");
            searchIcon.classList.remove("hidden");
        } else {
            logo.classList.remove("hidden");
            links.classList.remove("hidden");
            loginBtn.classList.remove("hidden");
            searchBtn.classList.remove("hidden");
            searchIcon.classList.add("hidden");
            burgerMenu.classList.add("hidden");
            logoContainer.classList.add("justify-center");
            logoContainer.classList.add("items-center");
        }
    });
});
