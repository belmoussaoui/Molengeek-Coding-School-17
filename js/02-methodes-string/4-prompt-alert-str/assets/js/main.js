const prenom = prompt("Quel est ton prénom");
const charToUpperCase = (word, pos) => {
    return word.slice(0, pos) + word.charAt(pos).toUpperCase() + word.slice(pos + 1);
};
// 1
alert(prenom[0]);
// 2
alert(prenom[prenom.length - 1]);
// 3
alert(prenom.slice(1));
// 4
alert(charToUpperCase(prenom, 1));
// 5
let pos = prenom.indexOf(prompt("Quelle lettre tu veux mettre en majuscule?")) || 0;
alert(charToUpperCase(prenom, pos));
// 6
alert(prenom[0].toUpperCase() + prenom.slice(1).toLowerCase());
// 7
const randomPos = Math.floor(Math.random() * prenom.length);
alert(prenom.slice(0, randomPos) + prenom.slice(randomPos + 1, prenom.length));
