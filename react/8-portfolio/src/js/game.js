export class Game {
    static objectId = 0;
    static scene = "";
    static state = "";

    constructor() {
        throw new Error("This is a static class");
    }

    static clear() {
        this.scene = "";
        this.state = "";
    }
}
