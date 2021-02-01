let prenom;
// 1
do {
    prenom = prompt("votre prénom");
} while (!prenom);
alert(prenom[0]);
// 2
do {
    prenom = prompt("votre prénom");
} while (!prenom);
alert(prenom.slice(1));
// 3
do {
    prenom = prompt("votre prénom");
} while (!prenom);
prenom[4] ? alert(prenom[4]) : alert("votre prénom était trop court");
// 4
do {
    prenom = prompt("votre prénom");
} while (!prenom);
if (prenom[4])
    alert(prenom[4]);
else {
    alert(prenom[prenom.length - 1]);
    alert(`votre prénom était trop court (${prenom.length})`);
}
// 5
do {
    prenom = prompt("votre prénom");
} while (!prenom);
alert(prenom.toLowerCase());
alert(prenom.toUpperCase());
alert(prenom[0].toUpperCase() + prenom.slice(1).toLowerCase());
alert(prenom[0].toLowerCase() + prenom.slice(1).toUpperCase());
