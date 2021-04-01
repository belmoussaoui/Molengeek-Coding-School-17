import React from "react";
import Article from "./Article";

export default function Articles({ articles, onBuy }) {
    return (
        <div className="row mt-4">
            {articles.map((elem, i) => (
                <Article
                    key={i}
                    data={elem}
                    onBuy={() => {
                        onBuy(elem);
                    }}
                />
            ))}
        </div>
    );
}
