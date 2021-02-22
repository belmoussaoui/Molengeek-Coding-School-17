// 1
let myElements = document.querySelectorAll("#object *");
console.log(myElements);

// 2
let objet = {
    nom: "bilal",
    age: 24,
};
console.log(Object.keys(objet));

// 3
for (let elem in objet) {
    console.log(elem);
}

// 4
for (let elem in objet) {
    console.log(objet[elem]);
}

// 5
Object.values(objet).forEach((value, index) => {
    console.log(value, index);
});

// 6
Object.values(myElements).forEach((value, index) => {
    value.textContent = Object.values(objet)[index];
});
