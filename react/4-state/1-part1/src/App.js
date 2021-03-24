import React from "react";

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

    render() {
        return (
            <div className="app">
                <p>{`Je m'appelle ${this.state.actors[0].prenom} ${this.state.actors[0].nom}, j'ai ${this.state.actors[0].age} ans`}</p>
                <p>{`Je m'appelle ${this.state.actors[1].prenom} ${this.state.actors[1].nom}, j'ai ${this.state.actors[1].age} ans`}</p>
                <p>{`Je m'appelle ${this.state.actors[2].prenom} ${this.state.actors[2].nom}, j'ai ${this.state.actors[2].age} ans`}</p>
            </div>
        );
    }
}

export default App;
