import "./bootstrap";
const toggleChatButton = document.getElementById("toggleChatButton");
const toggleChatBox = document.getElementById("toggleChat");

toggleChatButton.addEventListener("click", () => {
    toggleChatBox.classList.toggle("slide-in");
    toggleChatBox.classList.toggle("slide-out");
    toggleChatBox.classList.toggle("hidden");
});
