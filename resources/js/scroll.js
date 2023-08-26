import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        const scrollElement = document.getElementById("scroll-container");
        if (window.scrollY > 20) {
            scrollElement.classList.add("shadow-md");
        } else {
            scrollElement.classList.remove("shadow-md");
        }
    });
});
