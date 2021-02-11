import Patient from "./patient.js"

let patients = [];
patients.push(new Patient("Marcus", "mal indenté", 100));
patients.push(new Patient("Optimus", "unsave", 200));
patients.push(new Patient("Sangoku", "404", 80));
patients.push(new Patient("DarthVader", "azmatique", 110));
patients.push(new Patient("Semicolon", "syntaxError", 60));

let chat = {
    "type": "sphynx",
    miaou() {
        setTimeout(() => {
            // miaou seulement si patient dans le cabinet
            if (doctor.cabinets.length > 1) {
                console.log('miaou');
            }
            this.miaou();
        }, 2000);
    }
};
chat.miaou();

let doctor = {
    nom: "Debugger",
    argent: 0,
    cabinets: [chat],
    attente: patients,
    *diagnostique() {
        let patient = this.cabinets[this.cabinets.length - 1];
        let traitement;
        yield console.log(`La maladie de ${patient.nom} est ${patient.maladie}`);
        for (let d of diagnostiques) {
            if (d.maladie === patient.maladie) {
                traitement = d.traitement;
                break;
            }
        }
        yield console.log(`Le traitement de ${patient.nom} est ${traitement}`);
        if (patient.payer(this, 50)) {
            yield console.log(patient.nom, "a payé le docteur");
            yield console.log(patient.nom, "a actuelement", patient.argent + "$");
        };
        patient.traitement = traitement;
        patient.etat = "traitement";
    },
    patientIn() {
        let patient = this.attente.shift();
        console.log(patient.nom, "est entré au cabinet");
        patient.goTo(this.attente, this.cabinets);
    },
    patientOut() {
        let patient = this.cabinets.pop();
        console.log(patient.nom, "a quitté le cabinet");
        return patient;
    }
}

class Diagnostique {
    constructor(maladie, traitement) {
        this.maladie = maladie;
        this.traitement = traitement;
    }
}

let diagnostiques = [];
diagnostiques.push(new Diagnostique("mal indenté", "ctrl+maj+f"));
diagnostiques.push(new Diagnostique("unsave", "saveOnFocusChange"));
diagnostiques.push(new Diagnostique("404", "CheckLinkRelation"));
diagnostiques.push(new Diagnostique("azmatique", "Ventoline"));
diagnostiques.push(new Diagnostique("syntaxError", "f12+doc"));

let pharmacie = [];
let cimetiere = [];

class Traitement {
    constructor(traitement, prix) {
        this.traitement = traitement;
        this.prix = prix;
    }
}

let traitements = [];
traitements.push(new Traitement("ctrl+maj+f", 60));
traitements.push(new Traitement("saveOnFocusChange", 100));
traitements.push(new Traitement("CheckLinkRelation", 35));
traitements.push(new Traitement("Ventoline", 40));
traitements.push(new Traitement("f12+doc", 20));

function* codePital() {
    while (doctor.attente.length > 0) {
        console.log("---------------------");
        yield console.log(`Dans la salle d'attente il y a ${doctor.attente.length} personne(s)`);
        yield doctor.patientIn();
        yield* doctor.diagnostique();
        let patient = doctor.patientOut();
        yield;
        patient.goTo([], pharmacie)
        yield console.log(`${patient.nom} est allé à pharmacie`);
        if (!patient.takeCare(traitements)) {
            yield
            yield console.log(`${patient.nom} n'a pas assez d'argent pour payer le traitement`)
            yield console.log(`${patient.nom} est mort, donc il est au cimetiere`);
            patient.goTo(pharmacie, cimetiere);
        } else {
            yield
            yield console.log(`${patient.nom} est soigné`);
        }
    }
}

nextStep(codePital());
function nextStep(iterator) {
    setTimeout(() => {
        let res = iterator.next();
        if (!res.done) {
            nextStep(iterator);
        }
    }, 1500);
}
