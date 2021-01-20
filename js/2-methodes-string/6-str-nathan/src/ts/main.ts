// 1
// const word : string = prompt("Entrez un mot");
// const letter : string = prompt("Entrez la lettre que vous voulez retirer du mot");
// console.log(word.replace(letter, ""));

// 2
// const letter = word.charAt(Math.floor(Math.random() * word.length));
// console.log(letter, word, word.replace(letter, ""));

// 3
const randomLetter = (word: string) : string => {
    return word.charAt(Math.floor(Math.random() * word.length))
}

let prenom : string = prompt("Entrez votre prénom");
const longPrenom : number = prenom.length;
let nom : string = prompt("Entrez votre nom");
let age : number = parseInt(prompt("Entrez votre age"));
let taille : string = prompt("Entrez votre taille");

// nom
let letter1 : string = randomLetter(nom);
let letter2 : string = randomLetter(nom);
nom = nom.replace(letter1, letter1.toUpperCase()).replace(letter2, letter2.toUpperCase())
console.log(letter1, letter2, nom);

// prenom
letter1 = randomLetter(prenom);
letter2 = randomLetter(prenom);
prenom = prenom[0].toUpperCase() + prenom.slice(1).toLowerCase().replace(letter1, "").replace(letter2, "")
console.log(letter1, letter2, prenom);

// age
age *= 12;
console.log(age);

// taille
taille = taille.replace("m", "") + " cm";
console.log(taille);

// final
console.log(`Bonjour ${prenom} ${nom}, ton prénom comporte normalement ${longPrenom} lettres mais 2 ont été perdues en chemin, tu es agé de ${age} mois et tu fais ${taille}`);











