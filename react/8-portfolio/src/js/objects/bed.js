import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";

export default class Bed extends GameObject {
    constructor(...args) {
        super(args);
        //this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();
        let object;
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });

        const geom1 = new THREE.BoxBufferGeometry(0.3, 0.44, 0.05);
        object = new THREE.Mesh(geom1, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(-0.36);
        object.translateY(0.3);
        object.translateZ(1);

        object = new THREE.Mesh(geom1, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0.36);
        object.translateY(0.3);
        object.translateZ(1);

        const geom2 = new THREE.BoxBufferGeometry(0.03, 0.28, 2);
        object = new THREE.Mesh(geom2, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(-0.48);
        object.translateY(0.3);
        object.translateZ(0);

        object = new THREE.Mesh(geom2, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0.48);
        object.translateY(0.3);
        object.translateZ(0);

        const geom3 = new THREE.BoxBufferGeometry(0.7, 0.4, 0.03);
        object = new THREE.Mesh(geom3, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0);
        object.translateY(0.31);
        object.translateZ(1);

        const geom4 = new THREE.BoxBufferGeometry(0.23, 0.7, 0.05);
        object = new THREE.Mesh(geom4, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(-0.4);
        object.translateY(0.4);
        object.translateZ(-1);

        object = new THREE.Mesh(geom4, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0.4);
        object.translateY(0.4);
        object.translateZ(-1);

        const geom5 = new THREE.BoxBufferGeometry(0.7, 0.58, 0.03);
        object = new THREE.Mesh(geom5, mat);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0);
        object.translateY(0.43);
        object.translateZ(-1);

        const geom6 = new THREE.BoxBufferGeometry(0.95, 0.2, 1.92);
        const mat1 = new THREE.MeshPhongMaterial({
            color: 0xb04542,
            flatShading: true,
        });
        object = new THREE.Mesh(geom6, mat1);
        object.castShadow = true;
        object.receiveShadow = true;
        this.add(object);
        object.translateX(0);
        object.translateY(0.35);
        object.translateZ(0);

        const geom7 = new THREE.BoxGeometry(0.6, 0.15, 0.35);
        const mat2 = new THREE.MeshPhongMaterial({
            color: 0xcdcdcd,
            flatShading: true,
        });

        object = new THREE.Mesh(geom7, mat2);
        object.castShadow = false;
        object.receiveShadow = true;

        object.translateZ(-0.65);
        object.translateY(0.48);
        object.translateX(0);
        // this.object.scale.set(0.8, 0.4, 1.3);

        this.add(object);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick();
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
