import React, { Component } from 'react';
import "./DisplayTime.css";

export default class DisplayTime extends Component {

    state = {
        dateCourante : new Date()
    };
    myInterval;
    componentDidMount(){
        this.myInterval = setInterval(() => {
            this.setState({
                dateCourante : new Date()
            })
        }, 1000)
    }

    componentWillUnmount(){
        this.myInterval.clearInterval();
    }

    render() {
        return (
            <div>
                <p>{this.state.dateCourante.getHours()}:{this.state.dateCourante.getMinutes()}:{this.state.dateCourante.getSeconds()}</p>
            </div>
        )
    }
}