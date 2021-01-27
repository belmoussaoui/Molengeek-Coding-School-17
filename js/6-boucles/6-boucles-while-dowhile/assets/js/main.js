// Exo 1 Boucles simples
var valeur;
// // 1
// do {
//     valeur = parseInt(prompt("une valeur"));
// } while (!valeur)
// // 2
// do {
//     valeur = parseInt(prompt("une valeur"));
// } while (isNaN(valeur) || valeur < 10)
// // 3
// valeur = 0;
// while (true) {
//     console.log(valeur);
//     valeur++;
// }
// // 4
// valeur = 3;
// while (valeur <= 6) {
//     console.log(valeur);
//     valeur++;
// }
// // 5
// valeur = 0;
// do {
//     console.log(valeur)
//     valeur += 2
// } while(valeur <= 100)
// //  Exo 2
// enum Legume {
//     CAROTTE = "CAROTTE",
//     RADIS = "RADIS",
//     SALADE = "SALADE",
//     BROCOLI = "BROCOLI"
// }
// let panierLegumes : string[] = [];
// let caisseLegumes : string[] = [];
// for (const key in Legume) {
//     panierLegumes.push(key);
// }
// while (panierLegumes.length > 0) {
//     caisseLegumes.push(panierLegumes.pop());
// }
// console.log(panierLegumes);
// console.log(caisseLegumes);
// // Exo 3
// http://www.bibmath.net/jeux/index.php?action=affiche&quoi=ordinateur
// let enigme = "saurez vous compléter cette opération de sorte que tous les chiffres de 0 à 9 soient utilisés une seule fois :\ 6*????=?????\ donnez les deux nombres séparés par un espace";
// let rep = prompt(enigme).split(" ");
// while (rep[0] != "5817" || rep[1] != "34902") {
//     rep = prompt("Mauvaise Réponse! " + enigme).split(" ");
// }
// alert("félictation!");
// la solution à l'enigme
// let heapAlgorithm = function (k : number, sol: number[]) {
//     if (k === 1) {
//         let left = Number("" + sol[0] + sol[1] + sol[2] + sol[3])
//         let right = Number("" + sol[4] + sol[5] + sol[6] + sol[7] + sol[8]);
//         if (6 * left == right) {
//             console.log(`6 * ${left} === ${right}`);
//         }
//     }
//     for (let index = 0; index < k; index++) {
//         heapAlgorithm(k - 1, sol);
//         if (k % 2 === 0) {
//             [sol[index], sol[k - 1]] = [sol[k - 1], sol[index]];
//         }
//         else {
//             [sol[0], sol[k - 1]] = [sol[k - 1], sol[0]];
//         }
//     }
// };
// let sol = [0, 1, 2, 3, 4, 5, 7, 8, 9];
// heapAlgorithm(sol.length, sol);
// Exo 4
// let enigme = "saurez vous compléter cette opération de sorte que tous les chiffres de 0 à 9 soient utilisés une seule fois :\ 6*????=?????\ donnez les deux nombres séparés par un espace";
// let rep = prompt(enigme).split(" ");
// do {
//     rep = prompt("Mauvaise Réponse! " + enigme).split(" ");
// } while (rep[0] != "5817" || rep[1] != "34902")
// alert("félictation!");
// // Exo 5
// let annee = 2021;
// let randomAnnee = Math.floor(Math.random() * (2020 - 1970)) + 1970;
// let rep = -1;
// let index = 0;
// while (index < 3 && annee - randomAnnee !== rep) {
//     rep = parseInt(prompt(`Si je suis né(e) en ${randomAnnee}, quel âge ai-je aujourd’hui ?`));
//     index++;
// }
// if (annee - randomAnnee === rep) {
//     console.log("Félicitation!");
// }
// Exo 6
let panierFruits = [];
while (panierFruits.length < 2) {
    do {
        var fruit = prompt("Ajoute un fruit");
    } while (!fruit);
    panierFruits.push(fruit[0].toUpperCase() + fruit.slice(1));
}
do {
    alert(panierFruits);
    let fruit = prompt("voulez vous retirer un fruit?");
    var index = panierFruits.indexOf(fruit[0].toUpperCase() + fruit.slice(1));
    if (index > -1) {
        panierFruits.splice(index, 1);
    }
} while (index > -1 && panierFruits.length);
alert(panierFruits);
