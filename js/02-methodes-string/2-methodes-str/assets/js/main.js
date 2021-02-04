// 1
let phrase = "Bonjour tout le monde    ";
// 2
console.log(phrase.length);
// 3
phrase = phrase.trim();
// 4
console.log(phrase.length);
// 5
console.log(phrase[phrase.length - 1]);
// 6
phrase = phrase.substring(phrase.indexOf(" ") + 1);
console.log(phrase);
// 7
phrase = "Bonjour ".concat(phrase);
console.log(phrase);
// 8
console.log(phrase.substring(0, phrase.indexOf(" ")));
// 9
console.log(phrase.replace("Bonjour", "Hello"));
// 10
console.log(Math.floor(Math.random() * 100));
