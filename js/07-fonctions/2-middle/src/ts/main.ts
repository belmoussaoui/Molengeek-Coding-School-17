// Exo 1 reverseNumber

let reverseNumber = (number : number | string) => {
    let ns = number.toString();
    if (ns === "") {
        return "";
    } else {
        return parseInt(reverseNumber(ns.substr(1)) + ns.charAt(0));
    }
}

console.log(reverseNumber(851));

// Exo 2 Pair
let estPair = (n: number) => {
    switch (n % 2) {
        case 0:
            console.log(`Le nombre ${n} est pair, il est divisible par 2 : ${n}/2 = ${n/2}`);
            break;
        default:
            console.log(`Ce nombre est impair, il n'est pas divisible par 2.`)
    }
}

estPair(90);

// Exo 3 logIn
let logIn = () => {
    let mdp: string;
    do {
        mdp = prompt("Votre mot de passe:")
    } while (mdp !== "mdp")
    alert("Vous êtes connecté");
}

logIn()
