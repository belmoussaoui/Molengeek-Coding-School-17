// 1 ToDo
let jour = prompt("Un Jour de la semaine:");
if (jour) {
    jour = jour.trim().toLowerCase();
}
switch (jour) {
    case "lundi":
        console.log(`On est ${jour}. Tu as cours sur le Discord MolenGeek puis tu dois jouer à Among Us.`);
        break;
    case "mardi":
        console.log(`On est ${jour}. Tu as cours sur le Discord MolenGeek puis tu dois jouer à Among Us.`);
        break;
    case "mercredi":
        console.log(`On est ${jour}. Tu as cours sur le Discord MolenGeek puis tu dois jouer à Among Us.`);
        break;
    case "jeudi":
        console.log(`On est ${jour}. Tu as cours sur le Discord MolenGeek puis tu dois jouer à Among Us.`);
        break;
    case "samedi":
        console.log(`On est ${jour}. C'est le jour de la sieste.`);
        break;
    case "dimanche":
        console.log(`On est ${jour}. C'est aussi le jour de la sieste`);
        break;
    default:
        console.log(`${jour} n'est un jour`);
        break;
}
// 2. Sortez couverts
var meteo;
(function (meteo) {
    meteo[meteo["nuages"] = 0] = "nuages";
    meteo[meteo["pluie"] = 1] = "pluie";
    meteo[meteo["soleil"] = 2] = "soleil";
})(meteo || (meteo = {}));
let type = parseInt(prompt("un type de météo (0 pour des nuages, 1 pour la pluie et 3 pour le soleil):"));
switch (type) {
    // 0
    case meteo.nuages:
        console.log('il y a des nuages');
        break;
    // 1
    case meteo.pluie:
        console.log('il y a de la pluie');
        break;
    // 2 
    case meteo.soleil:
        console.log('il y a du soleil');
        break;
    default:
        console.log('ce n\'est pas un nombre valide');
        break;
}
// 3. Les 2 font la pair
let nombre = parseInt(prompt("donnez un nombre:"));
switch (Math.abs(nombre % 2)) {
    case 1:
        console.log(`${nombre} est un nombre impair`);
        break;
    case 0:
        console.log(`${nombre} est un nombre pair`);
        break;
    default:
        console.log(`${nombre} n'est pas un nombre`);
        break;
}
// 4. Maths "avancée"
let calcul = prompt("un premier nombre, un opérateur mathématique et un second nombre séparé par des espaces.").split(" ");
switch (calcul[1]) {
    case "+":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "*":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "-":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "/":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    default:
        console.log("ce n'est pas un calcul valide");
        break;
}
// version regex
let text = prompt("un premier nombre, un opérateur mathématique et un second nombre.");
calcul = [];
let regex = /(-?\d+)\s*(\+|\-|\*|\/)\s*(-?\d+)/;
if (regex.test(text)) {
    calcul = text.match(regex).slice(1, 4);
}
switch (calcul[1]) {
    case "+":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "*":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "-":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    case "/":
        console.log(...calcul, "=", eval(calcul.join("")));
        break;
    default:
        console.log("ce n'est pas un calcul valide");
        break;
}
