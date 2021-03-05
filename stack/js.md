# JS
q/r avancées sur js
https://github.com/carpacciao/javascript-questions/blob/master/fr-FR/README_fr-FR.md

http://pythontutor.com/visualize.html#mode=edit

https://www.javascripttutorial.net/es6/when-you-should-not-use-arrow-functions/
https://dev.to/kayut/using-arrow-function-to-define-a-method-2em3
## NPM
**npm** (node packages manager) est un gestionnaire de packets pour javascript comme **pip** (pip installs packages) pour python par exemple. **npm** installe automatiquement **node js** (serveur pour js).

sur ubuntu
```
sudo apt-get install npm
```

sur mac os
```
brew install npm
```

sur windows (installation manuelle)
https://nodejs.org/en/#home-downloadhead


on peut check l'installation de npm
```
npm -v # 6.14.9
node -v # v14.15.3
```
### installation
```
nmp i
npm install
```
### cdn vs npm
on préférera toujours installer les packages npm que d'utiliser un cdn car si le site qui contient le cdn ne fonctionne plus, alors le site qu'on développe ne fonctionnera plus également!

### Node js
Node.js est une plateforme logicielle libre en JavaScript orientée vers les applications réseau événementielles hautement concurrentes qui doivent pouvoir monter en charge. Elle utilise la machine virtuelle V8, la librairie libuv pour sa boucle d'évènements, et implémente sous licence MIT les spécifications CommonJS. Parmi les modules natifs de Node.js, on retrouve http qui permet le développement de serveur HTTP. Il est donc possible de se passer de serveurs web tels que Nginx ou Apache lors du déploiement de sites et d'applications web développés avec Node.js. Concrètement, Node.js est un environnement bas niveau permettant l’exécution de JavaScript côté serveur.

Normalement le javascript s'exécute côté client!

## les objets natifs vs types
`console` est un objet natif? non je ne pense pas, c'est plutôt un élément du dom. `Date` est un objet natif et on a besoin de l'instancier.

### types primitif
les types primitifs en js sont immuable, c'est-à-dire que les méthodes ne modifient pas la valeur de la primitif. nous avons besoin de réaffecter à chaque fois la variable.

pour avoir accès à la valeur primitif d'un type primitif, on interroge directement la variable qui fait appel à la méthode `valueOf`!

### Math
l'objet natif **Math** est statique (faux surement un singleton), donc pas besoin d'instancier l'objet.

### Eval
https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/eval
**Avertissement :** L'exécution de JavaScript à partir d'une chaîne de caractères constitue un risque de sécurité énorme. Il est beaucoup trop facile pour un mauvais acteur d'exécuter du code arbitraire lorsque vous utilisez `eval()`. Voir la section [N'utilisez eval() qu'en dernier recours !](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/eval#Nutiliser_eval_quen_dernier_recours_!) ci-dessous.

### Console.table
```console.table(elem)``` affiche les éléments dans un tableau!

#### NaN ≠ NaN
`NaN` n'est pas égal à un `NaN`.

### fonction
une fonction fructueuse est une retourne une valeur sinon la fonction n'est pas fructueuse.

#### unary operator
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Unary_plus

```js
var a = +prompt("Please enter a number");
console.log(a);
typeof(a);  // number
```
https://stackoverflow.com/questions/38011247/prompt-vs-prompt-in-javascript

## Les fonctions variadiques
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/rest_parameters
https://en.wikipedia.org/wiki/Variadic_function

### Spread syntax (...)
https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax
```js
function sum(x, y, z) {
  return x + y + z;
}
const numbers = [1, 2, 3];
console.log(sum(...numbers));
```

### les paramètres du reste
Cette syntaxe permet de représenter un nombre indéfini d'arguments sous forme d'un tableau.
```js
function sum(...theArgs) {
  return theArgs.reduce((previous, current) => {
    return previous + current;
  });
}
console.log(sum(1, 2, 3));
console.log(sum(1, 2, 3, 4));
```

le paramètre arguments disparaît avec les fonctions fléchés!

#### décomposition
```js
function f(...[a, b, c]) {
  return a + b + c;
}
```

## littéraux de gabarits avec étiquettes
https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Litt%C3%A9raux_gabarits#gabarits_%C3%A9tiquet%C3%A9s_2
Les _gabarits étiquetés_ (_tagged templates_) sont une forme plus avancée de gabarits. On peut ici utiliser une fonction pour analyser les différents fragments du gabarit. Le premier argument passé à la fonction est l'ensemble de valeurs issues de chaînes de caractères sous la forme d'un tableau. Les arguments ensuite passés à la fonction seront les expressions contenues dans le gabarit.

