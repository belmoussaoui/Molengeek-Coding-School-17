export default class Ingredient {
    name;
    state;
    price;
    
    constructor(name, price=1, state="") {
        this.name = name;
        this.state = state;
        this.price = price;
    }
}