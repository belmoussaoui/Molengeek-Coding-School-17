import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";
import Cache from "../core/cache.js";

export default class FaithRomance extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();
        const loader = new THREE.TextureLoader();

        const texture1 = Cache.get("arias");
        this.createArias(texture1);

        const texture2 = Cache.get("devil");
        this.createDevil(texture2);

        const texture3 = Cache.get("elvire");
        this.createElvire(texture3);

        this.createScene(loader);
    }

    createArias(texture) {
        const mat = new THREE.MeshPhongMaterial({
            map: texture,
            side: THREE.DoubleSide,
            transparent: true,
            alphaTest: 0.5,
        });
        const geom = new THREE.PlaneGeometry(0.12, 0.12 * 1.36, 10);
        const object = new THREE.Mesh(geom, mat);
        this.add(object);
        object.castShadow = true;
        object.translateZ(0.1);
    }

    createDevil(texture) {
        const mat = new THREE.MeshPhongMaterial({
            map: texture,
            side: THREE.DoubleSide,
            transparent: true,
            alphaTest: 0.5,
            //color: 0x0,
        });
        const geom = new THREE.PlaneGeometry(0.18, 0.18 * 1.36, 10);
        const object = new THREE.Mesh(geom, mat);
        object.translateX(-0.09);
        object.translateZ(-0.14);
        object.translateY(0.03);
        object.rotation.set(0, 0.2, 0);
        object.castShadow = true;
        this.add(object);
    }

    createElvire(texture) {
        const mat = new THREE.MeshPhongMaterial({
            map: texture,
            side: THREE.DoubleSide,
            transparent: true,
            alphaTest: 0.5,
            //color: 0x0,
        });

        const geom = new THREE.PlaneGeometry(0.1, 0.1 * 1.52, 10);
        const object = new THREE.Mesh(geom, mat);
        object.translateX(0.09);
        object.translateZ(-0.05);
        object.translateY(-0.005);
        object.rotation.set(0, -0.2, 0);
        object.castShadow = true;
        this.add(object);
    }

    createScene(loader) {
        const floor = Cache.get("floor2");
        const front = Cache.get("front2");
        const wall1 = Cache.get("wall1");
        const roof4 = Cache.get("roof4");
        this.scene = new THREE.Group();
        this.add(this.scene);
        this.scene.translateY(-0.12);

        this.createFloor(floor, front);
        this.createWall(wall1, roof4);
    }

    createFloor(floor, front) {
        const geom1 = new THREE.BoxGeometry(0.7, 0.08, 0.5);
        const geom2 = new THREE.BoxGeometry(0.7, 0.1, 0.2);

        const matFront = new THREE.MeshPhongMaterial({ map: front });
        const matFloor = new THREE.MeshPhongMaterial({ map: floor });

        floor.wrapS = THREE.RepeatWrapping;
        floor.wrapT = THREE.RepeatWrapping;
        floor.repeat.set(7, 5);

        //const mat1 = new THREE.MeshPhongMaterial();
        const mat1 = new THREE.MeshPhongMaterial({ color: 0x0 });

        const floor1 = new THREE.Mesh(geom1, [
            mat1,
            mat1,
            matFloor,
            mat1,
            matFront,
            mat1,
        ]);

        const floorCopy = floor.clone();
        floorCopy.needsUpdate = true;
        floorCopy.repeat.set(7, 3);
        const matFloor2 = new THREE.MeshPhongMaterial({ map: floorCopy });

        const floor2 = new THREE.Mesh(geom2, [
            mat1,
            mat1,
            matFloor2,
            mat1,
            mat1,
            mat1,
        ]);
        floor2.translateZ(-0.2 / 2 - 0.3 / 2);
        this.scene.add(floor1);
        //this.add(floor2);
    }

    createWall(wallT, roof) {
        const geom = new THREE.BoxGeometry(0.7, 0.4, 0.08);
        const mat1 = new THREE.MeshPhongMaterial({ map: wallT });
        const mat3 = new THREE.MeshPhongMaterial({ map: roof });
        const mat2 = new THREE.MeshPhongMaterial({ color: 0x0 });
        const wall = new THREE.Mesh(geom, [mat2, mat2, mat3, mat2, mat1, mat2]);

        wall.translateY(0.235);
        wall.translateZ(-0.25 - 0.04);
        this.scene.add(wall);

        const geom2 = new THREE.BoxGeometry(0.7, 0.08, 0.08);
        const wall2 = new THREE.Mesh(geom2, mat2);
        this.scene.add(wall2);
        wall2.translateZ(-0.25 - 0.04);
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
        Game.state = "projet1";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