## Type guard
Un type de garde est un conditionnel qui vérifie si une variable est d'un certain type, comme ceci :
```
if (typeof margin === 'string')  {  
	// margin must be a string here  
}
```
Ce concept s'appelle le rétrécissement des types. Le rétrécissement des types est lorsque TypeScript peut déterminer le type d'une variable à un moment donné dans notre code.

## fonctions fléchés dans objet
il vaut mieux éviter d'utiliser les fonctions fléchés dans un objet littéral car le `this`ne fait référence à l'objet courent!
Une **expression de fonction fléchée** (_arrow function_ en anglais) permet d’avoir une syntaxe plus courte que [les expressions de fonction](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Op%C3%A9rateurs/L_op%C3%A9rateur_function) et ne possède pas ses propres valeurs pour `this`, `arguments`, `super`, ou `new.target`. Les fonctions fléchées sont souvent [anonymes](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Function/name) et ne sont pas destinées à être utilisées pour déclarer des méthodes.
https://stackoverflow.com/a/31095976
https://stackoverflow.com/questions/22939130/when-should-i-use-arrow-functions-in-ecmascript-6

## import export
les importations et exportations
dans `fichier2.js`
```js
export default class Personne {
	constructor() {
		console.log('ok');
	}
}
let elias = new Personne();
export {elias}
```
dans `fichier1.js`
```js
import Personne from "fichier.js"
let bilal = new Personne();
```

## for in
le `for in` permet de parcourir des objets mais l'ordre n'a pas d'importance! le `1`va être afficher en premier!
```javascript
let scores = {
	HTML: 100,
	CSS: 80,
	JS: 95,
	React: 50,
	Laravel: 5,
	1: "hello world"
};
for (let att in scores) {
	console.log(att);
}
```

# TS
https://www.typescriptlang.org/
https://www.typescriptlang.org/docs/handbook/intro.html

## installation
```bash
npm i -g typescript
```
## tsconfig.json
le `tsconfig.json` est placé à la racine du projet et permet de définir les règles de transpilation vers le js. voici un `tsconfig.json` par défaut:
```typescript
{  
	"compilerOptions": {  
		"target": "es2017",  
		"module": "commonjs",  
		"strictNullChecks": true  
	},  
	"include": ["**/*.ts"]  
}
```
le système d'import/export est celui définit par **commonjs** et ``strictNullChecks``  oblige une valeur déclaré uniquement comme `null` ou `undefined` de le rester pendant tous le processus de vie.

### transpiler
on transpile le code via la **cli** `tsc` si on a configuré un `tsconfig.json`. sinon on peut utiliser `tsc filename.ts` pour transpiler un fichier en particulier.

pour continuer à compilé à chaque modification, on utilise la commande:
```
tsc -w --pretty filename.ts
```
on utilise l'argument `--help` pour obtenir tous les options possibles. 

### detection des erreurs
le typescript permet de détecter l'erreur suivante:
```typescript
list.lenght
>> index.ts:5:23 - error TS2551: Property 'lenght' does not exist on type 'string'. Did you mean 'length'?
```
là ou javascript retourne la valeur `undefined`!



## les types
les types primitives en javascript
-   boolean
-   number
-   null
-   string
-   undefined

par défaut, le typage de typescript est stricte. c'est-à-dire que si on déclare une variable en `string` même sans le spécifier comme
```typescript
let variable = "hello";
```
cette variable ne peut pas être attribué par un autre type!

on peut spécifier plusieurs types pour une même variable
```ts
let  ID: string | number;
```

### string vs String
toujours utilisé les types primitifs en minuscules (valeurs primitifs) https://stackoverflow.com/a/14727461

### annotation de type
```typescript
let mustBeAString : string;
```
l'exemple suivante retourne une erreur dans 100% des cas:
```typescript
let phoneNumber : string;
if  (Math.random()  >  0.5) {
	phoneNumber =  '+61770102062';
}  else  {
	phoneNumber =  7167762323;
}
```

### any
une variable déclaré `let onOrOff;` à le type `any`. c'est à dire qu'il peut être de n'importe quel type à n'importe quel moment.

### callback type
`arg2` dans la fonction suivante est une fonction callback qui prends en argument un nombre et qui retourne rien:
```ts
function isPair(arg1: number, arg2: (number) => {void}): void {
}
```

