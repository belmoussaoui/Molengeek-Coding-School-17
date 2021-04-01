// App.js
import React, { Component } from 'react'
import Article from "./Components/Article"
import Panier from './Components/Panier'

export default class App extends Component {
  state = {
    argent: 50,
    panier: [],
    articles: [
      {
        nom: "Sandwich",
        prix: 4.5,
        stock: 5,
        img: "./img/sandwich.jfif",
        qualite: "Bonne"
      },
      {
        nom: "Durum Kebab",
        prix: 3.5,
        stock: 5,
        img: "./img/durum.png",
        qualite: "Moyen"
      },
      {
        nom: "Hamburguer Poulet",
        prix: 8,
        stock: 5,
        img: "./img/hamburguer.png",
        qualite: "Superieure"
      }
    ]
  }

  acheter = (i) => {
    if (this.state.articles[i].stock !== 0 && this.state.argent >= this.state.articles[i].prix) {
      let x = this.state

      x.argent -= x.articles[i].prix;
      x.articles[i].stock--;
      x.panier.push(x.articles[i]);

      this.setState({ x });
    }
  }

  retirer = (i) => {
    let x = this.state

    x.argent += x.panier[i].prix;
    x.articles[x.articles.indexOf(x.panier[i])].stock++;
    x.panier.splice(i, 1);

    this.setState({ x });
  }

  render() {
    return (
      <div className="container">
        <h2>Mon argent : {this.state.argent}€</h2>
        <div className="row">
          {this.state.articles.map((e, i) => {
            return (
              <Article
                key={i}
                article={e}
                argent={this.state.argent}
                acheter={() => this.acheter(i)}
              />
            )
          })}
        </div>
        <h2 className="mt-3">Panier : </h2>
        <ul className="list-group">
          {this.state.panier.map((e, i) => {
            return (
              <Panier
                key={i}
                article={e}
                retirer={() => this.retirer(i)}
              />
            )
          })}
        </ul>
      </div>
    )
  }
}
