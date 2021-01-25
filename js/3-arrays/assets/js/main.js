// exercice 1
// 1
let myArray = ["c15", "c16", "c17"];
// 2, 3
console.log(myArray, myArray.length);
// 4
console.log(myArray[0], myArray[1], myArray[2]);
// 5
myArray.push(...["bilal", 42]);
console.log(myArray);
// 6
myArray.unshift(...[false, 3.14]);
console.log(myArray);
// 7
myArray.pop();
console.log(myArray);
// 8
myArray.shift();
console.log(myArray);
// 9
myArray[3] = "coding-school-17";
// myArray.splice(3, 1, "coding-school-17");
console.log(myArray);
// 10
console.log("c15", myArray.indexOf("c15"));
// 11
let elem = myArray.splice(3, 1);
console.log(elem, myArray);
// 12
myArray.reverse();
console.log(myArray);
// 13
myArray.splice(3, 0, "nathan");
console.log(myArray);
// exercice 2
// 1
let array = [4, 5, 2, 1, 3];
console.log(array);
// 2
console.log(array.sort());
// 3
let string = array.toString();
console.log(string);

string = array.join('/');
console.log(string);
// 4
array = string.split('/').map(Number);
console.log(array, array.length);
