// exo 1
let myBody = document.getElementsByTagName("body")[0];
// document.body; 
// exo 2
console.log(myBody.firstElementChild);

// exo 3
console.log(myBody.lastElementChild);

// exo 4
let exo4 = document.getElementsByTagName('div')[0].children;
// childnodes = balises + text
// children = balise
console.log(exo4);

// exo 5
let exo5 = document.getElementsByTagName('li')[0];
// nextelementsubling n'est pas une méthode?!
console.log(exo5.nextElementSibling); // = console.log(exo5.nextSibling.nextSibling);

// exo 6
let exo6 = document.getElementsByTagName('li')[1];
console.log(exo6.previousElementSibling);