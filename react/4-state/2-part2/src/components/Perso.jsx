import React, { Component } from "react";

export default class Perso extends Component {
    state = { actor: this.props.actor };

    render() {
        return (
            <div>
                <p>{`Je m'appelle ${this.state.actor.prenom} ${this.state.actor.nom}, j'ai ${this.state.actor.age} ans`}</p>
                <button onClick={this.props.onButton}>modifcation</button>
            </div>
        );
    }
}
