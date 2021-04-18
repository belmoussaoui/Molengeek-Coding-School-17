import GameObject from "./game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import Cache from "./cache.js";

export default class Room extends GameObject {
    constructor(...args) {
        super(args);
    }

    initialize(width = 3.1, height = 1.8, depth = 2.2, thickness = 0.1) {
        this.w = width;
        this.h = height;
        this.d = depth;
        this.t = thickness;
    }

    create() {
        this.createFloor();
        this.createWall1();
        this.createWall2();
    }

    createFloor() {
        let geom = new THREE.BoxGeometry(
            this.w - this.t,
            this.t,
            this.d - this.t
        );
        let mat = new THREE.MeshPhongMaterial({
            color: 0xefefef,
        });

        this.floor = new THREE.Mesh(geom, mat);
        this.floor.receiveShadow = true;
        this.add(this.floor);
        this.floor.translateX(-this.t / 2);
        this.floor.translateZ(this.t / 2);

        let geom1 = new THREE.BoxGeometry(
            this.w - this.t,
            this.t / 2,
            this.d - this.t
        );

        const texture = Cache.get("texture_floor");
        texture.wrapS = THREE.RepeatWrapping;
        texture.wrapT = THREE.RepeatWrapping;
        texture.repeat.set(2, 3);
        texture.offset.set(1, 2);
        texture.rotation = THREE.MathUtils.degToRad(90);
        let mat1 = new THREE.MeshPhongMaterial({
            map: texture,
        });

        this.wood = new THREE.Mesh(geom1, [mat, mat1, mat1, mat, mat1, mat]);
        this.wood.receiveShadow = true;
        this.add(this.wood);
        this.wood.translateX(-this.t / 2);
        this.wood.translateZ(this.t / 2);
        this.wood.translateY(this.t - 0.03);
    }

    createWall1() {
        const geom = new THREE.BoxGeometry(
            this.w - this.t,
            this.h + this.t,
            this.t
        );
        const mat = new THREE.MeshPhongMaterial({
            color: 0xffffff,
            vertexColors: THREE.FaceColors,
        });

        geom.faces[8].color.setHex(0x639fab);
        geom.faces[9].color.setHex(0x639fab);

        this.wall1 = new THREE.Mesh(geom, mat);
        this.wall1.translateX(-this.t / 2);
        this.wall1.translateZ(-this.d / 2 + this.t / 2);
        this.wall1.translateY(this.h / 2 + this.t / 2);
        this.wall1.castShadow = true;
        this.wall1.receiveShadow = true;
        this.add(this.wall1);
        this.wall1.translateY(-this.t / 2);
    }

    createWall2() {
        const geom = new THREE.BoxGeometry(this.t, this.h + this.t, this.d);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xffffff,
            vertexColors: THREE.FaceColors,
        });

        geom.faces[2].color.setHex(0xb8dbd9);
        geom.faces[3].color.setHex(0xb8dbd9);
        this.wall2 = new THREE.Mesh(geom, mat);
        this.wall2.translateX(this.w / 2 - this.t / 2);
        this.wall2.translateY(this.h / 2);
        this.wall2.castShadow = true;
        this.wall2.receiveShadow = true;
        this.wall2.castShadow = true;
        this.wall2.receiveShadow = true;
        this.add(this.wall2);
    }
}
