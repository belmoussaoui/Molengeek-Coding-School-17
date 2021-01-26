// Exo 1
let classe = [];
for (let i = 0; i < 3; i++) {
    classe.push("personne" + i);
}
for (let i = 0; i < classe.length; i++) {
    console.log("bonjour", classe[i]);
}
// Exo 2
//  version négatives
// for (let i = 0; nombre >= 0 ? i <= nombre: i >= nombre; nombre >= 0 ? i++ : i--) {
//     console.log(i);
// }
let nombre = parseInt(prompt("un nombre")) || 10;
for (let i = 0; i <= nombre; i++) {
    console.log(i);
}
