import "./bootstrap";

const modalOverlay = document.getElementById("modal-overlay");

document.addEventListener("DOMContentLoaded", function () {
    modalOverlay.addEventListener("click", (e) => {
        if (e.target == modalOverlay) {
            modal.classList.add("hidden");
            document.body.classList.remove("modal-open");
        }
    });
});
