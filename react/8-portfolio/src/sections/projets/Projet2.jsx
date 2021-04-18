import React from "react";

export default function Projet2() {
    return (
        <div>
            <h3 className="d-inline-block">
                Zelda 2 Recode{" "}
                <span className="badge badge-secondary bg-warning me-2">
                    Python
                </span>
                <span className="badge badge-secondary bg-info">Pygame</span>
            </h3>
            <p className="card-text">
                Recode de The Legend of Zelda: The Adventure of Link.
                Implémentation d'un moteur personnalisé construit au-dessus de
                Pygame en Python.
            </p>
            <a
                href="https://github.com/belmoussaoui/zelda-2recode"
                target="_blank"
                rel="noreferrer"
                className="a-icon"
            >
                <i className="fab fa-lg fa-github"></i>
                <span> Github</span>
            </a>
        </div>
    );
}
