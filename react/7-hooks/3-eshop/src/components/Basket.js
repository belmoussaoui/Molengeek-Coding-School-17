import React from "react";
import BasketItem from "./BasketItem";

export default function Basket({ basket, onRemove }) {
    return (
        <ul className="list-group my-4">
            {basket.map((elem, i) => (
                <BasketItem
                    key={i}
                    data={elem}
                    onRemove={() => {
                        onRemove(i);
                    }}
                />
            ))}
        </ul>
    );
}
