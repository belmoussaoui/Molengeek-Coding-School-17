// 1. Stock tous les h2 dans une variable du nom de 'elements', attention voici les contraintes :
let h2 = document.querySelectorAll("#liste-competences h2");

let scores = {
    HTML: 100,
    CSS: 80,
    JS: 95,
    React: 50,
    Laravel: 5,
    1: "hello world"
};

let i = 0;
for (let att in scores) {
    let style = h2[i].style;
    if (scores[att] === 100) {
        style.backgroundColor = "gold";
        style.color = "black";
    } else if (scores[att] === 50) {
        style.color = "none";
    } else if (scores[att] > 50) {
        style.backgroundColor = "green";
        style.color = "white";
    } else {
        style.backgroundColor = "red";
    }
    i++;
}
