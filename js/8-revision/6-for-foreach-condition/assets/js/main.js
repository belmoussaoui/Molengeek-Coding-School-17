let leTableau = [4, "true", true, "bonjour", 511, "coding school", {}, 2020, 1, "maryam", false, [], 13, ["salut", 13, false], "les tartines c'est délicieux", "true et false", 1070, 478, "hello", "top", 4000, 99, "codeur", 45, "javascript", 399, "autodidacte", "oui", 1000, 1001, "brainstorming", "lol"];
// // 1
// leTableau.forEach(elem => {console.log("l'element", elem, "est de type", typeof elem)});
// // 2
// let lesIntegers = [];
// let lesStrings = [];
// let lesAutres = [];
// leTableau.forEach(elem => {
//     switch (typeof elem) {
//         case 'number':
//             lesIntegers.push(elem);
//             break
//         case 'string':
//             lesStrings.push(elem);
//             break;
//         default:
//             lesAutres.push(elem);
//     }
// });
// console.log(lesIntegers);
// console.log(lesStrings);
// console.log(lesAutres);
// // 3
// let lesPetitsIntegers: number[] = [];
// let lesGrandsIntegers: number[] = [];
// let lesPetitsStrings: string[] = [];
// let lesGrandsStrings: string[] = [];
// leTableau.forEach(elem => {
//     switch (typeof elem) {
//         case 'number':
//             elem >= 100 ? lesGrandsIntegers.push(elem) : lesPetitsIntegers.push(elem);
//             break
//         case 'string':
//             elem.length >= 6 ? lesGrandsStrings.push(elem) : lesPetitsStrings.push(elem);
//             break;
//     }
// });
// console.log(lesPetitsIntegers);
// console.log(lesGrandsIntegers);
// console.log(lesPetitsStrings);
// console.log(lesGrandsStrings);
// // 4
// let premierPot: number[] = [];
// let secondPot: number[] = [];
// for (;premierPot.length + secondPot.length < 11;) {
//     let nombre: number;
//     for (;!nombre || nombre < 0;) {
//         nombre = parseInt(prompt("entrer un nombre (" + (11 - (premierPot.length + secondPot.length))+")"));
//         if (nombre < 0) {
//             alert("nombre trop petit");
//         }
//     }
//     if (nombre <= 100) {
//         premierPot.push(nombre);
//     } else {
//         secondPot.push(nombre);
//     }
// }
// console.log(premierPot);
// console.log(secondPot);
// 5
// let panier = [];
// let legumeIndex = [];
// for (let i = 0; i < 4; i++) {
//     if (parseInt(prompt("0 pour fruit et 1 pour légume"))) {
//         legumeIndex.push(i)
//         panier.push(prompt("votre legume"));
//     } else {
//         panier.push(prompt("votre fruit"));
//     }
// }
// panier.forEach((elem, index, tab) => {
//     if (legumeIndex.includes(index)) {
//         console.log(elem, "est un légume");
//     } else {
//         console.log(elem, "est un fruit");
//     }
// })
// 6
let vetements = ['chaussure classique', 't-shirt super héro', 'pull col roulé', 'basket de sport', 'chaussettes blanches', 'pentalon noir', 'soutien-gorge', 'pull rayé', 't-shirt soleil souriant', 'caleçon blanc'];
let sousVetements = [];
let chaussures = [];
for (let i = vetements.length; i >= 0; i--) {
    const elem = vetements.shift();
    let categorie = parseInt(prompt(elem + " 1: sousVetements, 2: vetements, 3: chausures"));
    switch (categorie) {
        case 1:
            sousVetements.push(elem);
            break;
        case 2:
            chaussures.push(elem);
            break;
        case 3:
            vetements.push(elem);
            break;
    }
}
console.log(vetements, sousVetements, chaussures);
