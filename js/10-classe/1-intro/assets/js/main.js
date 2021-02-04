var __classPrivateFieldSet = (this && this.__classPrivateFieldSet) || function (receiver, privateMap, value) {
    if (!privateMap.has(receiver)) {
        throw new TypeError("attempted to set private field on non-instance");
    }
    privateMap.set(receiver, value);
    return value;
};
var _age, _ville;
class Personnage {
    constructor(age, nom, ville) {
        _age.set(this, void 0);
        _ville.set(this, void 0);
        __classPrivateFieldSet(this, _age, age);
        this.nom = nom;
        __classPrivateFieldSet(this, _ville, ville);
    }
}
_age = new WeakMap(), _ville = new WeakMap();
const perso1 = new Personnage(20, "nom1", "ville1");
const perso2 = new Personnage(30, "nom2", "ville2");
//  EXO2
// // add method only in perso1
// perso1.sePresenter = function() {
//     console.log(this);
// }
// add a method to Personnage
Personnage.prototype.sePresenter = function () {
    // ne peut pas fonctionner car #nom est privé et en dehors du corps de la classe!
    // console.log("Bonjour, je m'appelle", this.#nom, "!");
    console.log("Bonjour, je m'appelle", this.nom, "!");
};
perso1.sePresenter();
perso2.sePresenter();
