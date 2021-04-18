import * as THREE from "../../../node_modules/three/build/three.module.js";
import GameObject from "../core/game_object.js";
import { Game } from "../game.js";
// import Cache from "../core/cache.js";

export default class Board extends GameObject {
    constructor(...args) {
        super(args);
        this.objectId = 2;
        this.interactive = true;
        this.state = "";
    }

    initialize() {
        this.textures = [];
        super.initialize();
        this.name = "Compétences";
    }

    create() {
        super.create();
        this.createProgramming();

        let geom = new THREE.BoxBufferGeometry(0.75, 0.5, 0.02);
        let mat = new THREE.MeshPhongMaterial({
            map: this.textures[0],
            shininess: 50,
            flatShading: true,
        });
        let matd = new THREE.MeshPhongMaterial({
            color: "#efefef",
            flatShading: true,
        });

        this.object = new THREE.Mesh(geom, [matd, matd, matd, matd, mat, matd]);
        this.object.name = "main";
        this.object.receiveShadow = true;
        this.add(this.object);
        this.createFrame();
    }

    createFrame() {
        const geom = new THREE.BoxBufferGeometry(0.77, 0.03, 0.03);
        const mat = new THREE.MeshPhongMaterial({
            color: 0xd3d3d3,
            flatShading: true,
        });

        let mesh;

        mesh = new THREE.Mesh(geom, mat);
        mesh.receiveShadow = true;
        mesh.translateY(0.25);
        this.add(mesh);

        mesh = new THREE.Mesh(geom, mat);
        mesh.receiveShadow = true;
        mesh.translateY(-0.25);
        this.add(mesh);

        const geom1 = new THREE.BoxBufferGeometry(0.15, 0.005, 0.07);
        mesh = new THREE.Mesh(geom1, mat);
        mesh.receiveShadow = true;
        mesh.translateY(-0.265);
        this.add(mesh);
        mesh.translateX(0.2);
        mesh.translateZ(0.02);
    }

    createCategories() {}

    onLoad(ctx, img, id, x, y, d, rotate) {
        const data = {
            x: x,
            y: y,
            width: img.width / d,
            height: img.height / d,
            id: id,
            rotate: rotate,
        };
        this.programming.push(data);
        console.log(id);

        ctx.save();
        ctx.rotate(rotate);
        ctx.drawImage(img, data.x, data.y, data.width, data.height);
        this.textures[0].needsUpdate = true;
        ctx.restore();
    }

    createProgramming() {
        this.canvas = document.createElement("canvas");
        this.programming = [];

        const ctx = this.canvas.getContext("2d");
        this.textures.push(new THREE.CanvasTexture(this.canvas));
        ctx.canvas.width = 600 * 1.5 * 2;
        ctx.canvas.height = 600 * 2;
        ctx.fillStyle = "#efefef";
        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);

        var js = new Image();
        js.src = "./img/js.png";
        js.onload = () => {
            this.onLoad(ctx, js, "js", 200, 250, 8, 0.05);
        };

        var python = new Image();
        python.src = "./img/python.png";
        python.onload = () => {
            this.onLoad(ctx, python, "python", 1400, 500, 5, 0);
        };

        var cpp = new Image();
        cpp.src = "./img/c++.png";
        cpp.onload = () => {
            this.onLoad(ctx, cpp, "c++", 800, 650, 9, 0);
        };

        var c = new Image();
        c.src = "./img/c.png";
        c.onload = () => {
            this.onLoad(ctx, c, "c", 275, 900, 5, -0.1);
        };

        var cs = new Image();
        cs.src = "./img/cs.png";
        cs.onload = () => {
            this.onLoad(ctx, cs, "cs", 1100, 200, 8, 0.1);
        };

        var java = new Image();
        java.src = "./img/java.png";
        java.onload = () => {
            this.onLoad(ctx, java, "java", 1200, 700, 7, 0.1);
        };

        var lua = new Image();
        lua.src = "./img/lua.png";
        lua.onload = () => {
            this.onLoad(ctx, lua, "lua", 250, 600, 7, -0.15);
        };

        var bash = new Image();
        bash.src = "./img/bash.png";
        bash.onload = () => {
            this.onLoad(ctx, bash, "bash", 1700, 200, 3, 0.35);
        };
    }

    createGameDev() {}

    createWebDev() {}

    onMouseOver(event) {
        super.onMouseOver(event);
        // console.log(event.object.name);
        // console.log(event.uv.x * 1800, event.uv.y * 1200);
    }

    onMouseOut() {
        super.onMouseOut();
    }

    onMouseClick() {
        super.onMouseClick(7, 12);
        Game.scene = "skills";
        Game.state = "programming";
        if (this.event.object.name === "main") {
            const x = this.event.uv.x * 1800;
            const y = 1200 - this.event.uv.y * 1200;

            for (const data of this.programming) {
                let new_x =
                    data.x * Math.cos(data.rotate) -
                    data.x * Math.sin(data.rotate);
                let new_y =
                    data.y * Math.cos(data.rotate) +
                    data.y * Math.sin(data.rotate);
                if (new_x < x && x < new_x + data.width) {
                    if (new_y < y && y < new_y + data.height) {
                        console.log("js");
                    }
                }
            }
        }
    }

    update() {
        super.update();
    }

    render() {
        super.render();
    }
}
