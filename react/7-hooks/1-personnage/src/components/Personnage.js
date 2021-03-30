import React from "react";

export default function Personnage({ data, onRename }) {
    return (
        <div className="mt-5 container">
            <h2>Personnage</h2>
            <ul className="">
                <li>{data.nom}</li>
                <li>{data.prenom}</li>
                <li>{data.age}</li>
                <li>{data.commune}</li>
            </ul>
            <button className="btn btn-primary" onClick={onRename}>
                rename
            </button>
        </div>
    );
}
