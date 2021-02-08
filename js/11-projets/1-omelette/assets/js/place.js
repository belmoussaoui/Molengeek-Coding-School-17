
export default class Place {
    name;
    #persons;
    #items;
    #content;

    constructor(name, items=[]) {
        this.name = name;
        this.#persons = [];
        this.#items = items;
        this.#content = [];
    }

    addContent(object) {
        this.#content.push(object);
    }

    content() {
        return this.#content.slice(0);
    }

    getItem(index) {
        return this.#items.splice(index, 1);
    }

    addItem(item) {
        this.#items.push(item);
    }

    addPerson(person) {
        this.#persons.push(person);
    }

    removePerson(person) {
        const index = this.#persons.indexOf(person);
        if (index >= 0) {
            this.#persons.splice(index, 1);
        }
    }
}