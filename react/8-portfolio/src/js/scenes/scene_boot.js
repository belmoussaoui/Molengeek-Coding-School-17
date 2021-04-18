import * as THREE from "../../../node_modules/three/build/three.module.js";
import Scene from "../core/scene.js";
import Scene_Main from "./scene_main.js";
import SceneManager from "../core/scene_manager.js";
import Cache from "../core/cache.js";

export default class Scene_Boot extends Scene {
    create() {
        // super.create();
        const loadManager = new THREE.LoadingManager();
        Cache.setupLoad(loadManager);
        Cache.load("arias", "arias.png");
        Cache.load("baten", "baten_kaitos.jpg");
        Cache.load("bg", "bg.png");
        Cache.load("block", "block.png");
        Cache.load("book", "book.jpeg");
        Cache.load("devil", "devil.png");
        Cache.load("elvire", "elvire.png");
        Cache.load("floor", "floor.png");
        Cache.load("floor2", "floor2.png");
        Cache.load("front", "front.png");
        Cache.load("front2", "front2.png");
        Cache.load("github", "github.png");
        Cache.load("twitter", "twitter.jpg");
        Cache.load("icon", "icon.png");
        Cache.load("link", "link.png");
        Cache.load("linkedin", "linkedin.png");
        Cache.load("wall1", "wall1.png");
        Cache.load("roof4", "roof4.png");
        Cache.load("tht", "tht.jpeg");
        Cache.load("zelda", "zelda.png");
        Cache.load("texture_floor", "texture_floor.jpg");
        loadManager.onLoad = () => {
            this.created = true;
        };
        this.loadBoard();
        // loadManager.onProgress = () => {
        //     console.log("ok");
        // };
    }

    loadBoard() {
        Cache.loadImage("c", "c.png");
        Cache.loadImage("c++", "c++.png");
        Cache.loadImage("cs", "cs.png");
        Cache.loadImage("java", "java.png");
        Cache.loadImage("js", "js.png");
        Cache.loadImage("love2d", "love2d.png");
        Cache.loadImage("lua", "lua.png");
        Cache.loadImage("asm", "asm.png");
        Cache.loadImage("bash", "bash.png");
        Cache.loadImage("python", "python.png");
    }

    update() {
        if (Cache.isReady()) {
            SceneManager.goto(Scene_Main);
        }
    }
}
