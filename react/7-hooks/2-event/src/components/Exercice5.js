import React from "react";

export default function Exercice5(props) {
    return (
        <div className="my-5">
            <h1>Exercice 5</h1>
            <button
                className="btn btn-primary"
                onClick={() => {
                    alert("hello world");
                }}
            >
                hello world
            </button>
        </div>
    );
}
