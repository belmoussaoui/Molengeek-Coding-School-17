// 1
const button1 = document.querySelector("button");
button1.addEventListener("click", () => {
    const img = document.querySelector("#mignon-container img");
    const container = document.getElementById("mignon-container");
    container.appendChild(img.cloneNode());
});

// 2
let container = document.getElementById("mignon2-container");
let imgs = container.children;

container.addEventListener("click", (e) => {
    if (e.target.tagName === "IMG") {
        e.target.remove();
        exoBonus(e);
    }
});

function exoBonus(e) {
    if (imgs.length === 0) {
        setTimeout(() => {
            for (let i = 0; i < 5; i++) {
                container.appendChild(e.target.cloneNode());
            }
        }, 1000);
    }
}

// const container = document.querySelector("#mignon2-container");
// removable(container);

// function removable(container) {
//     const mignons = container.querySelectorAll("*");
//     for (const img of mignons) {
//         img.addEventListener("click", () => {
//             let node = container.removeChild(img);
//             restart(node);
//         });
//     }
// }

// function restart(node) {
//     if (container.childElementCount === 0) {
//         setTimeout(() => {
//             for (let i = 0; i < 5; i++) {
//                 container.append(node.cloneNode());
//             }
//             removable(container);
//         }, 1000);
//     }
// }

// 3
let li = document.createElement("li");
li.textContent = "li num 2";
let refChild = document.querySelectorAll("ul li")[1];
let ul = document.querySelector("ul");
ul.insertBefore(li, refChild);
//ul.firstElementChild.insertAdjacentElement("beforeend", li)

// 4
let submit = document.querySelector("#exo-li-from-input button");
let ulTask = document.querySelector("#exo-li-from-input ul");
let input = document.querySelector("#exo-li-from-input input");

submit.addEventListener("click", () => {
    //if (input.value !== "")
    let li = document.createElement("li");
    li.textContent = input.value;
    input.value = "";
    // https://stackoverflow.com/a/43838105
    ulTask.prepend(li);

    // bonus
    li.addEventListener("click", swap);
});

//bonus

let index1 = -1;
let index2 = -1;
let onActive = false;
let edit = document.querySelector("#exo-li-from-input>button");

edit.addEventListener("click", () => {
    onActive = !onActive;
    edit.style.backgroundColor = onActive ? "green" : "#f8f9fa";
    if (!onActive) {
        index1 = index2 = -1;
    }
});

function allLi() {
    return document.querySelectorAll("#exo-li-from-input li");
}

function swap(e) {
    if (onActive) {
        if (index1 === -1) {
            index1 = [...allLi()].indexOf(e.currentTarget);
        } else {
            let li = allLi();
            index2 = [...li].indexOf(e.currentTarget);
            ulTask.insertBefore(li[index1], li[index2 + 1]);
            ulTask.insertBefore(li[index2], li[index1 + 1]);
            index1 = index2 = -1;
        }
    }
}

for (let li of allLi()) {
    li.addEventListener("click", swap);
}
