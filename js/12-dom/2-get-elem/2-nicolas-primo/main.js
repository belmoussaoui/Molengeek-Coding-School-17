// 1
console.log(document.getElementById("content").firstElementChild);

// 2
console.log(document.getElementById("titreNiv3"));

// 3
console.log(document.getElementById("titreNiv3").previousElementSibling);

// 4
console.log(document.getElementsByClassName("petitParagraphe").nextElementSibling);

// 5
console.log(document.getElementsByClassName("important")[0].parentElement);

// 6
console.log(document.getElementById("listElements").parentElement.firstElementChild);

// 7
console.log(document.getElementsByClassName("important")[3].nextElementSibling);

// 8
console.log(document.getElementById("textGeneral").nextElementSibling.nextElementSibling);

// 9
let spanNom = document.querySelector("#footer span");
// let spanNom = document.getElementsByTagName("span")[1];
console.log(spanNom.parentElement.nextElementSibling.firstElementChild);

// 10
// p+p
let nicolas = document.querySelector("#footer p:nth-of-type(2) b");
// let nicolas = document.getElementsByTagName("b")[2];
console.log(nicolas.parentElement.parentElement.previousElementSibling.firstElementChild.firstElementChild);



// 11
console.log(document.querySelector(".grandParagraphe"));

// 12
console.log(document.querySelectorAll("li"))

console.log(document.getElementsByTagName("li"));


for (let elem of document.querySelectorAll("li")) {
    console.log(elem);
}









// 11
let recupPara = document.querySelector(".grandParagraphe");
console.log("Exo 11 : ");
console.log(recupPara);

// 12
let liAll = document.querySelectorAll("li");
console.log("Exo 12 : ");
liAll = Array.from(liAll);

liAll.forEach(element => {
    console.log(element.innerText);
});