let divs = document.getElementsByTagName("div");
let lastDiv = divs[divs.length - 1];

// 1
console.log(lastDiv.firstElementChild);

// 2
console.log(lastDiv.lastElementChild);

// 3
let firstp = lastDiv.getElementsByTagName("p")[0];
console.log(firstp.getElementsByTagName("i")[0]);

// 4
let allp = lastDiv.getElementsByTagName("p");
let lastp = allp[allp.length - 1];
// console.log(lastp);
console.log(lastp.getElementsByTagName("b")[0]);

// 5
console.log(document.getElementsByTagName("i")[0].parentElement);

// 6
console.log(document.getElementsByTagName("b")[0].parentElement);

// 7
console.log(lastDiv.firstElementChild.nextElementSibling);

