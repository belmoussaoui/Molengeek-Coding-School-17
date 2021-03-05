let game = document.querySelector("#game");
let tiles = game.querySelectorAll(".row div");
let message = game.querySelector("span");
for (tile of tiles) {
    tile.addEventListener("click", onTile);
}
let map = [0, 0, 0, 0, 0, 0, 0, 0, 0];

let playerTurn;
function start() {
    playerTurn = 0;
    updateTurn();
}

function onTile(e) {
    if (playerTurn === 2) {
        return;
    }
    let div = e.currentTarget;
    let pos = [...tiles].indexOf(div);
    if (map[pos] !== 0) {
        return;
    }
    let i = div.firstChild;
    i.className += className();
    i.style.color = playerColor();
    map[pos] = playerTurn;
    endTurn();
}

function endTurn() {
    if (checkVictory(playerTurn)) {
        victoryMessage();
        blockGame();
        setTimeout(reset, 2000);
    } else if (!map.some((v) => v === 0)) {
        nullMessage();
        blockGame();
        setTimeout(reset, 2000);
    } else {
        updateTurn();
        if (!isPlayer1()) {
            setTimeout(updatePlayer2, 1000);
        }
    }
}

function updatePlayer2() {
    let index = [];
    for (let i = 0; i < map.length; i++) {
        if (map[i] === 0) index.push(i);
    }
    let pos = index[Math.floor(Math.random() * index.length)];
    let i = tiles[pos].firstChild;
    i.className += className();
    i.style.color = playerColor();
    map[pos] = playerTurn;
    endTurn();
}

function blockGame() {
    for (tile of tiles) {
        tile.removeEventListener("click", onTile);
    }
}

function updateTurn() {
    playerTurn = playerTurn !== 1 ? 1 : 2;
    message.textContent = "C'est au tour de joueur " + playerTurn;
}

function victoryMessage() {
    message.textContent = `Joueur ${playerTurn} a gagné!`;
}

function nullMessage() {
    message.textContent = `Aucun joueur a gagné!`;
}

function isPlayer1() {
    return playerTurn === 1;
}

function className() {
    return " " + (isPlayer1() ? "fas fa-times" : "far fa-circle");
}

function playerColor() {
    return isPlayer1() ? "red" : "blue";
}

function checkVictory(p) {
    return checkHzVictory(p) || checkVtVictory(p) || checkObVictory(p);
}

function checkHzVictory(p) {
    // formalisation pour dimension = n!
    const n = Math.sqrt(map.length);
    for (let i = 0; i < n; i++) {
        let row = map.slice(i * n, i * n + n);
        if (row.every((v) => v === p)) {
            return true;
        }
    }
    // return false;
    // return (
    //     (map[0] === p && map[1] === p && map[2] === p) ||
    //     (map[3] === p && map[4] === p && map[5] === p) ||
    //     (map[6] === p && map[7] === p && map[8] === p)
    // );
}

function checkVtVictory(p) {
    const n = Math.sqrt(map.length);
    for (let i = 0; i < n; i++) {
        let col = map.filter((e, index) => index % n === i);
        if (col.every((v) => v === p)) {
            return true;
        }
    }
    return false;
    // return (
    //     (map[0] === p && map[3] === p && map[6] === p) ||
    //     (map[1] === p && map[4] === p && map[7] === p) ||
    //     (map[2] === p && map[5] === p && map[8] === p)
    // );
}

function checkObVictory(p) {
    const n = Math.sqrt(map.length);
    let obl1 = map.filter((e, i) => i % (n + 1) === 0);
    let obl2 = map.filter(
        (e, i) => i % (n - 1) === 0 && i !== 0 && i !== map.length - 1
    );
    return obl1.every((v) => v === p) || obl2.every((v) => v === p);
    // return (
    //     (map[0] === p && map[4] === p && map[8] === p) ||
    //     (map[2] === p && map[4] === p && map[6] === p)
    // );
}

function reset() {
    map = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    for (tile of tiles) {
        tile.firstChild.className = "";
        tile.addEventListener("click", onTile);
    }
    message.textContent = "";
    start();
}

window.onload = function () {
    start();
};
