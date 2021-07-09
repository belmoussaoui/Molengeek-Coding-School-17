import axios from "axios";
import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";

const Todo = () => {
    // Ici je vais créer un state pour la valeur de mon input principal
    const [inputValue, setInputValue] = useState("");
    // Ce state est celui de mon table qui contient tous les éléments dont j'ai besoin
    const [liste, setListe] = useState([]);
    // Ici je vais créer un state pour la valeur de mon input dans le bouton edit
    const [inputEdit, setInputEdit] = useState("");

    useEffect(() => {
        axios
            .get("api/todo")
            .then((reponse) => {
                setListe(reponse.data);
                console.log(reponse);
            })
            .catch((error) => {
                console.log(error);
            });
    }, []);

    // Le but de cette function est de modifier la valeur de l'input par les éléments qu'on met dans l'input
    let handleChange = (e) => {
        setInputValue(e.target.value);
    };
    // Le but de cette function est d'ajouter des éléments dans le tableau liste
    let handleSubmit = () => {
        // On crée une variable et le valeur de cette variable est une copie du tableau liste
        let newListe = [...liste];
        // Si l'input est vide, il sort de la function
        if (inputValue === "") {
            return;
        }
        // On crée un objet avec les valeurs qu'on veut
        let task = {
            // Valeur de l'input
            valeur: inputValue,
            // Le validate est false
            validate: 0,
            // Le edit est false
            edit: 0,
        };
        axios
            .post("api/todo/store", task)
            .then((reponse) => {
                console.log(reponse);
                newListe.push(task);
                setListe(newListe);
                setInputValue("");
            })
            .catch((erreur) => {
                console.log(erreur);
            });
        newListe.push(task);
        setListe(newListe);
        setInputValue("");
    };
    // Le but de cette function est de changer entre true et false la valeur du validate, pour changer la couleur plus tard
    let handleValidate = (i) => {
        let listeValidated = [...liste];
        if (listeValidated[i].validate === 0) {
            listeValidated[i].validate = 1;
        } else {
            listeValidated[i].validate = 0;
        }
        setListe(listeValidated);
    };

    // Le but de cette function est de supprimer un élément précis dans le tableau, c'est pour ça qu'on recupere l'index de l'élément
    let handleDelete = (i) => {
        // On crée une variable et le valeur de cette variable est une copie du tableau liste
        let listeDeleted = [...liste];
        // listeDeleted.splice(i, 1);
        // setListe(listeDeleted);
        console.log(listeDeleted[i].id);
        axios
            .delete(`api/todo/delete/${listeDeleted[i].id}`)
            .then((reponse) => {
                listeDeleted.splice(i, 1);
                setListe(listeDeleted);
                console.log(reponse);
            })
            .catch((erreur) => {
                console.log(erreur);
            });
    };
    // Le but de cette function est de modifier la valeur de l'input qu'il apparait quand on appui sur le bouton edit par les éléments qu'on met dans l'input
    let handleChangeEdit = (e) => {
        setInputEdit(e.target.value);
    };
    // Le but de cette function est de modifier un élément précis dans le tableau
    let handleEdit = (i) => {
        // On crée une variable et le valeur de cette variable est une copie du tableau liste
        let editValue = [...liste];
        console.log(i);
        axios
            .put(`api/todo/update/${editValue[i].id}`, editValue[i])
            .then((reponse) => {
                setListe(editValue);
                console.log(reponse);
            })
            .catch((erreur) => {
                console.log(erreur);
            });
        // Une condition pour changer la valeur du edit entre true et false
        if (editValue[i].edit === 0) {
            editValue[i].edit = 1;
        } else {
            editValue[i].valeur = inputEdit;
            editValue[i].edit = 0;
        }
        setListe(editValue);
    };

    return (
        <div className="container">
            <h2 className="text-center my-4">Todo List</h2>
            <div className="d-flex align-items-center">
                <input
                    value={inputValue}
                    onChange={handleChange}
                    className="w-85 py-2 input px-3"
                    type="text"
                />
                <button
                    onClick={handleSubmit}
                    className="btn btn-primary w-15 py-2"
                >
                    Add
                </button>
            </div>
            <ul className="list-group">
                {liste.map((e, i) => {
                    if (e.edit === 0) {
                        return (
                            <li
                                key={i}
                                className={`my-2 p-1 list-group-item d-flex justify-content-between align-items-center ${
                                    e.validate === 1
                                        ? "bg-success text-white"
                                        : "bg-light"
                                }`}
                            >
                                {e.valeur}
                                <div className="buttons">
                                    <button
                                        onClick={() => handleValidate(i)}
                                        className="btn btn-success mx-1"
                                    >
                                        <i className="fas fa-check"></i>
                                    </button>
                                    <button
                                        onClick={() => handleEdit(i)}
                                        className="btn btn-warning mx-1"
                                    >
                                        <i className="fas fa-edit"></i>
                                    </button>
                                    <button
                                        onClick={() => handleDelete(i)}
                                        className="btn btn-danger mx-1"
                                    >
                                        <i className="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </li>
                        );
                    } else {
                        return (
                            <li
                                key={i}
                                className={`my-2 p-1 list-group-item d-flex justify-content-between align-items-center ${
                                    e.validate === 1
                                        ? "bg-success text-white"
                                        : "bg-light"
                                }`}
                            >
                                <input
                                    value={inputEdit}
                                    onChange={handleChangeEdit}
                                    type="text"
                                />
                                <div className="buttons">
                                    <button
                                        onClick={() => handleEdit(i)}
                                        className="btn btn-warning mx-1"
                                    >
                                        <i className="fas fa-edit"></i>
                                    </button>
                                </div>
                            </li>
                        );
                    }
                })}
            </ul>
        </div>
    );
};

if (document.getElementById("todo")) {
    ReactDOM.render(<Todo />, document.getElementById("todo"));
}
