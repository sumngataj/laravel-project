import "./bootstrap";

const toggleButton = document.getElementById("toggleMenubtn");
const menu = document.getElementById("menu");

toggleButton.addEventListener("click", () => {
    menu.classList.toggle("open");
});
