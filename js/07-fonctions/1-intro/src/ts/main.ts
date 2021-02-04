type Operation  =  (a: number, b: number, op: string)  =>  number;

console.log(addition(2, 3));
console.log(soustraction(2, 3));
console.log(multiplication(2, 3));
console.log(division(2, 3));
console.log(modulo(2, 3));
console.log(modulo(2, 3));
console.log(puissance(2, 3));
console.log(capitalize("biLAl"));

// Exo 2 Additionner

function addition(a: number, b: number): number {
    return a + b;
}

// Exo 2 Soustraction

function soustraction(a: number, b: number): number {
    return a - b;
}

// Exo 3 Multiplication

function multiplication(a: number, b: number): number {
    return a * b;
}

// Exo 4 Division

function division(a: number, b: number): number {
    return a / b;
}

// Exo 5 Modulo

function modulo(a: number, b: number): number {
    return a % b;
}

// Exo 6 Carré / Exo 7 Exposant
function puissance(a: number, b = 2): number {
    return a**b;
}

// Exo 8 Capitalize
function capitalize(text: string): string {
    return text[0].toUpperCase() + text.slice(1);
}

// Exo 9 Calcul
let calcul : Operation = (nbr1, nbr2, op) => {
    switch (op) {
        case "+":
            return addition(nbr1, nbr2);
        case "-":
            return soustraction(nbr1, nbr2);
        case "*":
            return multiplication(nbr1, nbr2);
        default:
            return NaN;
    }
}
console.log(calcul(10, 20, "*"));
console.log(calcul(10, 2, "/"));
console.log(calcul(7, 2, "-"));




