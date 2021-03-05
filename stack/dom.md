# Dom

## deux types de nodes
les **elements** sont les balises comme `h1` et les **nodes** sont le contenu des valises
il en existe même un troisième les commentaires!
![héritage des éléments](https://javascript.info/article/basic-dom-node-properties/dom-class-hierarchy.svg)

## récupérer un élément
il y a 5 manières différentes de récupérer un élément
```js
typeof document.getElementById("t2");
document.getElementsByClassName("titre")[0];
document.getElementsByTagName("h1");
document.querySelector(".titre");
document.querySelectorAll("h1");
```
le **query selector** agit comme le **getElement** et fonctionne comme le css et va prendre le premier trouvé

querySelectorAll retourne un tableau qui implémente le forEach alors que getElements retourne un itérateur sans le forEach!

https://developer.mozilla.org/fr/docs/Web/API/NodeList
Bien que  `NodeList`  ne soit pas un tableau (`Array`), il est possible d'itérer dessus en utilisant  `forEach()`. Il peut également être converti en tableau (`Array`) en utilisant  [`Array.from()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/from "La méthode Array.from() permet de créer une nouvelle instance d'Array (une copie superficielle) à partir d'un objet itérable ou semblable à un tableau.").

Néanmoins certains vieux navigateurs n'ont pas encore implémenté  `NodeList.forEach()`  ni  `Array.from()`. Mais ces limitations peuvent être contournées en utilisant  [`Array.prototype.forEach()`](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/forEach "La méthode forEach() permet d'exécuter une fonction donnée sur chaque élément du tableau.")  (plus dans ce document).

`getElementsByTagName` retourne un `HTMLCollection`, pour lequel il y a pas une méthode `forEach`.

## ordre de priorité
javascript va lire toutes les modifications du dom et ensuite procéder à l'affichage. donc les console.log avant innerHtml ne sert à rien. de plus toujours mettre les scripts à la fin du body de html pour chargé tous le dom.

on peut utiliser la fonction onload pour charger tous le dom!
```js
window.onload = function() {
	// attends de charger tous le dom
}
```

## innerText vs textContent
https://kellegous.com/j/2013/02/27/innertext-vs-textcontent/
utiliser le ``textContent ou le innerText`` remplace tous le contenu de la balise! càd que s'il avait une balise enfant, elle est effacé.

## attributes
si on modifies le type par après, input.type va toujours retourner la première valeur et pas attributes! 
```js
input.attributes.type ≠ input.type!
```

## manipulation
### remove
`element.remove()` permet de supprimer un élément et `element.removeChild()` pour supprimer un élément et ses enfants.

### create
`document.createElement("div")` permet de créer une balise `div`. elle est créée mais pas encore ajouter à l'html. donc on utilise `body.appendChild(div)` ou `body.append(div)``
https://dev.to/ibn_abubakre/append-vs-appendchild-a4m

### événements
on peut créer des événements via des écouteurs `addEventListener(event, callback, objet);`
```js
button.addEventListener("click", (event) => {
	alert("je suis un event");
});
```
event indique tous les informations de l'évenement!
objet est un objet avec des attributs qui permet par exemple d'exécuter une seule fois la fonction callback avec l'objet `{once: true}`


#### preventdefault
permet d'annuler le comportement par défaut d'un événement comme les bouton de formulaire que rafraichissait la page (ce n'est plus le cas par défaut aujourd'hui).


### currentTarget vs target


### getComputedStyle
cette fonction permet d'obtenir le style final attribuer par défaut + bootstrap + css
```
window.getComputedStyle(div).display // "block"
div.style.display // ""!
```
comme la div a par défaut ``display: none`` elle est pas afficher dans la seconde instruction mais dans la première si.

> Written with [StackEdit](https://stackedit.io/).
