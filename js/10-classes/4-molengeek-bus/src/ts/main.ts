// exo1

class Lieu {
    nom: string;
    #personnes: Personne[];

    constructor(nom: string, personnes:Personne[]=[]) {
        this.nom = nom;
        this.#personnes = personnes;
    }

    ajouterPersonne(personne: Personne) {
        this.#personnes.push(personne);
    }

    supprimerPersonne(personne: Personne) {
        const index = this.#personnes.indexOf(personne);
        if (index >= 0) {
            this.#personnes.splice(index, 1);
        }
    }
}

class Personne {
    nom: string;
    prenom: string;
    argent: number;
    #lieu: Lieu;

    constructor(nom: string, prenom: string, argent: number=0) {
        this.nom = nom;
        this.prenom = prenom;
        this.argent = argent;
        this.#lieu = maison;
    }

    afficher() {
        console.log(`${$temps.getHeure()} ${this.#lieu.nom}`);
    }

    seDeplacer(bus: Bus, lieu: Lieu, duree: number=0) {
        console.log(`${$temps.getHeure()} ${this.#lieu.nom} -> ${lieu.nom}`);
        if (bus) {
            bus.embarquer(this);
            bus.debarquer(this);
        }
        this.#lieu = lieu;
        $temps.ajouter(duree);
        this.afficher();
    }
}

class Bus {
    caisse: number;
    prix: number;
    #personnes: Personne[];

    constructor() {
        this.caisse = 0;
        this.prix = 2.8;
        this.#personnes = [];
    }

    embarquer(passager: Personne) {
        if (passager.argent >= this.prix) {
            this.caisse += this.prix;
            passager.argent -= this.prix;
            this.#personnes.push(passager);
            this.#personnes.pop();
        }
    }

    debarquer(passager: Personne) {
        const index = this.#personnes.indexOf(passager);
        if (index >= 0) {
            this.#personnes.splice(index, 1);
        }
    }
}

class Temps {
    heure: number;
    minutes: number
    constructor() {
        this.heure = 8;
        this.minutes = 0;
    }

    getTempsPasse() {
        return (this.heure * 60 + this.minutes) - 8 * 60
    }

    getHeure() {
        return this.heure.toString().padStart(2, '0') + ":"
            + this.minutes.toString().padStart(2, '0')
    }

    ajouter(duree: number) {
        this.heure += Math.floor((this.minutes + duree) / 60);
        this.heure %= 24;
        this.minutes = (this.minutes + duree) % 60;
    }
}

const molengeek = new Lieu("MolenGeek");
const snack = new Lieu("Snack")
const maison = new Lieu("Maison")

const perso = new Personne("El Moussaoui", "Bilal", 200);

const bus = new Bus();
const $temps = new Temps();

perso.afficher();
$temps.ajouter(30);
perso.seDeplacer(bus, molengeek, 15);
$temps.ajouter(60 * 4);
perso.seDeplacer(bus, snack, 15);
$temps.ajouter(10);
perso.seDeplacer(null, molengeek, 20);
$temps.ajouter(3 * 60 + 40)
perso.seDeplacer(bus, maison, 15);

// console.log(molengeek, snack, maison);
// console.log(bus.caisse, perso.argent);