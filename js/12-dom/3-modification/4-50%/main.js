// 1. Stock tous les h2 dans une variable du nom de 'elements', attention voici les contraintes :
let h2 = document.querySelectorAll("#liste-competences h2");

let scores = {
    HTML: 100,
    CSS: 80,
    JS: 95,
    React: 10,
    Laravel: 5,
};

let i = 0;
for (let score in scores) {
    if (scores[score] < 50) {
        style = "red";
    }
    if (scores[score] > 50) {
        style = "green";
        h2[i].style.color = "white";
    }
    if (scores[score] === 100) {
        style = "gold";
        h2[i].style.color = "black";
    }
    h2[i].style.backgroundColor = style;

    i++;
}
