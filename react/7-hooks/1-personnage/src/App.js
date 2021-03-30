import React, { useState } from "react";
import Personnage from "./components/Personnage";
import Article from "./components/Article";

function App() {
    const [perso, setPerso] = useState({
        nom: "el moussaoui",
        prenom: "bilal",
        age: "24",
        commune: "molenbeek",
    });

    const [articles, setArticles] = useState([
        { nom: "article1", prix: 20 },
        { nom: "article2", prix: 5 },
        { nom: "article3", prix: 15 },
        { nom: "article4", prix: 10 },
        { nom: "article5", prix: 5 },
    ]);

    const rename = () => {
        setPerso({
            nom: "monpain",
            prenom: "hector",
            age: "41",
            commune: "Ixelles",
        });
    };
    return (
        <>
            <Personnage data={perso} onRename={rename}></Personnage>
            <div className="mt-5 container">
                <h2>Articles</h2>
                {articles.map((elem) => {
                    return <Article key={elem.nom} data={elem}></Article>;
                })}
            </div>
        </>
    );
}

export default App;
