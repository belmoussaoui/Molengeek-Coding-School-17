let slider = document.querySelector(".slider-inner");
let items = document.querySelectorAll(".slider-item");

let index = 0;
let indicators = [];
createIndicators();

function createIndicators() {
    let parent = document.querySelector(".slider-indicators");
    for (let i = 0; i < items.length; i++) {
        let li = document.createElement("li");
        parent.appendChild(li);
        li.addEventListener("click", onIndicator);
        indicators.push(li);
    }
    toogleActive();
}

function onIndicator(e) {
    toogleActive();
    index = indicators.indexOf(e.target);
    gotoItem();
}

function toogleActive() {
    indicators[index].classList.toggle("active");
}

function gotoItem() {
    let width = parseFloat(window.getComputedStyle(items[index]).flexBasis);
    slider.style.transform = `translate3d(${-width * index}%, 0, 0)`;
    toogleActive();
}

// setInterval(() => {
//     toogleActive();
//     index = (index + 1) % indicators.length;
//     gotoItem();
// }, 5000);
