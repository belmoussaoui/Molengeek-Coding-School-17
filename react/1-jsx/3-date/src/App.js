function getDate() {
    const date = new Date();
    return (
        date.getDate() +
        "/" +
        (date.getMonth() + 1).toString().padStart(2, "0") +
        "/" +
        date.getFullYear()
    );
}

export default function App() {
    return (
        <div className="App">
            <h1>{getDate()}</h1>
        </div>
    );
}
