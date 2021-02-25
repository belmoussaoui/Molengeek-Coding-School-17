const target = document.querySelector("#target");
// console.log(target);

function setColor(e) {
    const element = e.currentTarget;
    const style = window.getComputedStyle(element);
    target.style.backgroundColor = style.backgroundColor;
}

const colors = document.querySelectorAll("#colors>button");
for (const color of colors) {
    color.addEventListener("click", setColor);
}

const styleBorders = document.querySelectorAll("#border-style>button");
for (const styleBorder of styleBorders) {
    styleBorder.addEventListener("click", setStyleBorder);
}

function setStyleBorder(e) {
    const element = e.currentTarget;
    target.style.border = element.style.border;
}

const topBorders = document.querySelectorAll("#border-top>button");
for (const topBorder of topBorders) {
    topBorder.addEventListener("click", setTopBorder);
}

function setTopBorder(e) {
    const element = e.currentTarget;
    const style = window.getComputedStyle(element);
    target.style.borderTop = style.borderTop;
}

const inputColor = document.querySelector("#second input[type='color']");
inputColor.addEventListener("change", (e) => {
    target.style.backgroundColor = inputColor.value;
});

const borderSizes = document.querySelectorAll("#border-size input");
for (const borderSize of borderSizes) {
    borderSize.addEventListener("change", setBorderSize);
}

function setBorderSize(e) {
    const element = e.currentTarget;
    target.style.border = "solid black " + element.value + "px";
    console.log("solid black " + element.value + "px");
}
