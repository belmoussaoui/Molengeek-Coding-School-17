import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import Cache from "../core/cache.js";
import { Game } from "../game.js";

export default class BatenKaitos extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
        this.objectId = 3;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();

        const texture = Cache.get("baten");

        let mat1 = new THREE.MeshPhongMaterial({
            map: texture,
            // side: THREE.DoubleSide,
            //color: 0x0,
        });
        let geom = new THREE.PlaneGeometry(0.5, 0.5 * 1.5, 10);
        const object = new THREE.Mesh(geom, mat1);
        this.add(object);
        object.castShadow = true;
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick(7, 12);
        Game.scene = "object3D";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
