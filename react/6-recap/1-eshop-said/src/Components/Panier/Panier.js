import React, { Component } from 'react';
import './panier.css';

export default class Panier extends Component {
    render() {
        return (
            <div>
                <span>Produit : {this.props.nom} || Unités : 1</span>
                <button onClick = {() => this.props.remettre(this.props.id,this.props.sn)}>Rendre</button>
            </div>
        )
    }
}