import * as THREE from "../../../node_modules/three/build/three.module.js";
import GameObject from "../core/game_object.js";

export default class Floor extends GameObject {
    constructor(...args) {
        super(args);
        // this.interactive = true;
    }

    initialize() {
        super.initialize();
        this.name = "Portfolio";
    }

    create() {
        super.create();
        const geom = new THREE.BoxBufferGeometry(0.48, 0.08, 1.6);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });
        this.object = new THREE.Mesh(geom, mat);
        //this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(0.4);

        const geom1 = new THREE.BoxBufferGeometry(0.5, 0.71, 0.1);
        const mat1 = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });
        this.object = new THREE.Mesh(geom1, mat1);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateZ(1.6 / 2 + 0.05);
        this.object.translateY(0.09);

        const geom2 = new THREE.BoxBufferGeometry(0.5, 0.71, 0.1);
        const mat2 = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });
        this.object = new THREE.Mesh(geom2, mat2);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(0.09);
        this.object.translateZ(-(1.6 / 2 + 0.05));

        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(-0.22);
        this.createPart2();
        this.createBox();
    }

    createPart2() {
        const geom = new THREE.BoxBufferGeometry(0.47, 0.6, 0.04);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });

        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(0.08);

        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(0.08);
        this.object.translateZ(-0.42);

        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(0.08);
        this.object.translateZ(0.42);

        const geom1 = new THREE.BoxBufferGeometry(0.5, 0.03, 1.7);
        const mat1 = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });

        this.object = new THREE.Mesh(geom1, mat1);
        //this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.object.translateY(0.08);
        this.object.translateX(0.03);
        this.add(this.object);
    }

    createBox() {
        // this.add(new Box(0.23, 0.21 + 0.41));
        this.add(new Box(this, -0.05, 0.21 + 0.41));
        this.add(new Box(this, -0.05, 0.21));
        this.add(new Box(this, -0.05, 0.21 - 0.42));
        this.add(new Box(this, -0.05, 0.21 - 0.41 * 2));
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

class Box extends GameObject {
    constructor(...args) {
        super(args);
        // this.interactive = true;
    }

    initialize(p, y, z) {
        super.initialize();
        this.p = p;
        this.y = y;
        this.z = z;
    }

    create(y, z) {
        super.create();
        const geom = new THREE.BoxBufferGeometry(0.43, 0.27, 0.38);
        const mat = new THREE.MeshPhongMaterial({
            color: 0x850606,
            flatShading: true,
            opacity: 0.8,
            transparent: true,
            side: THREE.DoubleSide,
        });
        this.object = new THREE.Mesh(geom, mat);
        //this.object.castShadow = true;
        this.object.receiveShadow = true;
        // this.add(this.object);
        this.object.translateY(this.y);
        this.object.translateZ(this.z);

        const x = 0;
        y = 0;

        const box = new THREE.Shape();

        box.moveTo(x + 0.2, y + 0.14);
        box.lineTo(x - 0.2, y + 0.14);
        box.lineTo(x - 0.2, y - 0.14);
        box.lineTo(x + 0.2, y - 0.14);
        box.lineTo(x + 0.2, y + 0.14);

        const geometry = new THREE.ShapeGeometry(box);
        const mesh = new THREE.Mesh(geometry, mat);
        //mesh.receiveShadow = true;
        mesh.castShadow = true;
        // this.add(this.object);
        mesh.translateY(this.y);
        mesh.translateZ(this.z);
        mesh.translateX(-0.2);
        mesh.rotation.set(0, Math.PI / 2, 0);
        this.add(mesh);
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
