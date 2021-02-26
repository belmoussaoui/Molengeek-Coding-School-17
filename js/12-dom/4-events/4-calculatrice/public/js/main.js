function calculatrice(op, a, b) {
    a = parseInt(a);
    b = parseInt(b);
    switch (op) {
        case "+":
            console.log(a, b);
            return a + b;
        case "-":
            return a - b;
        case "*":
            return a * b;
        case "/":
            return a / b;
    }
}

function operatorAwesome(name) {
    switch (name) {
        case "fa-plus":
            return "+";
        case "fa-minus":
            return "-";
        case "fa-times":
            return "*";
        case "fa-divide":
            return "/";
    }
    return "";
}

// exo 1
let inputs1 = document.querySelectorAll("#exo-1 input");
let button1 = document.querySelector("#exo-1 button");
let reponse1 = document.getElementById("response1");

button1.addEventListener("click", () => {
    let a = inputs1[0].value;
    let b = inputs1[1].value;
    reponse1.textContent = calculatrice("+", a, b);
});

// exo 2
let operator2 = document.querySelector("#exo-2 select");
let inputs2 = document.querySelectorAll("#exo-2 input");
let button2 = document.querySelector("#exo-2 button");
let reponse2 = document.getElementById("response2");

button2.addEventListener("click", () => {
    let op = operator2.value;
    let a = inputs2[0].value;
    let b = inputs2[1].value;
    reponse2.textContent = calculatrice(op, a, b);
});

// exo 3
let operator3 = document.querySelector("#exo-3 span i");
let inputs3 = document.querySelectorAll("#exo-3 input");
let buttons3 = document.querySelectorAll("#exo-3 button");
let reponse3 = document.getElementById("response3");

for (let i = 1; i < buttons3.length; i++) {
    buttons3[i].addEventListener("click", (e) => {
        let child = e.currentTarget.firstElementChild;
        operator3.classList = child.classList;
    });
}

buttons3[0].addEventListener("click", () => {
    let op = operatorAwesome(operator3.classList[1]);
    let a = inputs3[0].value;
    let b = inputs3[1].value;
    reponse3.textContent = calculatrice(op, a, b);
});

// exo 4
let operator4 = document.querySelector("#exo-4 span i");
let inputs4 = document.querySelectorAll("#exo-4 input");
let equal = document.querySelector("#exo-4 button");
let reponse4 = document.getElementById("response4");
let numbers = document.querySelectorAll("#numbersExo4 button");
let operators = document.querySelectorAll("#operatorsExo4 button");

let active = inputs4[0];
for (let input of inputs4) {
    input.addEventListener("click", (e) => {
        active = input;
    });
}

for (let number of numbers) {
    number.addEventListener("click", (e) => {
        let element = e.currentTarget;
        active.value += parseInt(element.textContent);
    });
}

equal.addEventListener("click", () => {
    let op = operatorAwesome(operator4.classList[1]);
    let a = inputs4[0].value;
    let b = inputs4[1].value;
    reponse4.textContent = calculatrice(op, a, b);
});

for (let op of operators) {
    op.addEventListener("click", (e) => {
        let child = e.currentTarget.firstElementChild;
        operator4.classList = child.classList;
        // pass to second input
        active = inputs4[1];
    });
}
