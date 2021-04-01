import React, { Component } from "react";
import "./articles.css";

export default class Articles extends Component {
    render() {
        let monStyle = {};
        let myContent = (
            <button onClick={() => this.props.acheter(this.props.id)}>
                Acheter
            </button>
        );
        if (this.props.stock == 1) {
            monStyle = { backgroundColor: "orange" };
        } else if (this.props.stock == 0) {
            monStyle = { backgroundColor: "red" };
            myContent = <span>Rupture de Stock</span>;
        }
        return (
            <div style={monStyle}>
                <img src={this.props.img} alt="" />
                <h2>{this.props.nom}</h2>
                <p>Prix : {this.props.prix}$</p>
                <p>Stock : {this.props.stock} Unités</p>
                {myContent}
            </div>
        );
    }
}
