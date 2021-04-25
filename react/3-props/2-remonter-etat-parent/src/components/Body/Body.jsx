import React from "react";
import Article from "../Article/Article";

export default class Body extends React.Component {
    nbrArticles = (param1) => {
        console.log(param1);
    };

    render() {
        return (
            <main>
                {true ? (
                    <>
                        <Article
                            titre="les tartines"
                            onButton={this.nbrArticles}
                        />
                        <Article
                            titre="coding school"
                            onButton={this.nbrArticles}
                        />
                    </>
                ) : (
                    <h1>Il n'y a pas d'articles</h1>
                )}
            </main>
        );
    }
}
