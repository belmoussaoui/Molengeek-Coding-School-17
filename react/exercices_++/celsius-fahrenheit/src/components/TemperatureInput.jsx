import React from "react";

export default function TemperatureInput({ temperature, onChange, scale }) {
    const name = scale === "c" ? "celsius" : "farenheit";
    return (
        <div className="my-3">
            <label htmlFor="celsius">Température (en {name})</label>
            <input
                type="text"
                id={name}
                value={temperature}
                className="form-control"
                onChange={onChange}
            />
        </div>
    );
}
