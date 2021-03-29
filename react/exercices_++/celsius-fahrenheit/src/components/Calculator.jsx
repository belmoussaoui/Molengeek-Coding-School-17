import React, { useState } from "react";
import BoilingVerdict from "./BoilingVerdict";
import TemperatureInput from "./TemperatureInput";

function toCelsius(farenheit) {
    return ((farenheit - 32) * 5) / 9;
}

function toFarenheit(celsius) {
    return (celsius * 9) / 5 + 32;
}

export default function Calculator() {
    const [temperature, setTemperature] = useState(0);
    const [scale, setScale] = useState("c");

    const handleChange = (e, scale) => {
        setTemperature(e.target.value);
        setScale(scale);
    };

    const celsius = scale === "c" ? temperature : toCelsius(temperature);
    const farenheit = scale === "f" ? temperature : toFarenheit(temperature);

    return (
        <>
            <div className="form-group">
                <TemperatureInput
                    scale="c"
                    temperature={celsius}
                    onChange={(e) => handleChange(e, "c")}
                />
                <TemperatureInput
                    scale="f"
                    temperature={farenheit}
                    onChange={(e) => handleChange(e, "f")}
                />
            </div>
            <BoilingVerdict celsius={celsius}></BoilingVerdict>
        </>
    );
}
