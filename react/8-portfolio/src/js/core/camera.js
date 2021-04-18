import * as THREE from "../../../node_modules/three/build/three.module.js";
import Render from "./render.js";
import { Game } from "../game.js";
import { OrbitControls } from "../../../node_modules/three/examples/jsm/controls/OrbitControls.js";

export default class Camera extends THREE.OrthographicCamera {
    constructor(size = 2, near = 0.1, far = 20) {
        super(-size / 2, size / 2, size / 2, -size / 2, near, far);
        this.controls = null;
        this.object = null;
        this.setupBack();
        this.setupPosition();
        this.setupControl();
    }

    setupBack() {
        //this.previous = document.querySelector("#previous");
        this.back = document.querySelector("#back");
        this.back.addEventListener("click", (e) => {
            const canvas1 = document.querySelector("#game");
            canvas1.style.width = "100%";
            const content = document.querySelector("#content");
            content.style.left = "100%";
            content.style.right = "auto";

            for (const child of document.querySelectorAll("#content *")) {
                child.style.opacity = "0";
            }
            Game.clear();
            this.lookRoom();
        });
    }

    resize(aspect) {
        this.left = -aspect;
        this.right = aspect;
        this.refresh();
    }

    refresh() {
        this.updateProjectionMatrix();
    }

    lookGameObject(object, pos, minZoom = 10, maxZoom = 16) {
        this.object = object;
        this.controls.target.set(pos.x, pos.y, pos.z);
        this.controls.minZoom = minZoom;
        this.controls.maxZoom = maxZoom;
        // this.controls.minZoom = 7;
        // this.controls.maxZoom = 12;
        this.controls.maxPolarAngle = Math.PI;
        this.controls.minAzimuthAngle = Infinity;
        this.zoom = this.controls.minZoom;
        // this.position.x = pos.x;
        this.position.y = pos.y + 1;
        // this.position.z = pos.z - 1;
        this.refresh();
        this.back.style.display = "initial";
        this.back.style.opacity = 1;
    }

    setupPosition() {
        // this.position.x = -4.3;
        // this.position.y = 2.5;
        // this.position.z = 3;
        this.position.x = -2;
        this.position.y = 1.5;
        this.position.z = 3;
        //  this.position.y = 100;
    }

    setupControl() {
        this.controls = new OrbitControls(this, Render.canvas);
        this.lookRoom();
    }

    lookRoom() {
        this.controls.minZoom = 1;
        this.controls.maxZoom = 3;
        this.controls.maxPolarAngle = Math.PI / 2;
        this.controls.maxAzimuthAngle = 0 + Math.PI / 8;
        this.controls.minAzimuthAngle = -Math.PI / 2 - Math.PI / 8;
        this.controls.target.set(0, 0.3, 0);
        this.zoom = 1.8;
        this.object = null;
        this.back.style.display = "none";
        this.back.style.opacity = 0;
        this.refresh();
    }

    update() {
        this.controls.update();
    }
}
