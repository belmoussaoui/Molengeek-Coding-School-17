import React from "react";
import Exercice1 from "./components/Exercice1";
import Exercice2 from "./components/Exercice2";
import Exercice3 from "./components/Exercice3";
import Exercice4 from "./components/Exercice4";
import Exercice5 from "./components/Exercice5";

class App extends React.Component {
    render() {
        return (
            <div className="app text-center mt-4">
                <Exercice1></Exercice1>
                <Exercice2></Exercice2>
                <Exercice3></Exercice3>
                <Exercice4></Exercice4>
                <Exercice5></Exercice5>
            </div>
        );
    }
}

export default App;
