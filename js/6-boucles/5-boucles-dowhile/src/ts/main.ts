// Exercice 1
let chiffre = parseInt(prompt("un chiffre")) || 0;
chiffre = Math.min(Math.max(chiffre, 0), 9);
let compteur = 0;
do {
    console.log(compteur);
    chiffre > 0 ? compteur++: compteur--;
} while (chiffre > 0 ? compteur <= chiffre : compteur >= chiffre)

//  Exercice 2
let classe1: Array<string> = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel", "Majda", "Bilal", "Laurie", "Yahya", "Mahad", "Nghia", "Saïd", "Camille", "Antoine", "Ayoub", "Yassin", "Cem", "Gauthier"];
do {
    console.log(`bonjour ${classe1.shift()}`);
} while (classe1.length > 0)


// Exercice 3
enum Fruit {
    POMME = "POMME",
    BANANE = "BANANE",
    POIRE = "POIRE",
    ORANGE = "ORANGE",
    ANANAS = "ANANAS",
    PASTEQUE = "PASTEQUE"
}

let fruits: Fruit[] = [Fruit.POMME, Fruit.BANANE, Fruit.POIRE, Fruit.ORANGE, Fruit.ANANAS, Fruit.PASTEQUE];
do {
    fruits.pop();
} while (fruits.length !== 0)
console.log(fruits);


