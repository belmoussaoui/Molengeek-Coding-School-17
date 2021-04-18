import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";
import Cache from "../core/cache.js";

export default class Singh extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();

        const geom = new THREE.BoxBufferGeometry(0.244 / 2, 0.005, 0.402 / 2);
        const mat1 = new THREE.MeshPhongMaterial({
            color: 0x11473a,
            flatShading: true,
        });
        const book = Cache.get("book");
        const mat2 = new THREE.MeshPhongMaterial({
            map: book,
            flatShading: true,
        });

        const mesh = new THREE.Mesh(geom, [mat1, mat1, mat2, mat1, mat1, mat1]);
        this.add(mesh);

        const geom1 = new THREE.BoxBufferGeometry(0.001, 0.03, 0.402 / 2);
        const mesh1 = new THREE.Mesh(geom1, mat1);
        mesh1.translateY(-0.015);
        mesh1.translateX(-0.244 / 4);
        this.add(mesh1);

        const geom2 = new THREE.BoxBufferGeometry(0.244 / 2, 0.005, 0.402 / 2);
        const mesh2 = new THREE.Mesh(geom2, mat1);
        mesh2.translateY(-0.03);
        // mesh2.translateX(-0.244 / 4);
        this.add(mesh2);

        const geom3 = new THREE.BoxBufferGeometry(
            0.244 / 2 - 0.002,
            0.024,
            0.402 / 2
        );
        const mat3 = new THREE.MeshPhongMaterial({ color: 0xf8ecc2 });
        const mesh3 = new THREE.Mesh(geom3, mat3);
        mesh3.translateY(-0.015);
        // mesh2.translateX(-0.244 / 4);
        this.add(mesh3);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick();
        Game.scene = "object3D";
        Game.objectId = 2;
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
