# JS
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

## les objets natifs vs types
`console` est un objet natif? non je ne pense pas, c'est plutôt un élément du dom. `Date` est un objet natif et on a besoin de l'instancier.

### types primitif
les types primitifs en js sont immuable, c'est-à-dire que les méthodes ne modifient pas la valeur de la primitif. nous avons besoin de réaffecter à chaque fois la variable.

pour avoir accès à la valeur primitif d'un type primitif, on interroge directement la variable qui fait appel à la méthode `valueOf`!

### Math
l'objet natif **Math** est statique, donc pas besoin d'instancier l'objet.

#### NaN ≠ NaN
`NaN` n'est pas égal à un `NaN`.

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
#### décomposition
```js
function f(...[a, b, c]) {
  return a + b + c;
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

### string vs String
toujours utilisé les types primitifs en minuscules (valeurs primitifs) https://stackoverflow.com/a/14727461

### annotation de type
```typescript
let mustBeAString : string;
```
l'exemple suivante retourne une erreur dans 100% des cas:
```typescript
let phoneNumber : string;
if  (Math.random()  >  0.5)  {
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

## les commentaires
le typescript ajoute un nouveau type de commenataire en plus de `// ...` et 
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


> Written with [StackEdit](https://stackedit.io/).
