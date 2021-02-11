// 1
const h1 = document.getElementsByTagName("h1");
console.log(h1);
// 2
const h3 = document.getElementsByTagName("h3");
let [h3_1, h3_2, h3_3] = [...h3];
console.log(h3_1, h3_2, h3_3);
// 3
const p = document.getElementsByTagName("p");
let p2 = p[1];
console.log(p2);
// 4
const li = document.getElementsByTagName("li");
let li_3 = li[2];
console.log(li_3[2]);
