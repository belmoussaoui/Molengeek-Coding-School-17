let x;
let y;
let z;
function promptInt() {
    return parseInt(prompt("Donnez un nombre :")) || 0;
}
// 1
x = promptInt();
y = promptInt();
alert(`Le nombre ${x} et le nombre ${y} sont-ils égaux ? : ${x === y}`);
// 2
x = promptInt();
y = promptInt();
alert(`Le nombre ${x} est-il plus petit que le nombre ${y} ? : ${x < y}`);
// 3
x = promptInt();
y = promptInt();
z = promptInt();
alert(`La somme de ${x} + ${y} est-elle plus grande que le ${z} ? : ${x + y > z}`);
// 4
let phrase = prompt("Entrez une phrase :");
let n = parseInt(prompt("Combien de caractères y'a-t-il dans cette phrase ?")) || 0;
phrase.length === n ? alert("Vrai!") : alert(`Faux, vous êtes à ${Math.abs(phrase.length - n)} caractères de la bonne réponse.`);
// 5
x = promptInt();
y = promptInt();
x > y ? alert(x - y) : alert(y - x);
// 6
x = promptInt();
y = promptInt();
z = promptInt();
let res = x > y ? (x < z ? z : x) : y > z ? y : z;
alert(`Entre ${x}, ${y} et ${z}, ${res} est le plus grand.`);
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
prenom ? alert("Bonjour " + prenom) : prompt("Veuillez vous assurer de bien remplir le champs ci-dessous. Quel est votre prénom ?");
if (prenom) {
    alert("Bonjour " + prenom);
}
else {
    prenom = prompt("Veuillez vous assurer de bien remplir le champs ci-dessous. Quel est votre prénom ?");
    if (prenom) {
        alert("Bonjour " + prenom);
    }
}
// 8
let abonnement = confirm('abonnement?');
if (!abonnement) {
    confirm('vous êtes sûr') ?
        alert("on est déçu") : abonnement = true;
}
if (abonnement) {
    let formule = prompt('quelle formule? "luxe" ou "normal"');
    if (formule.toLowerCase() === "normal") {
        alert("Merci pour votre abonnement.");
    }
    else {
        alert("Félicitation pour votre abonnement à la formule Luxe !");
    }
}
// 9
let q1 = prompt("quel est le mot clef pour déclaré une variable constante");
let r1 = "const";
let q2 = prompt("quel est la fonction pour convertir un string en number (sans les parenthèses)");
let r2 = "parseint";
let score = +(r1 == q1.toLowerCase()) + +(r2 == q2.toLowerCase());
score === 0 ? alert("0 réponses correctes") : score === 1 ? alert("1 réponses correctes") : alert("2 réponses correctes");
if (score === 1) {
    if (q1.toLowerCase() !== r1) {
        alert("réponse1 est incorecte");
    }
    else {
        alert("réponse2 est incorecte");
    }
}
// 10
// let age = parseInt(prompt('votre âge?'));
// let age = parseInt(prompt('votre année de naissance?')) - 2021;
let text = prompt('votre âge');
let age;
if (/-?\d+/.test(text)) {
    age = parseInt(text.match(/-?\d+/)[0]);
}
else {
    age = NaN;
}
if (isNaN(age))
    alert("Vu que vous ne savez pas lire une instruction, je présume que vous n'avez pas l'âge.");
else if (age < 0)
    alert("Revenez quand vous serez né !");
else if (age === 18)
    alert("Réservez mais attention, c'est tout juste et ce film peut être choquant !");
else if (age > 18)
    alert("vous êtes majeur, vous pouvez réserver.");
else
    alert("vous êtes mineur, revenez plus tard.");
// 11
let res1 = confirm("Voulez-vous partir en vacances ?");
let res2 = confirm("Est-ce que vous êtes riche ?");
let res3 = confirm("Est-ce que vous avez un chat ?");
if (!res1)
    alert("Pas de problème, ne partez pas en vacances.");
if (!res2 || res3)
    alert("Même si vous le vouliez, vous ne pouriez pas partir...");
if (res2 && !res3)
    alert("Vous pourriez partir en vacance si vous le vouliez.");
if (res1 && res2 && !res3)
    alert("Tout est parfait, partez en vacance !");
if (!(!res1 || !res2 || res3))
    alert("Tout est parfait, partez en vacance !");
