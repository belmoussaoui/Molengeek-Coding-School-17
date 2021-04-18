import * as THREE from "../../../node_modules/three/build/three.module.js";
import Render from "./render.js";
import { Game } from "../game.js";

export default class GameObject extends THREE.Object3D {
    constructor(args) {
        super();
        this.interactive = false;
        this.isMouseOver = false;
        this.name = "";
        this.event = null;
        this.initialize(...args);
        this.setupLabel();
        this.setupEvent();
        this.create();
    }

    setupLabel() {
        this.label = document.createElement("span");
        this.label.textContent = this.name; //this.name;
        //  document.querySelector("#labels").appendChild(this.label);
    }

    setupEvent() {
        window.addEventListener("click", (e) => {
            if (this.interactive && this.isMouseOver) {
                this.onMouseClick(e);
            }
        });
    }

    onMouseOver(event) {
        this.event = event;
        this.isMouseOver = true;
        document.body.style.cursor = "pointer";
    }

    onMouseOut() {
        this.event = null;
        this.isMouseOver = false;
        document.body.style.cursor = "auto";
    }

    onMouseClick(minZoom = 10, maxZoom = 16) {
        Game.objectId = this.objectId;
        const temp = new THREE.Vector3();
        this.updateWorldMatrix(true, false);
        this.getWorldPosition(temp);
        Render.scene.camera.lookGameObject(this, temp, minZoom, maxZoom);
        const content = document.querySelector("#content");
        content.style.right = "0";
        content.style.left = "auto";
        content.style.padding = "50px";

        const canvas = document.querySelector("#game");
        canvas.style.width = "50%";

        for (const child of document.querySelectorAll("#content *")) {
            child.style.opacity = "255";
        }
    }

    initialize() {}

    create() {}

    update() {}

    render() {
        //this.renderLabel();
    }

    renderLabel() {
        const temp = new THREE.Vector3();

        this.updateWorldMatrix(true, false);
        this.getWorldPosition(temp);

        temp.project(Render.scene.camera);

        const x = (temp.x * 0.5 + 0.5) * Render.canvas.clientWidth;
        // this.span.getBoundingClientRect().width +
        // 5;
        const y = (temp.y * -0.5 + 0.5) * Render.canvas.clientHeight - 5;
        this.label.style.transform = `translate(-50%, -50%) translate(${x}px,${y}px)`;
    }
}
