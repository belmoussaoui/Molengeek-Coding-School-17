import React, { useState, useEffect } from "react";
import Projet1 from "./projets/Projet1";
import Projet2 from "./projets/Projet2";
import Projet3 from "./projets/Projet3";
import Projet4 from "./projets/Projet4";
import { Game } from "../js/game.js";

export default function Portfolio() {
    const [state, setState] = useState(null);
    useEffect(() => {
        const timer = setInterval(() => {
            setState(Game.state);
        }, 1000 / 60);
        return function () {
            clearInterval(timer);
        };
    }, []);

    return getProjet(state);
}

function getProjet(state) {
    switch (state) {
        case "projet1":
            return <Projet1></Projet1>;
        case "projet2":
            return <Projet2></Projet2>;
        case "projet3":
            return <Projet3></Projet3>;
        case "projet4":
            return <Projet4></Projet4>;
        default:
            return null;
    }
}
