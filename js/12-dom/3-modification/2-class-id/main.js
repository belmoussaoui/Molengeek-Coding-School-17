// Partie 1 Ajout de contenu
// 1
let h1 = document.querySelector("h1");
h1.textContent = "Les attributs class et id";

// 2
let h2s = document.querySelectorAll("h2");
h2s[0].textContent = "Exercice 2 partie A";

// 3
h2s[1].textContent = "Exercice 2 partie B";

// 4
// innerHTML
document.querySelectorAll("p")[0].textContent =
    "L'ajout de class et d'ID est assez simple, il suffit de connaitre les methodes <b>par coeur</b>";

// 5
document.querySelectorAll("p")[1].textContent =
    "La manipulation de l'attribut Style peut-être une <i>solution</i> rapide";

// Partie 2.1 Ajout d'attribut et de leurs valeurs
// 6
h1.setAttribute("id", "bigTitle");

// 7
let div = document.querySelector("h1");
div.setAttribute("class", "container");

// 8
h2s.forEach((elem) => {
    elem.setAttribute("class", "title");
});

// 9
let p = document.querySelectorAll("p");
p.forEach((elem) => {
    elem.setAttribute("class", "text");
});

// Partie 2.2 Ajout d'attribut et de leurs valeurs
// 10
let sections = document.querySelectorAll("section");
sections[0].setAttribute("class", "margin-bottom border-black padding");

// 11
sections[1].setAttribute("class", "margin-top border-black padding");

// 12
let mydiv = document.querySelector("section div");
mydiv.style.border = "solid 1px black";
mydiv.style.backgroundColor = "blue";
mydiv.style.height = "20px";
mydiv.style.width = "20px";
