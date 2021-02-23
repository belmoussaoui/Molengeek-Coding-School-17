function createButton(text) {
    let button = document.createElement("button");
    button.textContent = text;
    document.body.append(button);
    return button;
}

// exo1
let button1 = document.createElement("button");
button1.textContent = "Je suis un bouton";
document.body.append(button1);

button1.addEventListener("click", () => {
    button1.textContent = "j'ai été cliqué";
});

// exo2
let button2 = document.createElement("button");
button2.textContent = "Je suis un bouton";
document.body.append(button2);

let x = 0;
button2.addEventListener("click", () => {
    x++;
    button2.textContent = `j'ai été cliqué ${x} fois`;
});

// exo3
let button3 = createButton("exo3");
button3.addEventListener("click", () => {
    // let title = document.createElement("h1");
    // title.textContent = "mon h1";
    // document.body.append(title);
    document.body.appendChild(document.createElement("h1")).textContent =
        "mon h1";
});

// exo4
let button4 = createButton("exo4");
button4.addEventListener("click", () => {
    createButton("exo4");
});

// exo5
let p = document.createElement("p");
p.textContent = "je suis un paragraphe";
document.body.append(p);

let button5 = createButton("modifier la couleur du paragraphe");
button5.addEventListener("click", () => {
    p.style.color = "red";
});

// exo6
// 1
let button6 = createButton("exo6");
button6.addEventListener("click", () => {
    let h2 = document.createElement("h2");
    h2.textContent = "je lance une function";
    document.body.append(h2);

    // 2
    let modifierButton = createButton("modifier le titre Exo 06");

    //3
    modifierButton.addEventListener("click", () => {
        h2.style.color = "red";
    });
});
