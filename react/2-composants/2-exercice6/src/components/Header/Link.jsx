import React, { Component } from "react";

class Link extends Component {
    render() {
        return (
            <a
                onClick={() => this.props.increment("active")}
                className={`nav-link ${this.props.class}`}
                aria-current="page"
                href="#"
            >
                {this.props.children}
            </a>
        );
    }
}

export default Link;
