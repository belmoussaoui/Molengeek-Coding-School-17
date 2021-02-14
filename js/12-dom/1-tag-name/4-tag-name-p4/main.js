// 1
// https://stackoverflow.com/a/35213639
// console.log(document.getElementsByTagName("h1")[1].textContent);
console.log(document.getElementsByTagName("h1")[1].innerText);

// 2
let li = document.getElementsByTagName("li");
console.log(li[li.length - 1].innerText);

// 3
console.log(document.getElementsByTagName("p")[0].innerText.toUpperCase());

// 4
for (let elem of document.getElementsByTagName("li")) {
    console.log(elem.innerText.toUpperCase());
}

Array.from(document.getElementsByTagName("li")).forEach(element => {
    console.log(element.innerText.toUpperCase());
});

[...document.getElementsByTagName("li")].forEach(element => {
    console.log(element.innerText.toUpperCase());
});


