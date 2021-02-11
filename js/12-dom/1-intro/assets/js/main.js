// 5 manières de getelement queryselector
let text = document.getElementById("d1")
console.log(typeof document.getElementById("t2"));
console.log(document.getElementsByClassName("titre")[0]);
console.log(document.getElementsByTagName("h1"));
console.log(document.querySelector(".titre"));
console.log(document.querySelectorAll("h1"));

text.appendChild(document.getElementById("t2"));
console.log(text);