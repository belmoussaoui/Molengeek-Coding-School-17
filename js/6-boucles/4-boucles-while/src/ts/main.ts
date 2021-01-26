// Exercice 1
let chiffre = parseInt(prompt("un chiffre")) || 0;
let compteur = 0;
while (compteur != chiffre) {
    console.log(compteur);
    chiffre > 0 ? compteur++: compteur--;
}
console.log(chiffre);

//  Exercice 2
let classe1: Array<string> = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel", "Majda", "Bilal", "Laurie", "Yahya", "Mahad", "Nghia", "Saïd", "Camille", "Antoine", "Ayoub", "Yassin", "Cem", "Gauthier"];
while (classe1.length > 0) {
    console.log(`bonjour ${classe1.shift()}`);
}

// Exercice 3
classe1 = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel", "Majda", "Bilal", "Laurie", "Yahya", "Mahad", "Nghia", "Saïd", "Camille", "Antoine", "Ayoub", "Yassin", "Cem", "Gauthier"];
let classe2 = [];
let max = parseInt(prompt("nombre maximum d'étudiants")) || 0;
max = Math.min(Math.max(max, 0), classe1.length);
while (classe2.length < max) {
    classe2.push(classe1[classe2.length]);
}
console.log(...classe2);




