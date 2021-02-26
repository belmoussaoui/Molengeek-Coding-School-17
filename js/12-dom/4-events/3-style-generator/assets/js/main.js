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
    let value = "solid " + element.value + "px";
    let i = [...borderSizes].indexOf(element);
    switch (i) {
        case 0:
            target.style.borderTop = value;
            break;
        case 1:
            target.style.borderRight = value;
            break;
        case 2:
            target.style.border = value;
            break;
        case 3:
            target.style.borderBottom = value;
            break;
        default:
            target.style.borderLeft = value;
    }
}

const borderRadius = document.querySelectorAll("#third input");
let i = 1;
for (const radius of borderRadius) {
    radius.addEventListener("change", window["setBorderSize" + i]);
    i++;
}

function setBorderSize1(e) {
    const element = e.currentTarget;
    let value = element.value + "px";
    target.style.borderRadius = value;
}
function setBorderSize2(e) {
    const element = e.currentTarget;
    let value = element.value + "px";
    target.style.borderTopLeftRadius = value;
}
function setBorderSize3(e) {
    const element = e.currentTarget;
    let value = element.value + "px";
    target.style.borderTopRightRadius = value;
}
function setBorderSize4(e) {
    const element = e.currentTarget;
    let value = element.value + "px";
    target.style.borderBottomRightRadius = value;
}
function setBorderSize5(e) {
    const element = e.currentTarget;
    let value = element.value + "px";
    target.style.borderBottomLeftRadius = value;
}