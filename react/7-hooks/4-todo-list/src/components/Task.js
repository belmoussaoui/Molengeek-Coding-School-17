import React, { useState, useRef } from "react";
export default function Task({ title, onEdit, onDelete, mode }) {
    const [isDone, setIsDone] = useState(false);
    const [isEdit, setIsEdit] = useState(false);

    const input = useRef(null);

    const handleDone = () => {
        setIsDone(!isDone);
    };

    const handleEdit = (e, value = !isEdit) => {
        setIsEdit(value);
        if (value) {
            setTimeout(() => input.current.focus(), 0);
        }
    };

    const handleInput = (e) => {
        if (e.key == "Enter") {
            onEdit(e);
            handleEdit(e);
        }
    };

    if (mode === "done" && !isDone) return null;
    if (mode === "todo" && isDone) return null;

    return (
        <li
            className={`d-flex justify-content-between align-items-center p-1 my-2 ${
                isDone ? "bg-success" : "bg-white"
            }`}
        >
            {isEdit ? (
                <input
                    ref={input}
                    type="text"
                    defaultValue={title}
                    onBlur={(e) => handleEdit(e, false)}
                    onKeyDown={handleInput}
                />
            ) : (
                <span>{title}</span>
            )}
            <div className="d-flex">
                <button onClick={handleDone} className="btn btn-success mx-1">
                    <i className="fas fa-check"></i>
                </button>
                <button
                    onClick={(e) => {
                        console.log("ok");
                        handleEdit(e);
                    }}
                    className="btn btn-warning mx-1"
                >
                    <i className="fas fa-edit"></i>
                </button>
                <button className="btn btn-danger mx-1">
                    <i onClick={onDelete} className="fas fa-trash"></i>
                </button>
            </div>
        </li>
    );
}
