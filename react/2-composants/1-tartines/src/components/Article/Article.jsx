import React from "react";
import "./article.css";
import Toast from "./toast.jpg";

export default class Article extends React.Component {
    render() {
        return (
            <article className="row">
                <img className="col-6" src={Toast} alt="" />
                <div className="col-6 article">
                    <h2>Mon premier article</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Alias sit quidem suscipit, deserunt aspernatur et
                        fugit ipsum cum? Necessitatibus nulla perferendis alias
                        sequi dolor facere veniam cupiditate quos fugit!
                        Perspiciatis.
                    </p>
                </div>
            </article>
        );
    }
}
