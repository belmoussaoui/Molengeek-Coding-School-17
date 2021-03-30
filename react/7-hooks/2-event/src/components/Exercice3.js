import React from "react";

export default function Exercice3(props) {
    const handleCopy = (e) => {
        alert(e.currentTarget.value);
    };
    return (
        <div className="my-5">
            <h1>Exercice 3</h1>
            <h6 className="my-3">On Copy</h6>
            <input type="text" onCopy={handleCopy} />
        </div>
    );
}
