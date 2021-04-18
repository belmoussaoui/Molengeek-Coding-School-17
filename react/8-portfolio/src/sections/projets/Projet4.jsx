import React from "react";

export default function Projet4() {
    return (
        <div>
            <h3 className="d-inline-block">
                Room.js{" "}
                <span className="badge badge-secondary bg-primary me-2">
                    JS
                </span>
                <span className="badge badge-secondary bg-danger me-2">
                    Three.js
                </span>
            </h3>
            <p className="card-text">
                Un moteur 3d écrit avec three.js pour créer des salles
                isométriques. Il a été utilisé pour créer ce site portfolio.
            </p>
            <a
                href="https://github.com/belmoussaoui/Room.js"
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
