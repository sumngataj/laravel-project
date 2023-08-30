import "./bootstrap";

const toggleButton = document.getElementById("toggleButton");
const toggleDiv = document.getElementById("toggleDiv");
const toggleClose = document.getElementById("toggleClose");
const toggleExit = document.getElementById("toggle-exit");

toggleButton.addEventListener("click", () => {
    toggleDiv.classList.toggle("slide-in");
    toggleDiv.classList.toggle("slide-out");
    toggleDiv.classList.toggle("hidden");
    toggleButton.classList.add("hidden");
    toggleClose.classList.remove("hidden");
    document.body.style.overflow = "hidden";
});
toggleClose.addEventListener("click", () => {
    toggleDiv.classList.toggle("slide-in");
    toggleDiv.classList.toggle("slide-out");
    toggleDiv.classList.toggle("hidden");
    toggleButton.classList.remove("hidden");
    toggleClose.classList.add("hidden");
    document.body.style.overflow = "auto";
});
toggleExit.addEventListener("click", () => {
    toggleDiv.classList.toggle("slide-in");
    toggleDiv.classList.toggle("slide-out");
    toggleDiv.classList.toggle("hidden");
    toggleButton.classList.remove("hidden");
    toggleClose.classList.add("hidden");
    document.body.style.overflow = "auto";
});
