import "./bootstrap";
const toggleSide = document.getElementById("toggle-menu");
const toggleMenu = document.getElementById("menuBtn");
const overlayMenu = document.getElementById("overlay-menu");

function toggleSideVisibility() {
    const isMenu = toggleSide.style.transform === "translateX(0px)";
    toggleSide.style.transform = isMenu
        ? "translateX(-100%)"
        : "translateX(0px)";

    overlayMenu.style.display = isMenu ? "none" : "block";
}
toggleMenu.addEventListener("click", toggleSideVisibility);
overlayMenu.addEventListener("click", toggleSideVisibility);
