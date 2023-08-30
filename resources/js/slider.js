import "./bootstrap";

let sliderContainer = document.getElementById("sliderContainer");
let slider = document.getElementById("slider");
let cards = slider.getElementsByTagName("li");

let elementsToShow = 3;
if (document.body.clientWidth < 1000) {
    elementsToShow = 1;
} else if (document.body.clientWidth < 1500) {
    elementsToShow = 2;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + "px";
slider.style.transition = "transform 1s";

const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");

for (let index = 0; index < cards.length; index++) {
    const element = cards[index];
    element.style.width = cardWidth + "px";
}

let currentIndex = 0;

function prev() {
    if (currentIndex > 0) {
        currentIndex--;
        const translateX = -currentIndex * cardWidth;
        slider.style.transform = `translateX(${translateX}px)`;
    }
}

function next() {
    if (currentIndex < cards.length - elementsToShow) {
        currentIndex++;
        const translateX = -currentIndex * cardWidth;
        slider.style.transform = `translateX(${translateX}px)`;
    }
}

nextButton.addEventListener("click", next);
prevButton.addEventListener("click", prev);
