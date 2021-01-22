let x: number;
let y: number;
let z: number;

function promptInt(): number {
    return parseInt(prompt("Donnez un nombre :")) || 0;
}

// 1
x = promptInt();
y = promptInt();
console.log(`Le nombre ${x} et le nombre ${y} sont-ils égaux ? :`, x === y);

// 2
x = promptInt();
y = promptInt();
console.log(`Le nombre ${x} est-il plus petit que le nombre ${y} ? :`, x < y);

// 3
x = promptInt();
y = promptInt();
z = promptInt();
console.log(`La somme de ${x} + ${y} est-elle plus grande que le ${z} ? :`, x + y > z);

// 4
let phrase: string = prompt("Entrez une phrase :");
let n: number = parseInt(prompt("Combien de caractères y'a-t-il dans cette phrase ?")) || 0;
phrase.length === n ? console.log("Vrai!") : console.log(`Faux, vous êtes à ${Math.abs(phrase.length - n)} caractères de la bonne réponse.`);

// 5
x = promptInt();
y = promptInt();
x > y ? console.log(x - y) : console.log(y - x);

// 6
x = promptInt();
y = promptInt();
z = promptInt();

let res = x > y ? (x < z ? z : x) : y > z ? y : z;
console.log(`Entre ${x}, ${y} et ${z}, ${res} est le plus grand.`);

// res = Math.max(x, y, z);

// if (x > y) {
//     if (x < z) {
//         res = z;
//     } else {
//         res = x;
//     }
// } else if (y > z) {
//     res = y;
// } else {
//     res = z;
// }


// 7
let prenom = prompt("Entrez votre prénom :");
prenom? console.log("Bonjour", prenom) : prompt("Veuillez vous assurer de bien remplir le champs ci-dessous. Quel est votre prénom ?");

// 8
let subscribe = false
if (confirm('abonnement?')) {
    subscribe = true;
} else {
    confirm('vous êtes sûr') ? console.log("on est déçu") : subscribe = true;
}
if (subscribe) {
    let formule = prompt('quelle formule? "luxe" ou "normal"');
    if (formule.toLowerCase() === "normal") {
        console.log("Merci pour votre abonnement.");
    } else {
        console.log("Félicitation pour votre abonnement à la formule Luxe !");
    }
}

// 9
let q1 = prompt("quel est le mot clef pour déclaré une variable constante");
let r1 = "const";
let q2 = prompt("quel est la fonction pour convertir un string en number (sans les parenthèses)")
let r2 = "parseint";
let score: number = Number(r1 == q1.toLowerCase()) + Number(r2 == q2.toLowerCase());
score === 0 ? console.log("0 réponses correctes") : score === 1 ? console.log("1 réponses correctes") : console.log("2 réponses correctes");

// 10
// let age = parseInt(prompt('votre âge?'));
// let age = parseInt(prompt('votre année de naissance?')) - 2021;
let age = parseInt(prompt('votre âge').match(/-?\d+/)[0]);
if (isNaN(age)) console.log("Vu que vous ne savez pas lire une instruction, je présume que vous n'avez pas l'âge.");
else if (age < 0) console.log("Revenez quand vous serez né !");
else if (age === 18) console.log("Réservez mais attention, c'est tout juste et ce film peut être choquant !");
else if (age > 18) console.log("vous êtes majeur, vous pouvez réserver.");
else console.log("vous êtes mineur, revenez plus tard.");

// 11
let res1 = confirm("Voulez-vous partir en vacances ?");
let res2 = confirm("Est-ce que vous êtes riche ?");
let res3 = confirm("Est-ce que vous avez un chat ?");
if (!res1) console.log("Pas de problème, ne partez pas en vacances.");
if (!res2 || res3) console.log("Même si vous le vouliez, vous ne pouriez pas partir...");
if (res2 || !res3) console.log("Vous pourriez partir en vacance si vous le vouliez.");
if (res1 && res2 && !res3) console.log("Tout est parfait, partez en vacance !");
if (!(!res1 || !res2 || res3)) console.log("Tout est parfait, partez en vacance !");
