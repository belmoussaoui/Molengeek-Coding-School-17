import React, { useState, useEffect } from "react";
import { Game } from "../js/game.js";

var $data = null;
fetch("./data/objects.json")
    .then((response) => response.json())
    .then((json) => {
        $data = json;
    });

export default function Object3D() {
    const [objectId, setobjectId] = useState(Game.objectId);

    useEffect(() => {
        const timer = setInterval(() => {
            setobjectId(Game.objectId);
        }, 1000 / 60);
        return function () {
            clearInterval(timer);
        };
    }, []);

    return (
        <div>
            <h3 className="mt-5">{$data[objectId].name}</h3>
            <p className="mt-2 card-text">{$data[objectId].description}</p>
        </div>
    );
}