## les fonctions
### arguments
pour écrire les types d'arguments d'une fonction
```typescript
function greet(name:  string)  {  
	console.log(`Hello, ${name}!`);  
}
```
équivalent en js à 
```javascript
function greet(name) {  
	if (typeof  text !== 'string') {  
		throw  new  Error('Argument is not a string!');  
	}  
	console.log(`Hello, ${name}!`);  
}
```

on utilise `?` pour un argument optionnel
```typescript
function greet(name?: string)  {  
	console.log(`Hello, ${name || 'Anonymous'}!`);  
}
```
ou on peut spécifier une valeur par défaut
```typescript
function greet(name =  'Anonymous')  {  
	console.log(`Hello, ${name}!`);  
}
```

### déduction (inferring) de types de retour
un exemple concret ou la déduction de types de retour peut être vraiment pratique
```typescript
function returnFruit(): string {
	let num = getUserChoice();
	switch(num) {
		case  1: return f1();
		case  2: return f2();
		case  3: return f3();
		case  4: return f4();
		case  5: return f5();
		case  6: return f6();
		case  7: return f7();
		case  8: return f8();
		case  9: return f9();
		case 10: return f10();
		case 11: return f11();
		case 12: return f12();
	}
	return  'durian.jpg'
}
```
on peut facilement savoir si l'une des fonction `fn` ne retourne pas un string parce que indiqué par le transcompiler (https://www.codecademy.com/courses/learn-typescript/lessons/typescript-functions/exercises/explicit-return-types)

une fonction que ne retourne rien est indiqué `void`
```typescript
function logGreeting(name: string): void {  
	console.log(`Hello, ${name}!`); 
}
```

### les types
on peut créer un type spécial de function via les alias (voir la section correspondante). Remarquons que les noms des paramètres n'ont pas d'incidence sur la création de la fonction.
```ts
type  StringsToNumberFunction  =  (arg0:  string, arg1:  string)  =>  number;
```
et toujours mettre les parenthèses pour les arguments même s'il y en a qu'un seul!

## les commentaires
le typescript ajoute un nouveau type de commentaire en plus de `// ...` et 
```javascript
/*
	message
*/
```
c'est les commentaires de documentation:
```typescript
/**  
* This is a documentation comment  
*/
```

c'est pour documenter une fonction, on peut utiliser @param pour décrire chacun des paramètres de la fonction, et utiliser @return pour décrire ce que la fonction renvoie :
```typescript
/**  
* Returns the sum of two numbers.  
*  
* @param x - The first input number  
* @param y - The second input number  
* @returns The sum of `x` and `y`  
*  
*/  
function getSum(x:  number, y:  number):  number  {  
	return x + y;  
}  
```

## les arrays
le typescript est super pratique pour le contrôle des arrays.

### annotation
les arrays basiques
```ts
let names: string[] = ['Danny',  'Samantha'];
let names: Array<string> = ['Danny',  'Samantha'];
names.push(666)  // Type Error!
```

les arrays à n dimensions:
```ts
let arr: string[][] = [['str1', 'str2'], ['more', 'strings']];
let numbersMulti: number[][][] = [[[1], [2, 3]];
```

### tuples
```ts
let ourTuple:  [string,  number,  string,  boolean] = ['Is', 7, 'our favorite number?', false];
```
un array est différent d'un tuple:
```ts
let tup: [string, string] = ['hi', 'bye'];  
let arr: string[] = ['there', 'there'];  
tup = ['there', 'there'];  // No Errors.  
tup = arr;  // Type Error! An array cannot be assigned to a tuple.
```

### déduction de type (Array Type Inference)
la déduction va toujours choisir le moins restrictive des types:
```ts
// est de type boolean[]` et non `[boolean, boolean, boolean]
// car ca permet de push de nouveau boolean et est donc moins restrictive
let examAnswers=  [true,  false,  false];

let tup: [number, number, number] = [1,2,3];  
let concatResult = tup.concat([4,5,6]);
// ts infers the variable `concatResult` as an array of numbers, not a tuple.
```

## Enums
### notation
on peut utiliser les enums pour spécifier le type d'une variable
```ts
enum  Pet  {
	Hamster,
	Rat,
	Chinchilla,
	Tarantula
}
let petOnSaleTS:  Pet  =  Pet.Chinchilla;
```
avec les enum, il vaut mieux toujours utiliser des string comme valeur parce que c'est plus restrictive
```ts
let whichWayToAntarctica: DirectionNumber; 
whichWayToAntarctica = DirectionNumber.South; //valid
whichWayToAntarctica = 1; // valid

whichWayToAntarctica = 943205 // valid, will not lead to type errors.
```
## Object
### notation
```ts
let aPerson:  {name:  string, age:  number};
aPerson =  {name:  'User McCodecad', age:  22};
```

