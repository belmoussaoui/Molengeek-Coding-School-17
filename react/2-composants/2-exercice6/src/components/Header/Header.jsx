import React from "react";
import Link from "./Link";

export default class Header extends React.Component {
    counter = 0;

    increment = (elem) => {
        console.log(elem);
        this.setState({ counter: this.counter++ });
    };

    render() {
        return (
            <header className="d-flex justify-content-between align-items-center">
                <nav className="nav">
                    <Link increment={this.increment} class={"active"}>
                        Active
                    </Link>
                    <Link increment={this.increment} class={"active"}>
                        Link 1
                    </Link>
                    <Link increment={this.increment} class={"active"}>
                        Link 2
                    </Link>
                    <Link increment={this.increment} class={"disabled"}>
                        Disabled
                    </Link>
                </nav>
                <span className="pe-4">
                    J'ai été clique {this.counter} fois
                </span>
            </header>
        );
    }
}
