import * as THREE from "../../../../node_modules/three/build/three.module.js";
import { Object3D } from "three";

export default class Shelf extends Object3D {
    constructor(...args) {
        super(args);
        this.create();
    //     this.interactive = true;
    }

    create() {
        const geom = new THREE.BoxBufferGeometry(1.2, 0.1, 0.35);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });
        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
    }
}
