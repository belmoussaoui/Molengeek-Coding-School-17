# Kahoot
- js tourne du côté client (node tourne côté serveur)
- slice prend comme premier paramètre l'indice de départ... et le deuxième paramètre l'indice de fin non compris... et ne modifie pas l'array!
```js
// slice
let a = "Hello world"
a.slice(2, 7); // return "llo w"
console.log(a); // "Hello world"

// splice
a = [1, 2, 3, 4]
a.splice(0); // return [1, 2, 3, 4]
console.log(a); // []
```
- innerText/innerContent efface tout le contenu de la balise c-à-d les balises enfants aussi!
-  les variables en sass -> $var: ...
- compilation sass = sass ./src/sass/style.sass ./public/css/style.css
- créer plusieurs fichier via le terminal = touch file1 file2 file3 ...
- obtenir une propriété en js
```js
window.getComputedStyle(div).display;
div.style.display;
```
- `git checkout` pour changer de branche et `git branch new-branch` pour créer une nouvelle branche ou `git branch` pour afficher la liste des branches (on peut aussi créer une nouvelle branche `git checkout -b ma-branch`
- incrémentation en js
```js
let i = 11;
i = ++i; // 12
i = i++; // 12 car i = i && i + 1;
```
- passage par référence pour les types primitifs sauf pour les objets (array est un objet)
```js
let a = [1, 2];
b = a;
b.push(3);
console.log(a); // [1, 2, 3]
```
- snippet vs code avec le $0, $1, ..., $n
- nombre d'itérations
```js
let i = 10;
// 10 fois
while (0 < i--) {
    console.log('ok');
}
let i = 10;
// 9 fois
while (0 < --i) {
    console.log('ok');
}
```
- le code suivant retourne un warning parce qu'on réalise une condition non stricte (strict mode)
```js
if (this.state.title == "test") {
	return "c'est un test";
}
```
- il y a deux manières pour créer un state grâce à babel
```js
class Test extends React.Component{
	constructor() {
		this.state = {}
	}
}

class Test extends React.Component{
	state = {} // with babel
}
```
- la méthode map d'un array doit toujours retourner un return sauf si pas d'accolade dans la fonction fléchée car return automatique.
- les tableaux sont toujours au pluriel dans le model -> `tables`

> Written with [StackEdit](https://stackedit.io/).
