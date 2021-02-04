// 1
let tableau = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel"];
console.log(tableau[2]);
// 2
console.log(tableau[0], tableau[tableau.length - 1]);
// 3
let nd = tableau[1];
console.log(nd.slice(0, nd.length - 1).toUpperCase() + nd[nd.length - 1]);
// 4
console.log(tableau[3][0]);
// 5
console.log(tableau[4].slice(1));
// 6
console.log(tableau[0][0].toLowerCase() + tableau[0][1].toUpperCase());
// 7
console.log(tableau[0] + tableau[2]);
// 8
let elem1 = tableau[1].slice(0, Math.ceil(tableau[1].length / 2));
let elem2 = tableau[tableau.length - 1].slice(Math.floor(tableau[tableau.length - 1].length / 2));
console.log(elem1 + elem2);
// 9
console.log(tableau[2].slice(0, 2).toUpperCase() + tableau[4].toLowerCase());
// 10
let concat = "";
for (let i = 0; i < tableau.length; i++) {
    concat += tableau[i][0].toLowerCase() + tableau[i][1].toUpperCase();
}
console.log(concat);
