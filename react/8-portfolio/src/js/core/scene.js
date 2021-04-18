import * as THREE from "../../../node_modules/three/build/three.module.js";
import GameObject from "./game_object.js";
import Camera from "./camera.js";
import Render from "./render.js";
import { Game } from "../game.js";

export default class Scene extends THREE.Scene {
    constructor() {
        super();
        this.loaded = false;
        this.created = false;
        this.started = false;
        this.camera = null;
        this.raycaster = new THREE.Raycaster();
        this.mouse = new THREE.Vector2(0, 0);
        this.setupLight();
        this.setupCamera();
        this.scale.set(0.3, 0.3, 0.3);
        this.target = null;
    }

    create() {
        this.created = true;
    }

    start() {
        this.started = true;
    }

    setupLight() {
        this.ambientLight = new THREE.AmbientLight(0xe1e4e3, 0.6);
        this.ambientLight.position.set(0, 10, 0);
        this.add(this.ambientLight);
    }

    preload() {
        this.loaded = true;
    }

    setupCamera() {
        this.camera = new Camera();
        window.addEventListener("mousemove", this.setMousePosition.bind(this));
        window.addEventListener("touchstart", (e) => {
            this.setMousePosition(e.touches[0]);
            this.raycaster.setFromCamera(this.mouse, this.camera);
            const children = this.children.filter(
                (e) => e instanceof GameObject
            );
            let objects = this.raycaster.intersectObjects(children, true);

            // in input
            if (objects.length) {
                let target = objects[0].object;

                // get the game object of mesh
                while (!(target instanceof GameObject) && target.parent) {
                    target = target.parent;
                }

                this.target = null;

                if (target.interactive) {
                    target.onMouseOver(objects[0]);
                    target.onMouseClick();
                    this.target = target;
                }
            } else {
                if (this.target) {
                    this.target = null;
                }
            }
        });
    }

    onWindowResize(aspect) {
        this.camera.resize(aspect);
    }

    update() {
        for (const child of this.children) {
            if (child instanceof GameObject) {
                child.update();
            }
        }
        this.camera.update();
        this.updateRaycaster();
    }

    updateRaycaster() {
        this.raycaster.setFromCamera(this.mouse, this.camera);
        const children = this.children.filter((e) => e instanceof GameObject);
        let objects = this.raycaster.intersectObjects(children, true);

        // in input
        if (objects.length) {
            let target = objects[0].object;

            // get the game object of mesh
            while (!(target instanceof GameObject) && target.parent) {
                target = target.parent;
            }
            if (this.target && target !== this.target) {
                this.target.onMouseOut();
            }

            this.target = null;

            if (target.interactive) {
                target.onMouseOver(objects[0]);
                this.target = target;
            }
        } else {
            if (this.target) {
                this.target.onMouseOut();
                this.target = null;
            }
        }
    }

    render() {
        Render.renderer.render(this, this.camera);
        for (const child of this.children) {
            if (child instanceof GameObject) {
                child.render();
            }
        }
    }

    terminate() {}

    setMousePosition(event) {
        this.mouse.x = (event.clientX / Render.canvas.clientWidth) * 2 - 1;
        this.mouse.y = -(event.clientY / Render.canvas.clientHeight) * 2 + 1;
        // offscreen
        if (
            event.clientX > Render.canvas.clientWidth ||
            event.clientY > Render.canvas.clientHeight
        ) {
            this.mouse.x = -1;
            this.mouse.y = -1;
        }
    }
}
