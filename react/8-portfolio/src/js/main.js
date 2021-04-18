import Render from "./core/render.js";
// import Scene_Main from "./scenes/scene_main.js";
import Scene_Boot from "./scenes/scene_boot.js";

export default function run() {
    Render.init(Scene_Boot);
}
