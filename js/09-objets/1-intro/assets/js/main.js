;
;
// 1
let personne1 = {
    nom: "el moussaoui",
    prenom: "bilal",
    age: 24,
    taille: 180
};
console.log(personne1.taille);
// 2
let personne2 = {
    nom: "nom",
    prenom: "prenom",
    age: 35,
    taille: 178
};
let personne3 = {};
// 3
personne3.nom = "nom3";
personne3.prenom = "prenom3";
personne3.age = 41;
personne3.taille = 185;
// 4
const personne4 = {
    saluer: () => {
        console.log("salutation");
    }
};
personne4.saluer();
// 5
let voleur = {
    nom: "voleur",
    age: 20,
    usurpation: (cible) => {
        voleur.nom = cible.nom;
        voleur.age = cible.age;
    }
};
console.log(voleur);
voleur.usurpation(personne3);
console.log(voleur);
