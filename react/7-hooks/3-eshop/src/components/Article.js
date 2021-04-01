import React from "react";

export default function Article({ data, onBuy }) {
    return (
        <div className="col-4">
            <div className="card">
                <img src={data.img} className="card-img-top" alt="..." />
                <div
                    className={
                        "card-body " +
                        (data.stock === 0
                            ? "bg-danger"
                            : data.stock === 1
                            ? "bg-warning"
                            : "bg-white")
                    }
                >
                    <h5 className="card-title">{data.name}</h5>
                    <p className="card-text">Prix: {data.price}</p>
                    <p className="card-text">Stock: {data.stock}</p>
                    {data.stock > 0 ? (
                        <button
                            onClick={onBuy}
                            href="#"
                            className="btn btn-primary"
                        >
                            Acheter
                        </button>
                    ) : (
                        <span>Plus de stock!</span>
                    )}
                </div>
            </div>
        </div>
    );
}
