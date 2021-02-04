// exo1
var __classPrivateFieldSet = (this && this.__classPrivateFieldSet) || function (receiver, privateMap, value) {
    if (!privateMap.has(receiver)) {
        throw new TypeError("attempted to set private field on non-instance");
    }
    privateMap.set(receiver, value);
    return value;
};
var __classPrivateFieldGet = (this && this.__classPrivateFieldGet) || function (receiver, privateMap) {
    if (!privateMap.has(receiver)) {
        throw new TypeError("attempted to get private field on non-instance");
    }
    return privateMap.get(receiver);
};
var _personnes, _lieu, _personnes_1;
class Lieu {
    constructor(nom, personnes = []) {
        _personnes.set(this, void 0);
        this.nom = nom;
        __classPrivateFieldSet(this, _personnes, personnes);
    }
    ajouterPersonne(personne) {
        __classPrivateFieldGet(this, _personnes).push(personne);
    }
    supprimerPersonne(personne) {
        const index = __classPrivateFieldGet(this, _personnes).indexOf(personne);
        if (index >= 0) {
            __classPrivateFieldGet(this, _personnes).splice(index, 1);
        }
    }
}
_personnes = new WeakMap();
class Personne {
    constructor(nom, prenom, argent = 0) {
        _lieu.set(this, void 0);
        this.nom = nom;
        this.prenom = prenom;
        this.argent = argent;
        __classPrivateFieldSet(this, _lieu, maison);
    }
    afficher() {
        console.log(`${$temps.getHeure()} ${__classPrivateFieldGet(this, _lieu).nom}`);
    }
    seDeplacer(bus, lieu, duree = 0) {
        console.log(`${$temps.getHeure()} ${__classPrivateFieldGet(this, _lieu).nom} -> ${lieu.nom}`);
        if (bus) {
            bus.embarquer(this);
            bus.debarquer(this);
        }
        __classPrivateFieldSet(this, _lieu, lieu);
        $temps.ajouter(duree);
        this.afficher();
    }
}
_lieu = new WeakMap();
class Bus {
    constructor() {
        _personnes_1.set(this, void 0);
        this.caisse = 0;
        this.prix = 2.8;
        __classPrivateFieldSet(this, _personnes_1, []);
    }
    embarquer(passager) {
        if (passager.argent >= this.prix) {
            this.caisse += this.prix;
            passager.argent -= this.prix;
            __classPrivateFieldGet(this, _personnes_1).push(passager);
            __classPrivateFieldGet(this, _personnes_1).pop();
        }
    }
    debarquer(passager) {
        const index = __classPrivateFieldGet(this, _personnes_1).indexOf(passager);
        if (index >= 0) {
            __classPrivateFieldGet(this, _personnes_1).splice(index, 1);
        }
    }
}
_personnes_1 = new WeakMap();
class Temps {
    constructor() {
        this.heure = 8;
        this.minutes = 0;
    }
    getTempsPasse() {
        return (this.heure * 60 + this.minutes) - 8 * 60;
    }
    getHeure() {
        return this.heure.toString().padStart(2, '0') + ":"
            + this.minutes.toString().padStart(2, '0');
    }
    ajouter(duree) {
        this.heure += Math.floor((this.minutes + duree) / 60);
        this.heure %= 24;
        this.minutes = (this.minutes + duree) % 60;
    }
}
const molengeek = new Lieu("MolenGeek");
const snack = new Lieu("Snack");
const maison = new Lieu("Maison");
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
$temps.ajouter(3 * 60 + 40);
perso.seDeplacer(bus, maison, 15);
// console.log(molengeek, snack, maison);
// console.log(bus.caisse, perso.argent);
