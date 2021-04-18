import React from "react";

export default function About() {
    return (
        <div>
            <h3 className="text-center">Qui suis-je?</h3>
            <p className="text-justify text-about">
                Je suis un programmeur qui étudie actuellement le développement
                web. Je travaille principalement sur le développement
                d'application ludique.
            </p>
            <p className="text-justify text-about">
                Voici quelques-uns des projets sur lesquels j'ai travaillé en
                autodidacte. Ce site web est toujours en construction. Je suis
                heureux d'élaborer sur n'importe lequel des projets affichés
                ici, il suffit de m'envoyer un e-mail ou compléter le formulaire
                de contact si vous avez des questions.
            </p>
            <div className="text-center">
                <button
                    type="button"
                    id="btn-about"
                    className="btn btn-primary btn-lg mt-3 mx-2"
                >
                    Résumé <i className="far fa-file-pdf"></i>
                </button>
            </div>
            {/* <div className="container image-set text-center mt-3">
                <img src="./img/icon.png" width="250px" />
            </div> */}
        </div>
    );
}
