// EXO1
interface Presentation {
    sePresenter?: () => void
}

class Personnage implements Presentation {
    #age: number;
    nom: string;
    #ville: string;
    constructor(age: number, nom: string, ville: string) {
        this.#age = age;
        this.nom = nom;
        this.#ville = ville;
    }

    // weak type detection :-(
    // https://stackoverflow.com/a/47930521
    sePresenter?: () => void
}

const perso1 = new Personnage(20, "nom1", "ville1");
const perso2 = new Personnage(30, "nom2", "ville2");

//  EXO2
// // add method only in perso1
// perso1.sePresenter = function() {
//     console.log(this);
// }

// add a method to Personnage
Personnage.prototype.sePresenter = function() {
    // ne peut pas fonctionner car #nom est privé et en dehors du corps de la classe!
    // console.log("Bonjour, je m'appelle", this.#nom, "!");
    console.log("Bonjour, je m'appelle", this.nom, "!");
}
perso1.sePresenter();
perso2.sePresenter();