// 1
console.log("1" == 1);

// 2
console.log("1" === 1);

// 3
let prenom = prompt("ton prénom?");
if (prenom.length < 5) {
    console.log("Ton nom est trop court")
}

// 4
let calcul = "10 - 2"
let res = parseInt(prompt(calcul));
if (eval(calcul) === res) {
    console.log("félictation!")
} else {
    console.log("mauvaise réponse!")
}

// 5
calcul = "10 * 3"
res = parseInt(prompt(calcul));
if (eval(calcul) === res) {
    console.log(`la réponse était bien ${res}`)
} else {
    console.log(`C'est dommage, tu n'étais qu'a ${eval(calcul) - res} unité de la bonne réponse`)
}

// 6
let array : string[] = [];
let maxElem = 3;
for (;;) {
    alert(`Il reste ${maxElem - array.length} éléments`)
    array.push(prompt("Votre élément?"));
    if (array.length > maxElem) {
        break;
    }
}
alert(array);

// 7
let grandNombres = [];
let petitNombres = [];

for (let i = 0; i < 5; i++) {
    let out = parseInt(prompt("Votre élément (nombre)?"));
    if (out > 12) {
        grandNombres.push(out);
    } else {
        petitNombres.push(out);
    }
}

alert("grandNombres = " + grandNombres + ", petitNombres = " + petitNombres);


// 8
// Créez un programme qui demande un nombre et qui affiche
// si ce nombre est un nombre pair ou impair.
let nombre = parseInt(prompt("Entrez un nombre :")) || 0;
if (nombre % 2 === 0) {
    console.log("pair!")
} else {
    console.log("impair!")
}


