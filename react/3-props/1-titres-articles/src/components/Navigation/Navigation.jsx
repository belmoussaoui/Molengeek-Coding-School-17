import React from "react";
import "./navigation.css";

export default class SearchBar extends React.Component {
    link1() {
        console.log("acceuil");
    }

    link2() {
        console.log("galerie");
    }

    link3() {
        console.log("contact");
    }

    render() {
        return (
            <nav>
                <a onClick={this.link1} href="#">
                    Link 1
                </a>
                <a onMouseOver={this.link2} href="#">
                    Link 2
                </a>
                <a onDoubleClick={this.link3} href="#">
                    Link 3
                </a>
            </nav>
        );
    }
}
