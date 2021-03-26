import React, { Component } from 'react';
import './App.css';
import cocaImage from '../img/coca.jpg';
import fantaImage from '../img/fanta.jpg';
import iceTeaImage from '../img/iceTea.jpg';
import Articles from '../Components/Articles/Articles';
import Panier from '../Components/Panier/Panier';

export default class App extends Component {

  constructor(){
    super()
    this.i = 0
    this.state = {
      argent : 20,
      panier : [],
      articles : [
        {
          id : 0,
          nom : "Coca-Cola",
          prix : 1,
          stock : 5,
          image : cocaImage
        },
        {
          id : 1,
          nom : "Fanta",
          prix : 1.5,
          stock : 5,
          image : fantaImage
        },
        {
          id : 2,
          nom : "Ice Tea",
          prix : 2,
          stock : 5,
          image : iceTeaImage
        }
      ]
    }
  }

  myAcheter = (id) => {
    let myArticles = [...this.state.articles]
    if (myArticles[id].stock == 0) {
      return
    }
    if (this.state.argent < myArticles[id].prix) {
      return
    }
    myArticles[id].stock--;
    this.i++;
    let myPanier = [...this.state.panier]
    myPanier.push([this.i,id])
    this.setState({
      argent : this.state.argent - myArticles[id].prix,
      articles : myArticles,
      panier : myPanier
    })
  }

  rendre = (id, sn) => {
    
    let a = this.state.articles[sn];
    let myArticles = [...this.state.articles]
    myArticles[a.id].stock++
    let myPanier = [...this.state.panier]
    for (let i = 0; i < myPanier.length; i++) {
      if (myPanier[i][0] == id) {
        myPanier.splice(i,1)
        break;
      }
    }
    this.setState({
      argent : this.state.argent + a.prix,
      panier : myPanier
    })
    
  }
  
  render() {
    console.log(this.state.panier);
    return (
      <div className="container">
        <h2>Mon argent : {this.state.argent}$</h2>
        <div className="boissons">
          {
            this.state.articles.map((element)=>{
              return ( <Articles
                        img={element.image}
                        nom={element.nom}
                        prix={element.prix}
                        stock={element.stock}
                        acheter={this.myAcheter}
                        id={element.id}
                        key={element.id}
                      />
                      )
            })
          }
        </div>
        <p>Mon panier : </p>
        {
          this.state.panier.map((ids)=> {
            let element = this.state.articles[ids[1]]
            return (
              <Panier
                nom = {element.nom}
                id = {ids[0]}
                key = {ids[0]}
                sn = {ids[1]}
                remettre = {this.rendre}
              />
            )
          })
        }
      </div>
    )
  }

}