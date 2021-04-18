import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";

export default class Bilal extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
        this.name = "À propos";
    }

    create() {
        super.create();
        const loader = new THREE.FontLoader();

        loader.load("./fonts/helvetica_neue.json", this.onLoad.bind(this));
    }

    onLoad(font) {
        //B
        let geometry = new THREE.TextGeometry("B", {
            font: font,
            size: 0.08,
            height: 0.02,
            curveSegments: 2,
        });
        const material = new THREE.MeshPhongMaterial({
            color: 0xefefef,
            flatShading: true,
        });
        let object = new THREE.Mesh(geometry, material);
        object.receiveShadow = true;
        object.castShadow = true;
        object.translateX(-0.15);
        object.translateZ(0.05);
        object.rotation.set(0, 0.3, 0);
        this.add(object);

        //I
        geometry = new THREE.TextGeometry("I", {
            font: font,
            size: 0.08,
            height: 0.02,
            curveSegments: 2,
        });
        object = new THREE.Mesh(geometry, material);
        object.receiveShadow = true;
        object.castShadow = true;
        object.translateX(-0.05);
        object.translateZ(0.02);

        this.add(object);

        //L
        geometry = new THREE.TextGeometry("L", {
            font: font,
            size: 0.08,
            height: 0.02,
            curveSegments: 2,
        });
        object = new THREE.Mesh(geometry, material);
        object.receiveShadow = true;
        object.castShadow = true;
        object.translateX(0);
        object.translateZ(0.02);
        this.add(object);
        object = new THREE.Mesh(geometry, material);
        object.receiveShadow = true;
        object.castShadow = true;
        object.translateX(0.18);
        object.translateZ(0.04);
        object.rotation.set(0, -0.35, 0);
        this.add(object);

        //A
        geometry = new THREE.TextGeometry("A", {
            font: font,
            size: 0.08,
            height: 0.02,
            curveSegments: 2,
        });
        object = new THREE.Mesh(geometry, material);
        object.receiveShadow = true;
        object.castShadow = true;
        object.translateX(0.08);
        object.translateZ(0.02);
        object.rotation.set(0, -0.1, 0);
        this.add(object);

        // geometry = new THREE.TextGeometry("Game dev", {
        //     font: font,
        //     size: 0.03,
        //     height: 0.005,
        //     curveSegments: 2,
        // });
        // // let material = new THREE.MeshPhongMaterial({
        // //     color: 0xefefef,
        // //     flatShading: true,
        // // });
        // object = new THREE.Mesh(geometry, material);
        // object.receiveShadow = true;
        // object.castShadow = true;
        // object.translateX(-0.45);
        // object.translateZ(0.1);
        // object.rotation.set(0, 0, 0);
        // this.add(object);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick();
        Game.scene = "about";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
