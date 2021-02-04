// 1
let firstName = prompt("Quel est ton prénom?");
alert(`Bonjour ${firstName}`);
// 2
let age = parseInt(prompt("Quel est ton âge?", "0")) || 0;
alert(`Tu as ${age}`);
// 3
let lastName = prompt("Quel est ton nom?");
alert(`Bonjour ${firstName} ${lastName}`);
// 4
alert(`Bonjour "${lastName.toUpperCase()} ${firstName}"`);
