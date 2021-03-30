import React from "react";

export default function Article({ data }) {
    return (
        <ul className="">
            <li>{data.nom}</li>
            <li>{data.prix} euros</li>
        </ul>
    );
}
