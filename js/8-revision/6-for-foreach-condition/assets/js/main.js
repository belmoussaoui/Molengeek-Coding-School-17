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
// let panier = ["pomme", "banane", "carotte", "aubergine"];
// panier.forEach((elem) => {
//     console.log(elem);
// })
// 6
// 
