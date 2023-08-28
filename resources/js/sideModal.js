import "./bootstrap";

const toggleDiv = document.getElementById("toggle-div");
const toggleButton = document.getElementById("toggle-button");
const overlay = document.getElementById("overlay");
const closeButton = document.getElementById("close-btn");

function toggleDivVisibility() {
    const isVisible = toggleDiv.style.transform === "translateX(0px)";
    toggleDiv.style.transform = isVisible
        ? "translateX(100%)"
        : "translateX(0px)";

    overlay.style.display = isVisible ? "none" : "block";
}

toggleButton.addEventListener("click", toggleDivVisibility);
closeButton.addEventListener("click", toggleDivVisibility);
overlay.addEventListener("click", toggleDivVisibility);
