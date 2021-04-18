export default function Projet1() {
    return (
        <div>
            <h3 className="d-inline-block">
                Faith Romance{" "}
                <span className="badge badge-secondary bg-primary me-2">
                    JS
                </span>
                <span className="badge badge-secondary bg-info">Pixi.js</span>
            </h3>
            <p className="card-text">
                Don Arias doit choisir entre sa foi et son cœur. Un jeu de rôle
                tactique écrit comme une pièce de théâtre se déroulant à l'âge
                d'or du romantisme espagnol.
            </p>
            <a
                href="https://arleq1n.itch.io/faith-romance"
                target="_blank"
                rel="noreferrer"
                className="a-icon"
            >
                <i className="fab fa-lg fa-itch-io"></i>
                <span> Itch.io</span>
            </a>
            <a
                href="https://github.com/belmoussaoui/tactics-system"
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
