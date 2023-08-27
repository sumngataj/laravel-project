const openModalButton = document.getElementById("open-modal");
const closeModalButton = document.getElementById("close-modal");
const modal = document.getElementById("modal");

openModalButton.addEventListener("click", () => {
    modal.classList.remove("hidden");
    document.body.classList.add("modal-open");
});
