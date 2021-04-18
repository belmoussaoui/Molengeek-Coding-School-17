import React from "react";

export default function Projet3() {
    return (
        <div>
            <h3 className="d-inline-block">
                Arcade Mini Game{" "}
                <span className="badge badge-secondary bg-primary me-2">
                    JS
                </span>
                <span className="badge badge-secondary bg-info">Phaser</span>
            </h3>
            <p className="card-text">
                Un ensemble de jeux arcades originaux ou non écrits avec les
                technologies orienté web directement jouable via le navigateur.
            </p>
            <a
                href="https://github.com/belmoussaoui/Flappy-Bird-with-Phaser-3"
                target="_blank"
                rel="noreferrer"
                className="a-icon"
            >
                <i className="fab fa-lg fa-github"></i>
                <span> Flappy Bird</span>
            </a>
            <a
                href="https://github.com/belmoussaoui/Mini-Metro-with-Phaser-3"
                target="_blank"
                rel="noreferrer"
                className="a-icon"
            >
                <i className="fab fa-lg fa-github"></i>
                <span> Mini Metro</span>
            </a>
        </div>
    );
}
