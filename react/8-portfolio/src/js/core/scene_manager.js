import Render from "./render.js";

export default class SceneManager {
    static _scene = null;
    static _nextScene = null;
    static sceneStarted = false;

    static run(sceneClass) {
        this.goto(sceneClass);
    }

    static update() {
        this.updateInput();
        this.updateScene();
        this.updateNext();
    }

    static updateInput() {
        // InputManager.update()
    }

    static updateScene() {
        if (this._scene && this._scene.loaded) {
            if (!this._scene.created) {
                this._scene.create();
            } else if (!this._scene.started) {
                this._scene.start();
            } else {
                this._scene.update();
                this._scene.render();
            }
        }
    }

    static updateNext() {
        if (this._nextScene) {
            if (this._scene) this._scene.terminate();
            this._scene = this._nextScene;
            Render.scene = this._scene;
            this._scene.preload();
            this._nextScene = null;
        }
    }

    static goto(sceneClass) {
        this._nextScene = new sceneClass(this._game);
    }
}
