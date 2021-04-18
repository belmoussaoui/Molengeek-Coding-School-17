import GameObject from "../core/game_object.js";
import * as THREE from "../../../node_modules/three/build/three.module.js";
import { Game } from "../game.js";
import Cache from "../core/cache.js";

export default class Contact extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize() {
        super.initialize();
    }

    create() {
        super.create();
        const geom = new THREE.BoxBufferGeometry(0.6, 0.03, 0.2);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd0b78a,
            flatShading: true,
        });
        this.object = new THREE.Mesh(geom, mat);
        this.object.castShadow = true;
        this.object.receiveShadow = true;
        this.add(this.object);
        this.object.translateY(-0.08);

        const twitter = Cache.get("twitter");
        const github = Cache.get("github");
        const linkedin = Cache.get("linkedin");

        let mat3;
        let mat4;
        let mesh;

        this.createTwitter(twitter);
        this.createGithub(github);
        this.createLinkedin(linkedin);

        // linkedin

        // mesh.scale.set(0.7, 0.7, 0.7);
        // mesh.translateX(-0.12);
        // mesh.translateY(-0.03);
        // mesh.rotation.set(0, Math.PI / 2 + 0.2, 0);

        // github

        // mesh.scale.set(0.7, 0.7, 0.7);
        // mesh.translateX(0);
        // mesh.translateZ(-0.02);
        // mesh.translateY(-0.03);
        // mesh.rotation.set(0, Math.PI / 2, 0);
    }

    createTwitter(twitter) {
        this.twitter = new Block(
            this,
            twitter,
            "https://twitter.com/arleq1n",
            0x1da1f3
        );
        this.add(this.twitter);
        this.twitter.translateX(0.12);
        this.twitter.translateY(-0.03);
        this.twitter.rotation.set(0, Math.PI / 2 - 0.2, 0);
    }

    createLinkedin(linkedin) {
        this.linkedin = new Block(
            this,
            linkedin,
            "https://www.linkedin.com/in/bilal-el-moussaoui-88b2251bb/",
            0x1da1f3
        );
        this.add(this.linkedin);
        this.linkedin.translateX(-0.12);
        this.linkedin.translateY(-0.03);
        this.linkedin.rotation.set(0, Math.PI / 2 + 0.2, 0);
    }

    createGithub(github) {
        this.github = new Block(
            this,
            github,
            "https://github.com/belmoussaoui",
            0xffffff
        );
        this.add(this.github);
        this.github.translateX(0);
        this.github.translateY(-0.03);
        this.github.translateZ(-0.02);
        this.github.rotation.set(0, Math.PI / 2, 0);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick();
        Game.scene = "contact";
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}

class Block extends GameObject {
    constructor(...args) {
        super(args);
        this.interactive = true;
    }

    initialize(p, texture, link, color) {
        super.initialize();
        this.p = p;
        this.t = texture;
        this.l = link;
        this.c = color;
    }

    create() {
        super.create();
        const geom = new THREE.BoxBufferGeometry(0.1, 0.1, 0.1);
        const mat1 = new THREE.MeshPhongMaterial({
            map: this.t,
            flatShading: true,
        });
        const mat2 = new THREE.MeshPhongMaterial({
            color: this.c,
            flatShading: true,
        });
        const mesh = new THREE.Mesh(geom, [mat2, mat1, mat2, mat2, mat2, mat2]);
        this.add(mesh);
        mesh.scale.set(0.7, 0.7, 0.7);
    }

    onMouseOver() {
        super.onMouseOver();
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        if (Game.scene !== "contact") {
            this.p.onMouseClick();
        } else {
            window.open(this.l, "_blank");
        }
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
