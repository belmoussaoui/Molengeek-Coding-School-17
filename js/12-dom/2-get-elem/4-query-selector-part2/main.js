// 1
let redPurple1 = document.getElementsByClassName("redPurple");
console.log(redPurple1);

// 2
let redPurple2 = document.querySelectorAll(".redPurple");
console.log(redPurple2);

// 3
let redPurple3 = document.querySelectorAll("h1.redPurple");
console.log(redPurple3);

// 4
console.log(document.querySelectorAll("li, p, span"));

// 5
console.log(document.querySelectorAll("li.important, p"));

// 6
console.log(document.querySelectorAll("h1.redPurple, span.redPurple"));
