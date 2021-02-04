let codingSchool17 = [];

let append = (prenom: string) => {
    codingSchool17.push(prenom);
    console.log(`${prenom} rentre en classe`);
}

let remove = (prenom: string) => {
    let index = codingSchool17.indexOf(prenom);
    if (index >= 0) {
        codingSchool17.splice(index, 1);
        console.log(`${prenom} sort de la classe`);
    }
}

append("Antoine");
append("Saïd");
append("Abdel");
append("Nathan");
append("Yasmina");
remove("Abdel");
append("Gauthier");
remove("Saïd");
remove("Yasmina");

// Exo 2 Premier
let estPremier = (nbr : number, currentNbr = nbr) => {
    currentNbr--;
    if (currentNbr === 1) return true;
     // if (nbr % currentNbr === 0)
    //     return false;
    // else
    //     return estPremier(nbr, currentNbr);
    switch (nbr % currentNbr) {
        case 0: return false;
        default: return estPremier(nbr, currentNbr);
    }
}

for (let i = 0; i < 100; i++) {
    if (estPremier(i)) {
        console.log(i);
    }
}
