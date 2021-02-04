// 1
let classe : string[] = ["mohammed", "yasmina", "amine", "salim", "abdel", "majda", "bilal", "laurie", "yahya"]

// 2
classe.forEach((prenom, index) => {
    if (['a', 'e', 'm', 'f', 'y', 'n'].includes(prenom[0])) {
        if (prenom.length < 5) {
            console.log(prenom);
        }
    }
    if (['k', 'c', 'm', 'f', 'y', 'n', 'a', 'e', 'p', 'o'].includes(prenom[0])) {
        if (prenom.length > 4 && index % 2 === 1) {
            console.log(prenom);
        }
    }
});


// 3
classe.forEach((prenom, index) => {
    if (['k', 'c', 'm', 'f', 'y', 'n', 'a', 'e', 'p', 'o'].includes(prenom[0])) {
        if (prenom.length > 5 && index % 2 === 0) {
            console.log(prenom[0].toLowerCase() + prenom[1].toLowerCase() + prenom.slice(2, prenom.length-1) + prenom[prenom.length - 1].toUpperCase());
        }
    }
});

// 4
let res = '';
classe.forEach((prenom, index) => {
    if (['k', 'm', 'f', 'y', 'n', 'a', 'e', 'o'].includes(prenom[0])) {
        if (prenom.length < 7 && index % 2 === 0) {
            res += prenom[0].toUpperCase() + prenom[1].toLowerCase();
        }
    }
});
console.log(res);