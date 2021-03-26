import React, { Component } from 'react'
import DisplayTime from "../DisplayTime/DisplayTime"

export default class App extends Component {
  render() {
    return (
      <div>
        <DisplayTime format='phpTime' />
      </div>
    )
  }
}