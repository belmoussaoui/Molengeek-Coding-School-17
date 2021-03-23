import React from "react";
import "./searchBar.css";

export default class SearchBar extends React.Component {
    render() {
        return (
            <form action="">
                <label htmlFor="">Search :</label>
                <input type="text" />
                <button>Go</button>
            </form>
        );
    }
}
