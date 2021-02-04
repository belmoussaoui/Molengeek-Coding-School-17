interface Person {
    nom: {
        prenom: string,
        nomDeFamille: string
    }
    age?: number,
    moral?: string,
    objet?: string,
    parler?: () => void
    adoucir?: () => void
}

// 1
let vieille_dame: Person = {
    nom: {
        prenom: "Jeanne",
        nomDeFamille: "Calment"
    },
    age: 122,
    moral: "mal",
    objet: "canne"
}

// 2
vieille_dame.parler = function() {
    switch (this.moral) {
        case 'mal':
            alert("Vous me dérangez et le frappe avec son objet");
            break;
        case 'bien':
            alert(`bonjour ${vieil_homme.nom.prenom} ${vieil_homme.nom.nomDeFamille}`);
    }
}

// 3
let vieil_homme: Person = {
    nom: {
        prenom: "Michel",
        nomDeFamille: "Fugain"
    },
    adoucir() {
        vieille_dame.moral = "bien";
    }
}

vieille_dame.parler();
vieil_homme.adoucir();
vieille_dame.parler();
