import React from "react";
import "./app.css";
import Header from "./components/Header/Header";
import Body from "./components/Body/Body";
import Footer from "./components/Footer/Footer";

class App extends React.Component {
    render() {
        return (
            <>
                <Header />
                <Body />
                <Footer />
            </>
        );
    }
}

export default App;
