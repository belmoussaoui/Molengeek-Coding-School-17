import React, { useState } from "react";

export default function Exercice4() {
    const [style, setStyle] = useState({});

    const handleBackground = () => {
        setStyle({
            background: "green",
        });
    };

    const handleBlur = () => {
        setStyle({});
    };

    return (
        <div className="my-5">
            <h1>Exercice 4</h1>
            <h6 className="my-3">Change Bg</h6>
            <input
                style={style}
                type="text"
                onFocus={handleBackground}
                onBlur={handleBlur}
            />
        </div>
    );
}
