class Objet {
    constructor(nom, prix) {
        this.nom = nom;
        this.prix = prix;
    }
}
let boite = [];
boite.push(new Objet("test", 10), new Objet("test2", 20));
class Personnage {
    constructor(nom, sac, number) {
        this.nom = nom;
        this.sac = sac;
        this.argent = number;
    }
    prendre(objet) {
        let index = boite.indexOf(objet);
        if (index >= 0) {
            this.sac = this.sac.concat(boite.splice(index, 1));
        }
    }
    acheter(vendeur, objet) {
        let index = vendeur.sac.indexOf(objet);
        if (index >= 0 && this.argent >= objet.prix) {
            this.argent -= objet.prix;
            vendeur.argent += objet.prix;
            this.sac = this.sac.concat(vendeur.sac.splice(index, 1));
        }
    }
}
const perso1 = new Personnage("perso1", [], 100);
const perso2 = new Personnage("perso2", [], 100);
console.log(perso1.sac, perso2.sac);
perso1.prendre(boite[0]);
perso2.prendre(boite[0]);
console.log(perso1.sac, perso2.sac);
perso1.acheter(perso2, perso2.sac[0]);
perso2.acheter(perso1, perso1.sac[0]);
console.log(perso1.sac, perso2.sac);
