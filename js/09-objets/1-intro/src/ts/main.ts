interface Person {
    nom?: string;
    prenom?: string;
    age?: number;
    taille?: number;
    saluer?: () => void;
};

interface Voleur extends Person {
    usurpation: (arg1: Person) => void;
};

// 1
let personne1: Person = {
    nom: "el moussaoui",
    prenom: "bilal",
    age: 24,
    taille: 180
};
console.log(personne1.taille);

// 2
let personne2: Person = {
    nom: "nom",
    prenom: "prenom",
    age: 35,
    taille: 178
};
let personne3: Person = {};

// 3
personne3.nom = "nom3";
personne3.prenom = "prenom3";
personne3.age = 41;
personne3.taille = 185;

// 4
const personne4: Person = {
    saluer: () => {
        console.log("salutation");
    }
};
personne4.saluer();

// 5
let voleur: Voleur = {
    nom: "voleur",
    age: 20,
    usurpation: (cible: Person) => {
        voleur.nom = cible.nom;
        voleur.age = cible.age;
    }
};

console.log(voleur);
voleur.usurpation(personne3);
console.log(voleur);
