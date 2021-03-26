import React, { Component } from 'react'

export default class Item extends Component {

    state = {
        isDone : false,
        isEdit : false
    }

    done = () => {
        this.setState({
            isDone : !this.state.isDone
        })
    }
    
    edit = () => {
        this.setState({
            isEdit : !this.state.isEdit
        })
    }

    onInput = (e) => {
        if (e.key == "Enter") {
            this.edit()
            this.props.edit(e.target.value,this.props.id)
        }
    }

    render() {
        let style = {}
        if (this.state.isDone) {
            style = {backgroundColor : 'green'}
        }
        let itemValue = <span style={style}>{this.props.content}</span>
        if (this.state.isEdit == true) {
            itemValue = <input onKeyDown={(e) => this.onInput(e)} type="text" defaultValue={this.props.content}/>
        }
        if (this.props.mode == "done" && this.state.isDone == false) {
            return null
        }
        if (this.props.mode == "todo" && this.state.isDone == true) {
            return null
        }
        return (
            <div>
                {itemValue}
                <button onClick={this.done}>done</button>
                <button onClick={() => this.props.remove(this.props.id)}>remove</button>
                <button onChange={() => {}} onClick={this.edit}>Edit</button>
            </div>
        )
    }
}