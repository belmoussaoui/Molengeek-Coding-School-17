class Recipe {
    name;
    _content;

    constructor(name) {
        this.name = name;
        this._content = [];
    }

    addContent(content) {
        this._content.push(content);
    }

    content() {
        return this._content.slice(0);
    }

    shift() {
        return this._content.shift();
    }

}

export class Stove extends Recipe {
    constructor(name) {
        super(name);
    }

    food() {
        setTimeout(() => {
            for (let content of this._content) {
                content.state = "cuit";
            }
            console.log(`${this._content[0].name} a été cuisiné avec succès!`);
        }, 4000);
    }
}

export class Bowl extends Recipe {
    constructor(name) {
        super(name);
    }

    mix(name, price=100, type="plat") {
        this._content = [{ "name": name, "price": price, "state": type }];
        console.log(`${name} a été mélangé avec succès!`);
    }

    
}



