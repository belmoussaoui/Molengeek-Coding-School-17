// Exo 1 Start
let titre = document.querySelector("h2");

titre.innerText = "le titre modifié";
titre.style.color = "red";
titre.classList.add("bg-primary");

// Exo 2 Start
let buttons = document.querySelectorAll("#header .btn");
let active;

buttons[0].addEventListener("click", () => {
    let exo1 = document.querySelector("#exo1");
    exo1.classList.remove("d-none");
    if (active && active != exo1) {
        active.classList.add("d-none");
    }
    active = exo1;
});
buttons[1].addEventListener("click", () => {
    let exo2 = document.querySelector("#exo2");
    exo2.classList.remove("d-none");
    if (active && active != exo2) {
        active.classList.add("d-none");
    }
    active = exo2;
});
buttons[2].addEventListener("click", () => {
    let exo3 = document.querySelector("#exo3");
    exo3.classList.remove("d-none");
    if (active && active != exo3) {
        active.classList.add("d-none");
    }
    active = exo3;
});
buttons[3].addEventListener("click", () => {
    let exo4 = document.querySelector("#exo4");
    exo4.classList.remove("d-none");
    if (active && active != exo4) {
        active.classList.add("d-none");
    }
    active = exo4;
});
buttons[4].addEventListener("click", () => {
    let exo5 = document.querySelector("#exo5");
    exo5.classList.remove("d-none");
    if (active && active != exo5) {
        active.classList.add("d-none");
    }
    active = exo5;
});
buttons[5].addEventListener("click", () => {
    let exo6 = document.querySelector("#exo6");
    exo6.classList.remove("d-none");
    if (active && active != exo6) {
        active.classList.add("d-none");
    }
    active = exo6;
});
buttons[6].addEventListener("click", () => {
    let exo7 = document.querySelector("#exo7");
    exo7.classList.remove("d-none");
    if (active && active != exo7) {
        active.classList.add("d-none");
    }
    active = exo7;
});

// Exo 3 Start
let buttonGo = document.querySelector("#exo3 button");
let inconnu = document.querySelector("#exo3 h2");
let name = document.querySelector("#exo3 input");

buttonGo.addEventListener("click", () => {
    let valeur = name.value[0].toUpperCase() + name.value.slice(1);
    inconnu.innerText = `welcome ${valeur}`;
});

// Exo 4 Start
let i = 0;
let boxButton = document.querySelector("#exo4 button");
boxButton.addEventListener("click", () => {
    let box1 = document.querySelector("#box1");
    box1.classList.toggle("d-none");

    let box2 = document.querySelector("#box2");
    box2.classList.toggle("d-none");

    i++;
    let boxSpan = exo4.querySelector("span");
    boxSpan.innerText = `nombre de click ${i}`;
});

// Exo 5 Start

let buttonOeuf = document.querySelector("#exo5 button");

buttonOeuf.addEventListener("click", () => {
    let imgOeuf = document.createElement("img");
    imgOeuf.src = "./public/img/oeuf.png";
    imgOeuf.style.height = "100px";
    let divOeuf = document.querySelector("#oeufs");
    divOeuf.appendChild(imgOeuf);
});

//Exo 6 Start

let buttonEgale = document.querySelector("#exo6 button");
let valeur1 = document.querySelector("#exo6 input");
let valeur2 = document.querySelectorAll("#exo6 input")[1];
let resultat = document.querySelector("#rep");

buttonEgale.addEventListener("click", () => {
    resultat.innerText = parseInt(valeur2.value) + parseInt(valeur1.value);
});

// Exo 6 : calculatrice

let numbers = document.querySelectorAll(".numbers");
let inputCal = document.querySelector("#calculatrice input");
let operators = document.querySelectorAll(".operators");
let off = false;
let valeurFirst = "";
let operateur = "";
let egale = document.querySelector("#egale");
let reponse = document.querySelector("#calculatrice span");

for (const number of numbers) {
    number.addEventListener("click", (e) => {
        inputCal.value += e.currentTarget.textContent;
    });
}
for (const operator of operators) {
    operator.addEventListener("click", (e) => {
        valeurFirst = inputCal.value;
        inputCal.value = "";
        operateur = e.currentTarget.textContent;
    });
}

egale.addEventListener("click", () => {
    switch (operateur) {
        case "+":
            reponse.textContent =
                parseInt(valeurFirst) + parseInt(inputCal.value);
            break;
        case "-":
            reponse.textContent =
                parseInt(valeurFirst) - parseInt(inputCal.value);
            break;
        case "*":
            reponse.textContent =
                parseInt(valeurFirst) * parseInt(inputCal.value);
            break;
        case "/":
            reponse.textContent =
                parseInt(valeurFirst) / parseInt(inputCal.value);
            break;
    }
});

let remote = document.querySelector("#remote");

remote.addEventListener("click", () => {
    inputCal.value = "";
    reponse.innerText = "?";
});

// Exo 7 Start
let input7 = document.querySelector("#exo7 input");
let buttons7 = document.querySelectorAll("#exo7 button");
let ul7 = document.querySelector("#exo7 ul");
let li7 = document.querySelector("#exo7 li");
input7.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
        addLi();
    }
});

buttons7[0].addEventListener("click", () => {
    let allLi = document.querySelectorAll("#exo7 li");
    for (let i = 1; i < allLi.length; i++) {
        allLi[i].classList.remove("d-none");
    }
});

buttons7[1].addEventListener("click", () => {
    let allLi = document.querySelectorAll("#exo7 li");
    for (let i = 1; i < allLi.length; i++) {
        if (allLi[i].classList.contains("bg-success")) {
            allLi[i].classList.remove("d-none");
        } else {
            allLi[i].classList.add("d-none");
        }
    }
});

buttons7[2].addEventListener("click", () => {
    let allLi = document.querySelectorAll("#exo7 li");
    for (let i = 1; i < allLi.length; i++) {
        if (allLi[i].classList.contains("bg-white")) {
            allLi[i].classList.remove("d-none");
        } else {
            allLi[i].classList.add("d-none");
        }
    }
});

function addLi() {
    let newLi = li7.cloneNode(true);
    newLi.classList.remove("d-none");
    let input = newLi.querySelector("input");
    input.value = input7.value;
    ul7.appendChild(newLi);
    let buttons = newLi.querySelectorAll("button");
    buttons[0].addEventListener("click", () => {
        newLi.classList.toggle("bg-white");
        newLi.classList.toggle("bg-success");
    });
    buttons[1].addEventListener("click", () => {
        input.readOnly = false;
    });
    input.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
            input.readOnly = true;
        }
    });
    buttons[2].addEventListener("click", () => {
        ul7.removeChild(newLi);
    });
}
