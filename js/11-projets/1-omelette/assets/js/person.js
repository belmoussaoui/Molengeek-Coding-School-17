export default class Person {
    name;
    place;
    money;
    #rightHand;
    #leftHand;

    constructor(name, place, money = 0) {
        this.name = name;
        this.place = place;
        this.money = money;
        this.#rightHand = [];
        this.#leftHand = [];
    }

    toMove(newPlace, delay = 0) {
        this.place.removePerson(this);
        this.place = newPlace;
        this.place.addPerson(this);
        console.log(`${this.name} est actuellement à ${this.place.name}`);
    }

    pay(article) {
        if (this.money >= article.price) {
            this.money -= article.price;
            console.log(`${this.name} paye ${article.name} au prix de ${article.price}`);
        }
    }

    cut(ingredient, tool) {
        if (ingredient.state === "entier") {
            console.log(`${this.name} coupe ${ingredient.name}`)
            ingredient.state = tool.action;
        } else {
            console.log(`${this.name} ne peut pas couper ${ingredient.name} (${ingredient.state})`)
        }
    }

    leftTakeItem(index = 0) {
        this.#leftHand = this.place.getItem(index);
        console.log(`${this.name} a pris ${this.#leftHand[0].type}`);
    }

    leftDropItem(index = 0) {
        let item = this.#leftHand.splice(index, 1).shift();
        this.place.addItem(item);
        console.log(`${this.name} a déposé ${item.type}`);
    }

    addInCart(item) {
        this.#leftHand[0].content.push(item);
        console.log(`${this.name} ajoute ${item.name}`);
    }

    cartContent() {
        return this.#leftHand[0].content.slice(0);
    }

    *dropCart(recipe) {
        for (let elem of this.#leftHand[0].content) {
            recipe.addContent(elem);
            yield console.log(`${this.name} dépose ${elem.name} dans ${recipe.name}`);
        }
        this.#leftHand[0].content = [];
    }


}