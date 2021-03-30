import React, { useState } from "react";

export default function Exercice1(props) {
    const [counter, setCounter] = useState(0);
    return (
        <div className="my-5">
            <h1>Exercice 1</h1>
            <h6 className="my-3">You've have clicked {counter} times</h6>
            <button
                onClick={() => setCounter(counter + 1)}
                className="btn btn-primary"
            >
                +1
            </button>
        </div>
    );
}
