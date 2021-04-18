import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";
import Cache from "../core/cache.js";

export default class Zelda2 extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();

        const texture = Cache.get("floor");
        const texture2 = texture.clone();
        texture2.needsUpdate = true;
        // const texture0 = loader.load("./img/front.jpg");
        texture.magFilter = THREE.NearestFilter;
        texture2.magFilter = THREE.NearestFilter;
        texture.magFilter = THREE.NearestFilter;
        let geom;
        let mat;
        let mesh;

        mat = new THREE.MeshPhongMaterial({
            map: texture,
        });
        texture.wrapS = THREE.RepeatWrapping;
        texture.wrapT = THREE.RepeatWrapping;
        texture.repeat.set(5, 5);

        let mat1 = new THREE.MeshPhongMaterial({
            map: texture2,
        });
        mat1.needsUpdate = true;
        texture2.wrapS = THREE.RepeatWrapping;
        texture2.wrapT = THREE.RepeatWrapping;
        texture2.repeat.set(5, 1);

        geom = new THREE.BoxGeometry(0.25, 0.03, 0.25);
        mesh = new THREE.Mesh(geom, [mat1, mat1, mat, mat, mat1, mat1]);
        mesh.castShadow = true;
        mesh.receiveShadow = true;
        mesh.translateY(-0.05);
        this.add(mesh);

        const texture3 = Cache.get("bg");
        texture3.magFilter = THREE.NearestFilter;
        let mat2 = new THREE.MeshPhongMaterial({
            map: texture3,
        });
        // texture2.wrapS = THREE.RepeatWrapping;
        // texture2.wrapT = THREE.RepeatWrapping;
        // texture2.repeat.set(5, 3);

        let mat3 = new THREE.MeshPhongMaterial({
            color: 0x0,
        });

        geom = new THREE.BoxGeometry(0.25, 0.25 * 0.61, 0.025);
        mesh = new THREE.Mesh(geom, [mat3, mat3, mat3, mat3, mat2, mat3, mat3]);
        mesh.translateY(0.04);
        mesh.translateZ(-0.15 + 0.015 * 3);
        mesh.castShadow = true;
        mesh.receiveShadow = true;
        this.add(mesh);

        let texture4 = Cache.get("zelda");
        texture4.magFilter = THREE.NearestFilter;
        let mat4 = new THREE.MeshPhongMaterial({
            map: texture4,
            side: THREE.DoubleSide,
            transparent: true,
            alphaTest: 0.5,
            //color: 0x0,
        });
        let geom4 = new THREE.PlaneGeometry(0.03 * 2, 0.03, 2);
        const object = new THREE.Mesh(geom4, mat4);
        this.add(object);
        object.translateY(-0.02);
        object.castShadow = true;
        object.receiveShadow = true;

        let texture5 = Cache.get("link");
        texture5.magFilter = THREE.NearestFilter;
        let mat5 = new THREE.MeshPhongMaterial({
            map: texture5,
            side: THREE.DoubleSide,
            transparent: true,
            alphaTest: 0.5,
            //color: 0x0,
        });
        let geom5 = new THREE.PlaneGeometry(0.03, 0.03 * 2, 2);
        const object2 = new THREE.Mesh(geom5, mat5);
        this.add(object2);
        object2.translateY(-0.005);
        object2.translateX(-0.06);
        object2.translateZ(0.07);
        //  object2.rotation.set(0, -3.5, 0);
        object2.castShadow = true;
        object2.receiveShadow = true;
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
        Game.state = "projet2";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
