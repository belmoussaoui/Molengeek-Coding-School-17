import React, { useEffect, useState } from "react";
import SkillBar from "../components/SkillBar";
import { Game } from "../js/game";

const skills = [
    { img: "./img/python.png", rank: "S+" },
    { img: "./img/js.png", rank: "S+" },
    { img: "./img/c++.png", rank: "A+" },
    { img: "./img/java.png", rank: "A" },
    { img: "./img/lua.png", rank: "B+" },
    { img: "./img/bash.png", rank: "B" },
    { img: "./img/cs.png", rank: "C+" },
    { img: "./img/c.png", rank: "C" },
];

// state = main
// state = game
// state = web
// state = programming
// state = draw

export default function Skills() {
    const [state, setState] = useState("programming");
    useEffect(() => {
        const timer = setInterval(() => {
            setState(Game.state);
        }, 1000 / 60);
        return function () {
            clearInterval(timer);
        };
    }, []);
    return getState(state);
}

function getState(state) {
    switch (state) {
        case "game":
            return null;
        case "web":
            return null;
        case "draw":
            return null;
        case "programming":
            return (
                <div>
                    <h3 className="title-section mb-0 ml-4 mr-4 mb-3">
                        Mes <span className="text-important">compétences</span>.
                    </h3>
                    {skills.map((e, i) => (
                        <SkillBar key={i} img={e.img} rank={e.rank}></SkillBar>
                    ))}
                </div>
            );
        default:
            return (
                <div className="container">
                    <h2 className="title-section mb-0 ml-4 mr-4 mb-5">
                        Tableau d'algorithmie
                    </h2>
                    <p>
                        {/* C'est le tableau que j'utilise pour résoudre certains
                        problèmes d'algorithmies. Je préfère généralement
                        résoudre le problème sur papier/tableau avant d'en
                        écrire les lignes de code. J'ai participé à l'Advent of
                        Code 2020 qui est un calendrier de l'Avent composé de
                        petites énigmes de programmation de plus en plus dur qui
                        peuvent être résolues dans n'importe quel langage de
                        programmation. C'était super-enrichissant! Je suis
                        arrivé au jour 19 sur les 24 proposés. On tentera de
                        faire mieux l'année prochaine! */}
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Minima voluptas similique eligendi repudiandae, in
                        nam blanditiis libero, et quibusdam quas magni fugit,
                        dolorem dolor architecto dicta. Labore tenetur ut
                        numquam?
                    </p>
                </div>
            );
    }
}
