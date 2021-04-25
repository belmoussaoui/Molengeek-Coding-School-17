import React from "react";
import "./article.css";
import Toast from "./toast.jpg";

export default class Article extends React.Component {
    nombreArticles = 2;

    render() {
        return (
            <article className="row">
                <img className="col-6" src={Toast} alt="" />
                <div className="col-6 article">
                    <h2>{this.props.titre}</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Alias sit quidem suscipit, deserunt aspernatur et
                        fugit ipsum cum? Necessitatibus nulla perferendis alias
                        sequi dolor facere veniam cupiditate quos fugit!
                        Perspiciatis.
                    </p>
                    <button
                        onClick={() => {
                            this.props.onButton(this.nombreArticles);
                        }}
                    >
                        bouton
                    </button>
                </div>
            </article>
        );
    }
}
