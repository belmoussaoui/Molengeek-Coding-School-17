let slider = document.querySelector(".slider-inner");
let items = document.querySelectorAll(".slider-item");

let index = 0;
let indicators = [];
createIndicators();

function createIndicators() {
    let parent = document.querySelector(".slider-indicators");
    for (let i = 0; i < items.length - (numItems() - 1); i++) {
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
    if (index >= indicators.length) return;
    indicators[index].classList.toggle("active");
}

function numItems() {
    return Math.round(
        100 / parseFloat(window.getComputedStyle(items[index]).flexBasis)
    );
}

function gotoItem() {
    let width = parseFloat(window.getComputedStyle(items[index]).flexBasis);
    slider.style.transform = `translate3d(${-width * index}%, 0, 0)`;
    toogleActive();
}

window.addEventListener("resize", onResize);

function onResize() {
    for (const li of indicators) {
        li.remove();
    }
    indicators = [];
    createIndicators();
    gotoItem(index);
    index = Math.max(Math.min(indicators.length - 1, index), 0);
    gotoItem(index);
}

let nav = document.querySelector("nav");
let distance = 167;
window.addEventListener("scroll", (e) => {
    if (window.scrollY > distance) {
        nav.classList.add("nav-fixed");
    } else {
        nav.classList.remove("nav-fixed");
    }
});

let mode = document.querySelectorAll(".btn-toggle");
mode[0].addEventListener("click", () => {
    document.body.classList.remove("dark-mode");
});
mode[1].addEventListener("click", () => {
    document.body.classList.add("dark-mode");
});

let signUp = document.getElementById("sign-up-inner");
let register = document.getElementById("register-inner");

function onRegister() {
    register.classList.remove("visually-hidden");
    signUp.classList.add("visually-hidden");
}

function onSignUp() {
    signUp.classList.remove("visually-hidden");
    register.classList.add("visually-hidden");
}
