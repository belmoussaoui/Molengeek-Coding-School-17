let game = document.querySelector("#game");
let tiles = game.querySelectorAll(".row div");
let message = game.querySelector("span");
for (tile of tiles) {
    tile.addEventListener("click", onTile, { once: true });
}
let map = [0, 0, 0, 0, 0, 0, 0, 0, 0];

let playerTurn;
function start() {
    playerTurn = 0;
    updateTurn();
}

function onTile(e) {
    let div = e.currentTarget;
    let i = div.firstChild;
    i.className += className();
    i.style.color = playerColor();
    map[[...tiles].indexOf(div)] = playerTurn;
    if (checkVictory(playerTurn)) {
        victoryMessage();
        blockGame();
        setTimeout(reset, 2000);
    } else {
        updateTurn();
    }
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
    return (
        (map[0] === p && map[1] === p && map[2] === p) ||
        (map[3] === p && map[4] === p && map[5] === p) ||
        (map[6] === p && map[7] === p && map[8] === p)
    );
}

function checkVtVictory(p) {
    return (
        (map[0] === p && map[3] === p && map[6] === p) ||
        (map[1] === p && map[4] === p && map[7] === p) ||
        (map[2] === p && map[5] === p && map[8] === p)
    );
}

function checkObVictory(p) {
    return (
        (map[0] === p && map[4] === p && map[8] === p) ||
        (map[2] === p && map[4] === p && map[6] === p)
    );
}

function reset() {
    map = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    for (tile of tiles) {
        tile.firstChild.className = "";
        tile.addEventListener("click", onTile, { once: true });
    }
    message.textContent = "";
    start();
}

window.onload = function () {
    start();
};
