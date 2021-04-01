import React, { useState } from "react";
import Task from "./components/Task";

const todo = [
    { id: 1, title: "task 1" },
    { id: 2, title: "task 2" },
    { id: 3, title: "task 3" },
];

var id = todo.length;

export default function App() {
    const [list, setList] = useState(todo);
    const [mode, setMode] = useState("all");

    const handleEdit = (e, index) => {
        const elem = e.currentTarget;
        const text = elem.value;
        let copy = [...list];
        copy[index].title = text;
        setList(copy);
    };

    const handleDelete = (e, index) => {
        let copy = [...list];
        copy.splice(index, 1);
        setList(copy);
    };

    const handleEnter = (e) => {
        const elem = e.currentTarget;
        if (e.key === "Enter") {
            id++;
            setList([...list, { id: id, title: elem.value }]);
            elem.value = "";
        }
    };

    return (
        <div className="container bg-secondary p-5 mt-5">
            <h3 className="mb-4">Hello world</h3>
            <input
                type="text"
                className="form-control my-3"
                placeholder="Que dois-je faire ?"
                onKeyDown={handleEnter}
            />
            <div className="d-flex justify-content-center">
                <button
                    onClick={() => setMode("all")}
                    className="btn btn-success mx-2 border border-1"
                >
                    Toutes
                </button>
                <button
                    onClick={() => setMode("done")}
                    className="btn btn-success mx-2 border border-1"
                >
                    Completées
                </button>
                <button
                    onClick={() => setMode("todo")}
                    className="btn btn-success mx-2 border border-1"
                >
                    À faire
                </button>
            </div>
            <div className="mt-3">
                <ul className="p-0">
                    {list.map((elem, i) => {
                        return (
                            <Task
                                mode={mode}
                                title={elem.title}
                                key={elem.id}
                                onEdit={(e) => handleEdit(e, i)}
                                onDelete={(e) => handleDelete(e, i)}
                            ></Task>
                        );
                    })}
                </ul>
            </div>
        </div>
    );
}
