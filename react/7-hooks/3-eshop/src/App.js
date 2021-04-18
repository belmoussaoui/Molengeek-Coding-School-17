import React, { useState } from "react";
import Articles from "./components/Articles";
import Basket from "./components/Basket";

import React from 'react'




export default function App() {
    const [money, setMoney] = useState(20);
    const [basket, setBasket] = useState([]);
    const [articles, setArticles] = useState([
        {
            name: "Coca Cola",
            price: 1,
            stock: 5,
            img: "./img/coca.jpg",
        },
        {
            name: "Fanta",
            price: 1.5,
            stock: 5,
            img: "./img/fanta.jpg",
        },
        {
            name: "Ice tea",
            price: 2,
            stock: 5,
            img: "./img/ice-tea.jpg",
        },
    ]);

    const handleBuy = (article) => {
        const index = articles.indexOf(article);
        if (isValid(article)) {
            changeMoney(-article.price);
            changeStock(index, -1);
            addToBasket(article);
        }
    };

    const isValid = (article) => {
        return article.price <= money && article.stock > 0;
    };

    const changeMoney = (price) => {
        setMoney(money + price);
    };

    const changeStock = (index, quantity) => {
        const copy = articles.slice();
        copy[index].stock += quantity;
        setArticles(articles);
    };

    const addToBasket = (article) => {
        setBasket([...basket, article]);
    };

    const handleRemove = (index) => {
        const item = basket[index];
        let copy = [...basket];
        copy.splice(index, 1);
        changeStock(articles.indexOf(item), 1);
        changeMoney(item.price);
        setBasket(copy);
    };

    return (
        <div className="container">
            <h2>Mon argent: {money}</h2>
            <Articles articles={articles} onBuy={handleBuy} />
            <Basket basket={basket} onRemove={handleRemove} />
        </div>
    );
}
