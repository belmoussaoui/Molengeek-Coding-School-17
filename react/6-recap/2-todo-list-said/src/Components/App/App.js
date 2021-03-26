import React, { Component } from 'react'
import './App.css';
import Item from '../Item/Item'

class App extends Component {

  state = {
    list : [],
    mode : "all"
  }
  i = 0
  onInput = (e) => {
    if (e.key == "Enter") {
      console.log(e.target.value);
      this.setState({
        list : [...this.state.list,e.target.value]
      })
      console.log(this.state.list);
      this.i++;
      e.target.value = "";
    }
  }

  remove = (id) => {
    let myList = [...this.state.list];
    myList.splice(id,1);
    this.setState({
      list : myList
    })
  }

  edit = (value, id) => {
    let myList = [...this.state.list];
    myList[id] = value
    this.setState({
      list : myList
    })
  }

  onMode = (mode) => {
    console.log(mode);
    
    this.setState({
      mode : mode
    })
  }

  render(){
    return (
      <div className='center'>
        <h2>To Do List</h2>
      <div>
        <button onClick={ () => {this.onMode("all")}}>Toutes</button>
        <button onClick={ () => {this.onMode("done")}}>Completées</button>
        <button onClick={ () => {this.onMode("todo")}}>A faire</button>
      </div>
        <input onKeyDown={(e) => this.onInput(e)} type="text" id="input" placeholder="Que dois-je faire ? "/>
      {
        this.state.list.map((elem, index) => {
          return (
            <Item 
              content = {elem}
              id = {index}
              key = {index}
              remove = {this.remove}
              edit = {this.edit}
              mode = {this.state.mode}
            />
          )
        })
      }
      </div>
    );
  }
}

export default App;