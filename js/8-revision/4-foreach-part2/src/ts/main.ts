// 1
let classe : string[] = ["mohammed","yasmina", "amine", "salim", "abdel", "majda", "bilal", "laurie", "yahya"]

// 2 et 3
classe.forEach((prenom, index) => {
    if (index % 2 === 1) {
        console.log(prenom.toUpperCase());
    } else {
        console.log(prenom[0].toUpperCase() + prenom.slice(1));
    }
});

// 4 et 5
classe.forEach((prenom, index) => {
    if (prenom.length > 4) {
        if (index % 2 === 1) {
            console.log(prenom);
        } else {
            console.log(prenom[0].toUpperCase());
        }
    }
});

// 6 et 7
classe.forEach((prenom) => {
    if (['a', 'e', 'm', 'f', 'y', 'n'].includes(prenom[0])) {
        console.log(prenom);
        if (prenom.length > 5) {
            console.log(prenom);
        }
    }
});