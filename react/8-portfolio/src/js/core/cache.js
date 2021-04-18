import * as THREE from "../../../node_modules/three/build/three.module.js";

export default class Cache {
    static textureCache = {};
    static imageCache = {};
    static loader = new THREE.TextureLoader();

    constructor() {
        throw new Error("This is a static class");
    }

    static setupLoad(manager) {
        this.loader = new THREE.TextureLoader(manager);
    }

    static load(id, filename) {
        const texture = this.loader.load("./img/" + filename);
        this.textureCache[id] = texture;
    }

    static loadImage(id, filename) {
        const image = new Image();
        image.src = "./img/" + filename;
        this.imageCache[id] = image;
    }

    static get(id, type = "texture") {
        switch (type) {
            case "image":
                return this.textureImage[id];
            default:
                return this.textureCache[id];
        }
    }

    static isReady() {
        for (const cache in this.imageCache) {
            if (!this.imageCache[cache].complete) {
                return false;
            }
        }
        return true;
    }
}
