// 1
let nombre = 8.56;
// 2
console.log(Math.round(nombre));
// 3
console.log(Math.ceil(nombre));
// 4
console.log(Math.floor(nombre));
// 5
console.log(Math.trunc(nombre));
// 6
console.log(Math.random());
// 7
console.log(Math.random() * 100);
// 8
// Attention ! Utiliser Math.round() entraînerait une distribution non-uniforme et réduirait le caractère aléatoire de la méthode.
// Deux fois moins de chance de tomber sur le premier et le dernier élément il me semble
console.log(Math.floor(Math.random() * 100));
// 9
console.log(Math.pow(8, 2));
// 10
console.log(Math.sqrt(9));
// 11
console.log(Math.abs(-1));
// 12 
console.log(Math.max(-2, 1000, 8, 57));
// 13
console.log(Math.min(-2, 1000, 8, 57));
