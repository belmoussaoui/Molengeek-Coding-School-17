import * as THREE from "../../../node_modules/three/build/three.module.js";
import SceneManager from "./scene_manager.js";

export default class Render {
    static scene;
    static canvas;
    static renderer;
    static counter;

    constructor() {
        throw new Error("This is a static class");
    }

    static init(sceneClass) {
        this.counter = 0;
        this.setupRenderer();
        this.run(sceneClass);
        this.gameLoop();
        this.setupEventHandlers();
    }

    static setupRenderer() {
        this.canvas = document.querySelector("#canvas");
        this.renderer = new THREE.WebGLRenderer({
            canvas: this.canvas,
            antialias: false,
        });
        this.renderer.setClearColor(0x2a3d45);
        this.renderer.shadowMap.enabled = true;
        // this.renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    }

    static run(sceneClass) {
        SceneManager.run(sceneClass);
        //this.scene = new sceneClass();
        //this.scene.create();
    }

    static setupEventHandlers() {
        this.canvas.addEventListener("resize", this.onWindowResize.bind(this));
    }

    static gameLoop() {
        this.counter++;
        this.onWindowResize();
        SceneManager.update();
        requestAnimationFrame(this.gameLoop.bind(this));
    }

    static onWindowResize() {
        const pixelRatio = window.devicePixelRatio;
        const width = (this.canvas.clientWidth * pixelRatio) | 0;
        const height = (this.canvas.clientHeight * pixelRatio) | 0;
        this.aspect = width / height;
        this.renderer.setSize(width, height, false);
        if (this.scene) {
            this.scene.onWindowResize(width / height);
        }
    }
}
