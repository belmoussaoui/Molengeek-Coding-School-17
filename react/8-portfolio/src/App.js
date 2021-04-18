import { useEffect, useState } from "react";
import run from "./js/main.js";
import { Game } from "./js/game.js";
import Video from "./components/Video";
import Object3D from "./components/Object3D";
import About from "./sections/About";
import Portfolio from "./sections/Portfolio";
import Skills from "./sections/Skills";
import Contact from "./sections/Contact";
import Navbar from "./components/Navbar";

export default function App() {
    const [scene, setScene] = useState(null);
    const [view, setView] = useState(!checkOrientation());

    useEffect(() => {
        run();
        const timer = setInterval(() => {
            setScene(Game.scene);
        }, 1000 / 60);
        window.addEventListener("orientationchange", () => {
            setView(checkOrientation());
        });
        return function () {
            clearInterval(timer);
        };
    }, []);

    return (
        <div className="app">
            <Navbar show={scene}></Navbar>
            <div id="container">
                {view && (
                    <div id="alert">
                        <span className="container fs-4 text-center">
                            Ce site a été construit pour être consultable en
                            mode portrait. Veuillez changer l'orientation de
                            votre appareil. Merci!
                        </span>
                    </div>
                )}
                <Video></Video>
                <div id="game" className="position-relative">
                    <canvas id="canvas"></canvas>
                    <button
                        id="next"
                        className="position-absolute end-0 btn btn-danger btn-lg mt-3 mx-2 top-50 translate-middle-y"
                    >
                        {">"}
                    </button>
                    <button
                        id="previous"
                        className="position-absolute start-0 btn btn-danger btn-lg mt-3 mx-2 top-50 translate-middle-y"
                    >
                        {"<"}
                    </button>
                </div>
                <aside id="content" className="px-5 py-5 p-lg-5">
                    <div id="inner">{getSection(scene)}</div>
                </aside>
                <div id="labels">
                    <button
                        id="back"
                        className="btn btn-danger btn-lg mt-3 mx-2"
                    >
                        Retour
                    </button>
                </div>
                {!scene && (
                    <div
                        className="position-absolute"
                        style={{ bottom: ".5rem", left: ".5rem", zIndex: "10" }}
                    >
                        <a
                            href="https://twitter.com/arleq1n"
                            target="_blank"
                            rel="noreferrer"
                            className="btn btn-tw btn-social"
                        >
                            <i className="fab fa-twitter"></i>
                        </a>
                        <a
                            href="https://www.linkedin.com/in/bilal-el-moussaoui-88b2251bb/"
                            target="_blank"
                            rel="noreferrer"
                            className="btn btn-li btn-social"
                        >
                            <i className="fab fa-linkedin-in"></i>
                        </a>
                        <a
                            href="https://github.com/belmoussaoui"
                            target="_blank"
                            rel="noreferrer"
                            className="btn btn-git btn-social"
                        >
                            <i className="fab fa-github"></i>
                        </a>
                        <a
                            href="mailto:belmoussgame@gmail.com"
                            target="_blank"
                            rel="noreferrer"
                            className="btn btn-email btn-social"
                        >
                            <i className="fas fa-envelope"></i>
                        </a>
                    </div>
                )}
            </div>
        </div>
    );
}

function getSection(scene) {
    switch (scene) {
        case "about":
            return <About></About>;
        case "portfolio":
            return <Portfolio></Portfolio>;
        case "skills":
            return <Skills></Skills>;
        case "contact":
            return <Contact></Contact>;
        case "object3D":
            return <Object3D></Object3D>;
        default:
            return null;
    }
}

function checkOrientation() {
    return window.innerHeight < window.innerWidth;
}
