// Exo 1
let m1 = 7;
for (let i = 0; i <= 10; i++) {
    console.log(`${m1} x ${i} = ${i * m1}`);
}
// Exo 2
let m2 = 7;
for (let i = 0; i <= 10 * 2; i += 2) {
    console.log(`${m2} x ${i / 2} = ${i / 2 * m2}`);
}
// Exo 3
for (let i = 20; i >= 0; i -= 2) {
    console.log(i);
}
// Exo 4
let classe = ["Mohammed", "Yasmina", "Amine", "Salim", "Abdel", "Majda", "Bilal", "Laurie", "Yahya", "Mahad", "Nghia", "Saïd", "Camille", "Antoine", "Ayoub", "Yassin", "Cem", "Gauthier"];
let longPrenoms = [];
classe.forEach(elem => {
    if (elem.length > 5) {
        longPrenoms.push(elem);
    }
});
console.log(...longPrenoms);
// Exo 5
let sommes = [14, 7, 97, 65, 247, 67, 101, 4, 34, 78, 1, 900, 0, 11, 32, 23, 61];
let grossesSommes = [];
for (var i = sommes.length - 1; i >= 0; i--) {
    if (sommes[i] > 60) {
        grossesSommes.push(sommes.splice(i, 1)[0]);
    }
}
console.log(...sommes);
console.log(...grossesSommes);
// Exo 6
let donnees = [17, 7, 97, {}, "247", 67, 101, true, 34, 78, [], 'coding school', 0, 11, 32, "italie", 61, null, 'cent', 100];
let typesString = [];
let typesNumber = [];
let typesObject = [];
let typesAny = [];
for (var i = donnees.length - 1; i >= 0; i--) {
    let elem = donnees.pop();
    let type = typeof elem;
    console.log(type, elem);
    switch (type) {
        case "string":
            typesString.push(String(elem));
            break;
        case "number":
            typesNumber.push(Number(elem));
            break;
        case "object":
            typesObject.push(Object(elem));
            break;
        default:
            typesAny.push(elem);
            break;
    }
}
;
console.log(typesString);
console.log(typesNumber);
console.log(typesObject);
console.log(typesAny);
