// 1 exo counter
const button = document.querySelector("button");
button.addEventListener("click", () => {
    document.querySelector("span").textContent++;
});

// 2
const square = document.getElementById("square");
square.addEventListener("click", () => {
    square.classList.toggle("on");
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
