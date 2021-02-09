export default class Patient {
    constructor(nom, maladie, argent) {
        this.nom = nom;
        this.maladie = maladie;
        this.argent = argent;
        this.poche = "vide";
        this.traitement = "vide";
        this.etatSante = "malade";
    }

    goTo(depart, dest) {
        dest.push(this);
        depart.slice(depart.indexOf(this), 1);
        // console.log(`${this.nom} est entré`);
    }

    takeCare(traitements) {
        let traitement
        for (let t of traitements) {
            if (t.traitement === this.traitement) {
                traitement = t;
                break;
            }
        }
        console.log(`Le traitement de ${this.nom} coûte ${traitement.prix}$`);
        if (this.peutPayer(traitement.prix)) {
            this.argent -= traitement.prix;
            this.etatSante = "bien";
            console.log(`${this.nom} est soigné`);
            return true;
        }
        return false;
    }

    peutPayer(prix) {
        return prix <= this.argent;
    }

    payer(personne, prix=50) {
        if (this.peutPayer(prix)) {
            this.argent -= prix;
            personne.argent += prix;
            return true;
        }
        return false;
    }
}