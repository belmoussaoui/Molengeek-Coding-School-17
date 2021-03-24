import React from "react";
import Perso from "./components/Perso";

class App extends React.Component {
    state = {
        actors: [
            {
                nom: "Hresvelg",
                prenom: "Eldeguard",
                age: 17,
            },
            {
                nom: "Vestra",
                prenom: "Hubert",
                age: 19,
            },
            {
                nom: "Aegir",
                prenom: "Ferdinand",
                age: 17,
            },
        ],
    };
    change = () => {
        this.setState({
            actors: [
                {
                    nom: "Dimitri",
                    prenom: "Alexandre Blaiddyd",
                    age: 17,
                },
                {
                    nom: "Dedue",
                    prenom: "Molinaro",
                    age: 18,
                },
                {
                    nom: "Felix Hugo",
                    prenom: "Fraldarius",
                    age: 17,
                },
            ],
        });
    };

    render() {
        return (
            <div className="app">
                {this.state.actors.map((value) => {
                    return (
                        <Perso
                            // ne met pas à jour si la clef est la même...
                            // il vaut éviter d'utiliser l'index...
                            key={value.nom}
                            actor={value}
                            onButton={this.change}
                        />
                    );
                })}
            </div>
        );
    }
}

export default App;