## Alias
```ts
type  MyString  =  string;  
let myVar:  MyString  =  'Hi';  // Valid code.
```
ca permet d'éviter les répétitions comme dans l'exemple suivant:
```ts
// version sans alias
let aCompany:  {companyName:  string, boss:  {name:  string, age:  number}, employees:{name:  string, age:  number}[], employeeOfTheMonth:  {name:  string, age:  number}, moneyEarned:  number};

// version avec alias
type  Person  =  {name:string, age:number};  
let aCompany:  {companyName:  string, boss:  Person, employees:Person[], employeeOfTheMonth:  Person, moneyEarned:  number};
```
En utilisant des alias de type, nous pouvons rendre notre code beaucoup plus simple à comprendre.

les alias peuvent fonctionner avec des valeurs différentes aux types!
```ts
type Color = 'green'  | 'yellow'  | 'red';
```
https://thisthat.dev/literal-union-type-vs-string-enums/

The biggest difference between `interface` and `type` is that `interface` can only be used to type objects, while `type` can be used to type objects, primitives, and more. As it turns out,  `type`  is more versatile and functional than  `interface`. So why would we use  `interface`?

Sometimes, we don’t want a type that can do everything. We’d like our types to be constrained so we’re more likely to write consistent code. Since  `interface`  may only type objects, it’s a perfect match for writing object-oriented programs because these programs need many typed objects. So, let’s get started writing types with  `interface`. https://www.codecademy.com/courses/learn-typescript/lessons/typescript-advanced-object-types/exercises/interfaces-and-types

## les types génériques (template)
### variables
comme en c++, peut être pratique pour un objet d'héritage
```ts
type  Family<T>  =  {  
	parents: [T,  T], mate: T, children: T[]  
};
```
et une implémentation du type family
```ts
let aStringFamily:  Family<string>  =  {  
	parents:  ['stern string',  'nice string'],  
	mate:  'string next door',  
	children:  ['stringy',  'stringo',  'stringina',  'stringolio']  
};
```

### fonctions
le premier `<T>` permet définir le type de la fonction par exemple par `string`.
```ts
function getFilledArray<T>(value:  T, n:  number):  T[]  {  
	return  Array(n).fill(value);  
}
getFilledArray<string>('cheese', 3)
```
## narrowing (rétrécissement)
### check si une méthode existe
on utilise `in` pour savoir si une méthode/propriété existe.
```ts
type  Soccer  =  {  
	kick:  ()  =>  void;  
} 
function play(sport:  Tennis  |  Soccer)  {  
	if  ('serve'  in sport)  {  
		return sport.serve();  
	}  
	if  ('kick'  in sport)  {  
		return sport.kick();  
	}  
}
```

## classe
### interface
on peut utiliser les interfaces comme des interfaces de java. c'est à dire qu'on implémente une interface dans une classe.
```ts
interface  Robot  {  
identify:  (id:  number)  =>  void;  
}  
class  OneSeries  implements  Robot  {  
	identify(id:  number)  {  
		console.log(`beep! I'm ${id.toFixed(2)}.`);  
	}  
	answerQuestion()  {  
		console.log('42!');  
	}  
}
```

#### types composés
on peut utilisé des types d'interfaces dans des interface pour rendre le code plus lisible
```ts
interface  About  {  
	general:  {  
		id:  number;  
		name:  string;  
		version:  {  
			versionNumber:  number;  
		}  
	}
}
// équivalent à 
interface  About  {  
	general:  General;  
}  
  
interface  General  {  
	id:  number;  
	name:  string;  
	version:  Version;  
}  
  
interface  Version  {  
	versionNumber:  number;  
}
```

#### Extending Interfaces
on peut étendre une interface par une autre interface:
```ts
interface  Shape  {  
	color:  string;  
}  
interface  Square  extends  Shape  {  
	sideLength:  number;  
}
const mySquare: Square = { sideLength: 10, color: 'blue' };
```

#### Index Signatures
on peut définir un type pour les attributs comme dans l'exemple suivant:
```ts
interface  SolarEclipse  {
	[latitude:  string]:  boolean;  
}

let signature: SolarEclipse : { 
	'40.712776':  true;  
	'41.203323':  true;  
	'40.417286':  false;  
}
```






> Written with [StackEdit](https://stackedit.io/).
