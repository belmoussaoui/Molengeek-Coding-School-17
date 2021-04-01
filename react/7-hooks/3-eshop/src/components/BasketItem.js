import React from "react";

export default function BasketItem({ data, onRemove }) {
    return (
        <li className="list-group-item d-flex justify-content-between align-items-center">
            Produit : {data.name} || Unités : 1
            <button onClick={onRemove} className="btn btn-danger">
                Retirer
            </button>
        </li>
    );
}
