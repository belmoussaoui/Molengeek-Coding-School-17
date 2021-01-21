// Variables temporaires

// let a = 1; // 2
// let b = 2; // 3
// let c = 3; // 1

// let temp = a;
// a = b;
// b = c;
// c = temp;

// console.log(a);
// console.log(b);
// console.log(c);


// Exo 1
// Echanger les valeurs des variables de façon à ce qu'elles aient la valeur indiquée en commentaire
let a = 1; // 4
let b = 2; // 3
let c = 3; // 2
let d = 4; // 1

[a, b, c, d] = [d, c, b, a];

console.log(a, b, c, d);

// Exo 2
// Echanger les valeurs des variables de façon à ce qu'elles aient la valeur indiquée en commentaire
let e = 1; // 2
let f = 2; // 3
let g = 3; // 4
let h = 4; // 1

// [e, f, g, h] = [f, g, h, e];

// pour rigoler :-)
// Swapping variables using bitwise XOR operator has limitations: you can swap only integers.
// e = 2, f = 1
e = e ^ f; // 
f = e ^ f;
e = e ^ f;

// f = 4,  g = 1
f = f ^ g;
g = f ^ g;
f = f ^ g;

// g = 4,  h = 1
g = g ^ h;
h = g ^ h;
g = g ^ h;

console.log(e, f, g, h);

// Exo 3
// Afficher 3, 4, 2, 1 en se servant d'une variable temporaire
let tableau = [1, 2, 3, 4];
let temp;

// 3, 2, 1, 4
temp = tableau[0];
tableau[0] = tableau[2];
tableau[2] = temp;

// 3, 4, 1, 2
temp = tableau[1];
tableau[1] = tableau[3];
tableau[3] = temp;

// 3, 4, 2, 1
temp = tableau[2];
tableau[2] = tableau[3];
tableau[3] = temp;
console.log(tableau);