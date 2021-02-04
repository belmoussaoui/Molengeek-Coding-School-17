// Exo1
class Lieu {
    nom: string;
    contenu: string[];
    ingredients: string[];

    constructor(nom: string) {
        this.nom = nom;
        this.contenu = [];
        if (nom === 'epicerie' || nom === 'cuisine')
            this.addIngredients()
    }

    addIngredients() {
        this.ingredients = [];
    }
}

let maison = new Lieu("maison");
let epicerie = new Lieu("epicerie");
let cuisine = new Lieu("cuisine");


// Exo2
class Ingredient {
    nom: string;
    etat: string;
    prix: number;

    constructor(nom: string, etat: string, prix: number) {
        this.nom = nom;
        this.etat = etat;
        this.prix = prix;
    }
}

let poivron = new Ingredient("poivron", "entier", 1);
let oignon = new Ingredient("oignon", "entier", 2);
let oeuf = new Ingredient("oeuf", "entier", 4);
let epice = new Ingredient("epice", "moulu", 3.25);
let paprika = new Ingredient("paprika", "moulu", 1.5);
let fromage = new Ingredient("fromage", "coupé", 1.6);

// Exo3
class Personne {
    nom: string;
    lieu: string;
    argent: number;
    panier: string[];
    constructor(nom: string, lieu: string, argent: number, panier?: string[]) {
        this.nom = nom;
        this.lieu = lieu;
        this.argent = argent;
        this.panier = panier
    }

    se_deplacer(x: string) {
        this.lieu = x;
    }

    payer(x: number) {
        if (this.argent -x >= 0) this.argent -= x;
        else console.log("vous n'avez pas assez d'argent!");
    }

    couper(x, y) {
        // ???
    }
}

let personne1 = new Personne("Maxime", "néant", 100)





