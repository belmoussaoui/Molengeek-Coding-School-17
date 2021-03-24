import React from "react";
import SearchBar from "../SearchBar/SearchBar";
import Navigation from "../Navigation/Navigation";
import "./header.css";

export default class Header extends React.Component {
    render() {
        return (
            <header>
                <Navigation />
                <SearchBar />
            </header>
        );
    }
}
