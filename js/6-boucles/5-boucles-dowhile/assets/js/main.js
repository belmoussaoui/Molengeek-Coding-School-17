// Exercice 1
let chiffre = parseInt(prompt("un chiffre")) || 0;
chiffre = Math.min(Math.max(chiffre, 0), 9);
let compteur = 0;
do {
    console.log(compteur);
    chiffre > 0 ? compteur++ : compteur--;
} while (chiffre > 0 ? compteur <= chiffre : compteur >= chiffre);
//  Exercice 2
let classe1 = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel", "Majda", "Bilal", "Laurie", "Yahya", "Mahad", "Nghia", "Saïd", "Camille", "Antoine", "Ayoub", "Yassin", "Cem", "Gauthier"];
do {
    console.log(`bonjour ${classe1.shift()}`);
} while (classe1.length > 0);
// Exercice 3
var Fruit;
(function (Fruit) {
    Fruit["POMME"] = "POMME";
    Fruit["BANANE"] = "BANANE";
    Fruit["POIRE"] = "POIRE";
    Fruit["ORANGE"] = "ORANGE";
    Fruit["ANANAS"] = "ANANAS";
    Fruit["PASTEQUE"] = "PASTEQUE";
})(Fruit || (Fruit = {}));
let fruits = [Fruit.POMME, Fruit.BANANE, Fruit.POIRE, Fruit.ORANGE, Fruit.ANANAS, Fruit.PASTEQUE];
do {
    fruits.pop();
} while (fruits.length !== 0);
console.log(fruits);
