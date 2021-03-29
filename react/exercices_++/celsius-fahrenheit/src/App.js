import React from "react";
import "../node_modules/bootstrap/dist/css/bootstrap.min.css";
import Calculator from "./components/Calculator";

class App extends React.Component {
    render() {
        return (
            <div className="container mt-4">
                <Calculator />
            </div>
        );
    }
}

export default App;
