// 1
const button = document.querySelector("button");
button.addEventListener("click", () => {
    document.querySelector("span").textContent++;
});

// 2
const square = document.getElementById("square");
square.addEventListener("click", () => {
    square.classList.toggle("on");
    square.classList.toggle("off");
    square.textContent = square.classList.contains("on") ? "on" : "off";
});

// 3
let numberSwitch = true;
document.addEventListener("keydown", (event) => {
    if (event.key === "6") {
        numberSwitch ? addNumberTitles() : removeNumberTitles();
        numberSwitch = !numberSwitch;
    }
});

function addNumberTitles() {
    const allh2 = document.querySelectorAll("h2");
    for (const [index, h2] of allh2.entries()) {
        h2.textContent = `${index}. ${h2.textContent}`;
    }
}

function removeNumberTitles() {
    const allh2 = document.querySelectorAll("h2");
    for (const h2 of allh2) {
        let text = h2.textContent;
        h2.textContent = `${text.slice(text.indexOf(" ") + 1)}`;
    }
}

// 4
const multi = document.getElementById("multi-click");
let state = 0;
multi.addEventListener("click", () => {
    state = (state + 1) % 3;
    console.log(state);
    switch (state) {
        case 0:
            multi.style.borderRadius = "0";
            multi.style.backgroundColor = "white";
            break;
        case 1:
            multi.style.borderRadius = "100%";
            break;
        case 2:
            multi.style.backgroundColor = "red";
            break;
    }
});

// 5
const color = document.getElementById("pick-color");
color.addEventListener("change", () => {
    const p = document.querySelector("#pick-color + p");
    p.style.color = color.value;
});
