// 1
console.log(document.querySelector("#content"));

// 2
console.log(document.querySelectorAll("#content")[0]);

// 3
console.log(document.querySelector("li.important"));

// 4
console.log(document.querySelectorAll("li.important"));

// 5
[...document.querySelectorAll("li")].forEach(elem => {
    elem = elem.innerText;
    console.log(elem.slice(0, elem.length-1) + elem[elem.length-1].toUpperCase());
})
// 6
console.log(document.querySelector("div#content p.grandParagraphe"));
console.log(document.getElementById("content").getElementsByClassName("grandParagraphe")[0]);