import React, { useState } from "react";

export default function Exercice2(props) {
    const [content, setContent] = useState("Input Content");
    const handleEnter = (e) => {
        if (e.key === "Enter") {
            setContent(e.currentTarget.value);
        }
    };
    return (
        <div className="my-5">
            <h1>Exercice 2</h1>
            <h6 className="my-3">{content}</h6>
            <input type="text" onKeyDown={handleEnter} />
        </div>
    );
}
