// Exo 1
let classe: string[] = [];

for (let i = 0; i < 3; i++) {
    classe.push("personne" + i);
}
for (let i = 0; i < classe.length; i++) {
    console.log("bonjour", classe[i]);
}

// Exo 2
let nombre: number = parseInt(prompt("un nombre")) || 10;

for (let i = 0; i <= nombre; i++) {
    console.log(i);
}


