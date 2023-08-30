require("./bootstrap");
import "./clickedBody";
import "./modal";
import "./navbar";
import "./scroll";
import "./windowReload";
import "./sideModal";
import "./searchToggle";
import "./slider";
import "./chatbox";
import "./sideMenu";

const messages_el = document.getElementById("messages");
const message_input = document.getElementById("message-input");
const message_form = document.getElementById("message-form");

message_form.addEventListener("submit", function (e) {
    e.preventDefault();

    const options = {
        method: "post",
        url: "/sendmessage",
        data: {
            message: message_input.value,
        },
    };
    axios(options);
});

window.Echo.channel("chat").listen(".message", (e) => {
    messages_el.innerHTML += '<div class="messages">' + e.message + "</div>";
});
