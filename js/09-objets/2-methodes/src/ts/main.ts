// Consigne 1
// Exo 1
interface Person {
    nom: string,
    prenom?: string,
    panier?: string[],
    sePresenter?: () => void
}

interface Voleur extends Person {
    derober?: () => void
}

const perso : Person = {
    nom: "el moussaoui",
    prenom: "bilal",
    sePresenter: function() {
        console.log(`Bonjour je m'appelle ${perso.nom} ${perso.prenom}`);
    }
};
perso.sePresenter();

// Exo 2
let objet = {
    nom: "el moussaoui",
    age: null,
    setAge: function(age) {
        this.age = age;
        alert(`${this.nom} a ${this.age} ans`);
    }
}
objet.setAge(20);

// Consigne 2
let perso1: Voleur = {
    nom: "François",
    panier: ["huile, tomate"]
}

let perso2: Person = {
    nom: "Sergio",
    panier: ["pain"]
}

perso1.derober = function() {
    // vole les deux premiers ingredients
    for (let index = 0; index < 2; index++) {
        if (perso2.panier.length > 0) {
            this.panier.push(perso2.panier.shift());
        }
    }
};