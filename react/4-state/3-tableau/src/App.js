import React from "react";

class App extends React.Component {
    state = {
        data: [1, 2, 3, 4, 5],
    };
    longeur = this.state.data.length;
    style = {};

    removeEl = () => {
        this.state.data.pop();
        this.setState({
            data: this.state.data,
        });
        if (this.longeur > 0) this.check();
    };

    check = () => {
        this.longeur--;
        if (this.longeur == 0) {
            this.style = { background: "red" };
        }
        if (this.longeur == 1) {
            this.style = { background: "orange" };
        }
    };

    render() {
        return (
            <div className="app" style={this.style}>
                <div>{this.longeur}</div>
                <button onClick={this.removeEl}>remove</button>
            </div>
        );
    }
}

export default App;
