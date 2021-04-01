import React, { Component } from 'react'

export default class Article extends Component {
    render() {
        return (
            <div className="col-4">
                <div className="card">
                    <img src={this.props.article.img} className="card-img-top" alt="..." />
                    <div className={`card-body ${this.props.article.stock === 1 ? "bg-warning" : this.props.article.stock === 0 ? "bg-danger" : "bg-white"}`}>
                        <h3 className="card-title">{this.props.article.nom}</h3>
                        <p className="card-text">Prix : {this.props.article.prix}€</p>
                        <p className="card-text">{this.props.article.stock === 0 ? "Rupture de stock" : `Stock : ${this.props.article.stock} unités`}</p>
                        <p className="card-text">Qualité : {this.props.article.qualite}</p>
                        <button className={`btn btn-primary ${this.props.article.stock === 0 || this.props.argent < this.props.article.prix ? "d-none" : ""}`} onClick={this.props.acheter}>Acheter</button>
                    </div>
                </div>
            </div>
        )
    }
}
