import "./bootstrap";

const nav = document.getElementById("scroll-container");
const buttonUp = document.getElementById("buttonUp");
const packageSection = document.getElementById("package");
const sliderText = document.getElementById("sliderText");
const sliderContainer = document.getElementById("sliderContainer");
const sliderFloatText = document.getElementById("sliderFloatText");

function handleScroll() {
    const scrollPosition = window.scrollY || window.pageYOffset;
    const threshold = 200;
    const visible = 100;
    if (scrollPosition > visible) {
        nav.classList.remove("hidden");
        buttonUp.classList.remove("hidden");
        if (scrollPosition > threshold) {
            nav.style.opacity = "1";
            buttonUp.style.opacity = "1";
            nav.style.transform = "translateY(0)";
            packageSection.classList.add("section");
            setTimeout(() => {
                sliderText.classList.remove("opacity-0");
                sliderText.classList.add("sliderFadeInText");
                sliderFloatText.classList.add("sliderFloatUpAnimation");
                sliderContainer.classList.add("sliderUpAnimation");
            }, 500);
        } else {
            nav.style.opacity = "0";
            buttonUp.style.opacity = "0";
            nav.style.transform = "translateY(-100%)";
        }
    } else {
        nav.classList.add("hidden");
        buttonUp.classList.add("hidden");
    }
}

window.addEventListener("scroll", handleScroll);
buttonUp.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
