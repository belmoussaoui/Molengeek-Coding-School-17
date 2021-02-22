// 1
let h2 = document.querySelector("h2");
console.log(h2.textContent);

// 2
h2.textContent = "Exercice 1";
console.log(h2.textContent);

// 3
let p = document.querySelector("h2 + p");
p.textContent = 'h2.textContent = "Exercice 1";'; //h2.innerHTML
console.log(p);

// 4
let section = document.querySelector("section");
console.log(section.id);

// 5
let h1 = document.querySelector("h1");
console.log(h1.className, ...h1.classList);

// 6
let allH1 = document.querySelectorAll("h1");
allH1.forEach((h1) => {
    console.log(h1.className);
});

// 7
let input = document.querySelector("input");
console.dir(input);
console.log(input.attributes);
// for (let i in input.attributes) {
//     console.log(i);
// }

// 8
console.log(input.attributes.type, input.type);

// 9
let password = document.querySelector("input#inputPassword3");
password.type = "password";

// 10
input.type = "color";
