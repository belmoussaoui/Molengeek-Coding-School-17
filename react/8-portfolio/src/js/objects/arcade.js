import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";

export default class Arcade extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();
        let object;
        let video = document.getElementById("video1");
        video.play();
        const texture = new THREE.VideoTexture(video);

        let mat1 = new THREE.MeshPhongMaterial({
            map: texture,
        });

        const mat = new THREE.MeshPhongMaterial({
            color: 0xffffff,
            flatShading: true,
        });

        let mat3 = new THREE.MeshPhongMaterial({
            color: 0xffffff,
            flatShading: true,
        });

        let geom3 = new THREE.BoxBufferGeometry(0.01, 0.01, 0.01);
        object = new THREE.Mesh(geom3, mat3);
        object.castShadow = true;
        this.add(object);
        object.rotation.set(0, -0.2, 0);
        object.translateY(-0.05);
        object.translateZ(-0.02);

        object = new THREE.Mesh(geom3, mat3);
        object.castShadow = true;
        this.add(object);
        object.rotation.set(0, -0.2, 0);
        object.translateY(-0.05);
        object.translateZ(-0.015);
        object.translateX(0.16);

        const geom = new THREE.BoxBufferGeometry(0.15 * 1.33, 0.15, 0.01);
        object = new THREE.Mesh(geom, [mat, mat, mat, mat, mat1, mat]);
        object.castShadow = true;
        object.translateY(0.03);
        object.translateX(0.08);
        this.add(object);
        object.rotation.set(0, -0.2, 0);

        let video2 = document.getElementById("video2");
        video2.play();
        const texture2 = new THREE.VideoTexture(video2);

        let mat2 = new THREE.MeshPhongMaterial({
            map: texture2,
        });

        const geom2 = new THREE.BoxBufferGeometry(0.1, 0.1 * 1.77, 0.01);
        object = new THREE.Mesh(geom2, [mat, mat, mat, mat, mat2, mat]);
        object.castShadow = true;
        object.translateX(-0.11);
        object.translateY(0.043);
        object.rotation.set(0, 0.3, 0);
        this.add(object);

        object = new THREE.Mesh(geom3, mat3);
        object.castShadow = true;
        this.add(object);
        object.translateY(-0.05);
        object.translateZ(0.005);
        object.translateX(-0.14);
        object.rotation.set(0, 0.3, 0);

        object = new THREE.Mesh(geom3, mat3);
        object.castShadow = true;
        this.add(object);
        object.translateY(-0.05);
        object.translateZ(-0.015);
        object.translateX(-0.08);
        object.rotation.set(0, 0.3, 0);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick();
        Game.scene = "portfolio";
        Game.state = "projet3";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
