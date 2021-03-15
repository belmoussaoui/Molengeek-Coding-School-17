import Slider from "./slider.js";

const sliders = document.querySelectorAll(".slider");
for (const slider of sliders) {
    new Slider(slider);
}
