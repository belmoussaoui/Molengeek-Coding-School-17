# React
jsonplaceholder

architecture de 
https://www.wanadev.fr/203-react-js-1-comment-architecturer-son-projet-react-js/
react fonctionne par composition plutôt que par héritage. donc il vaut mieux éviter l'héritage pour créer nos composants.

functional component vs class component
https://www.twilio.com/blog/react-choose-functional-components

## architecture
react fonctionné seulement avec les classes dans les premières versions.
récemment, react est passer qu'avec des fonctions pour simplifier le plus possible.
c'est ce qu'on appelle les hooks.

react fonctionne avec un serveur interne (port:3000).

## installation
installation globale
``npm install create-react-app -g``
et ensuite
``create-react-app mon-app``

https://www.geeksforgeeks.org/what-are-the-differences-between-npm-and-npx/
sinon pour éviter l'installation globale
``npm init react-app mon-app``
``npx create-react-app mon-app``

### créer sa boite à outil react à partir de zéro
c'est super long et technique mais peut être instructif
https://blog.usejournal.com/creating-a-react-app-from-scratch-f3c693b84658

### monopage
react permet seulement de créer des site qui se tienne sur une seule page... sinon il faut utiliser la dépendance `react-router`.

### lien script
dans les anciennes version de html on mettait les scripts en bas du body. on peut maintenant utiliser l'attribut `defer` dans le script pour indiquer au navigateur de charger le script après l'analyse du html
```html
<script src="./public/js/main.js" defer></script>
```
il y a pas de lien script dans le index.html? comment ca fonctionne?

### babel
en babel on peut écrire un attribut d'une classe directement sans passer le constructeur
```js
class Point {
  // Declare class property
  a = 22
  // Declare class static property
  static b = 33
}
```
qui est traduit par
```js
class Point {
  // ...
}
// Declare class property
Point.prototype.a = 22;
// Declare class static property
Point.b = 33;
```
## css
on peut importer du css dans le js. on peut faire ca pour chaque composant de manière indépendants.
```js
import "./navigation.css";
```
### librairies
#### bootstrap
https://react-bootstrap.github.io/getting-started/introduction
```shell
npm install react-bootstrap bootstrap@next
```
la version 4 est meilleure avec react car on peut copier-coller les composants avec ce site
https://react-bootstrap.github.io/components/navbar/#home
```js
import '../bootstrap/dist/css/bootstrap.min.css';
//import  '../bootstrap/dist/js/bootstrap.bundle.min.js';
import Button from 'react-bootstrap/Button';
```
on peut aussi juste installer bootstrap de manière traditionnelle mais nécessite de faire un import de bootstrap.js (ce qui est en commentaire).

react-bootstrap is a complete re-implementation of the bootstrap components using React. it has **no dependency on either `bootstrap.js` or jquery.**  (jquery n'est plus une dépendance dans la version 5.0...)

methods and events using jQuery is done imperatively by directly manipulating the DOM. in contrast, react uses updates to the state to update the virtual DOM. In this way, React-Bootstrap provides a more reliable solution by incorporating Bootstrap functionality into React's virtual DOM.

#### font awesome
##### comme composants
https://www.digitalocean.com/community/tutorials/how-to-use-font-awesome-5-with-react-fr
##### comme html
installer via npm font awesome
```
npm install --save font-awesome
```
importer dans index.js utilisable partout ensuite
```import  "../node_modules/font-awesome/css/font-awesome.min.css";```

## à quoi ca sert?
un système de composants réutilisables pour éviter de faire du copier/coller.

les composants permettent
1.  à factoriser votre code
2.  à séparer votre code en plusieurs fonction
3.  à séparer votre code en plusieurs fichiers
4.  à limiter la portée des variables

### dom virtual
react sépare l'état et la vue. c'est-à-dire qu'on peut modifier l'état sans se préoccupé de devoir faire du dom pour mettre à jour la vue. c'est super pratique. du plus react utilise un dom virtuel, c'est-à-dire que lorsqu'on modifie un élément d'un composant, react est assez intelligent pour mettre à jour seulement l'élément qui a été modifier.

## Configurations
### performances
https://create-react-app.dev/docs/measuring-performance/
react inclus une librairie pour mesurer les performances 
pour l'utiliser:
```jsx
import reportWebVitals from  './reportWebVitals';
reportWebVitals(console.log);
```

## jsx
### importation
apparement nous avons juste besoin de react et react-dom dans le fichier qui import tous les composants (c'est-à-dire dans index.js) sauf si utilisation de `React.Component` ou `useState`...

### elements
les éléments React sont les blocs élémentaires de construction d’applications React. un élément décrit ce que vous voulez voir à l’écran. **les éléments react sont immuables**.

#### create element
le troisième paramètre est une liste d'enfant avec un nombre illimité grâce au spread operator (c'est une méthode variadique)
``React.createElement(
  element,
  [props],
  [...children]
)
``
```js
const title = React.createElement("h1", {}, "hello world");
React.render(title, document.getElementById("app");
```
similaire à:
```js
const title = "<h1>hello world</h1>";
document.getElementById("app").innerHtml = title;
```

### les classes
le mot clef `class` est réservé en js depuis es6. il faut donc utiliser `className` pour attribuer des classes en jsx.
```jsx
<div className="my-class">
</div>
```

### variables expressions
pour évaluer une expression en jsx on utilise les accolades `{Math.min(100, 3)}`.

### timestamp
le temps écoulés en millisecondes depuis le 1er janvier 1970. (en php c'est en secondes)

### fragment
un fragment est une balise vide qui permet d'englober d'autres balises enfants. elle s'écrit ``<></>`` ou ``<React.createFragment()></>`` (si babel -v === 6) qui est traduit par ``React.createElement(React.createFragment(), null, children)``

## les composant
###  fonction vs classe es6
les composants react sont de petits morceaux de code réutilisables qui renvoient un élément react à afficher dans la page.
```js
function Welcome(props) {
  return <h1>Bonjour, {props.name}</h1>;
}

class Welcome extends React.Component {
  render() {
    return <h1>Bonjour, {this.props.name}</h1>;
  }
}
```
pour décider si une partie de l’UI ferait un bon candidat pour un composant réutilisable, il suffit de se demander si elle apparaît plusieurs fois (`Button`, `Panel`, `Avatar`), ou si elle est suffisamment complexe en elle-même (`App`, `FeedStory`, `Comment`). les noms de composants devraient toujours démarrer par une majuscule (`<Wrapper/>`  **pas**  `<wrapper/>`).


### les props
on peut faire passer des paramètres à des composants.
```jsx
function Welcome(props) {
  return <h1>Bonjour, {props.name}</h1>;
}

// par destructuration
function Welcome({name}) {
  return <h1>Bonjour, {name}</h1>;
}

ReactDom.render(<Welcome name="Bob"/>, document.querySelector("#root");
```
on peut récupérer le contenue d'une balise react avec
```jsx
function Welcome({name, children}) {
  return
	  <div>
		  <h1>Bonjour, {name}</h1> // Bonjour, Bob
		  <p>{children}</p> // hello world
	  </div>;
}

ReactDom.render(<Welcome name="Bob"/>hello world</Welcome>, document.querySelector("#root");
```

en es6
```jsx
class Welcome extends React.Component {
	constructor(props) {
		super(props);
	}
	render() {
		return
			<div>
			    <h1>Bonjour, {this.props.name}</h1> // Bonjour, Bob
			    <p>{this.props.children}</p> // hello world
		    </div>;
	}
}
```

#### default props
on peut définir des composant par défaut avec
```js
ReactComponent.defaultProps = {
	prop1: "test",
	prop2: 1,
}

// par attribut statique
static defaultProps = {
	// ...
}
```

#### fonction pure
une fonction mathématique qui retourne toujours les mêmes sorties pour les mêmes entrés. les composants se comporte des manière pure par rapport aux props.

que vous déclariez un composant [sous forme de fonction ou de classe](https://fr.reactjs.org/docs/components-and-props.html#function-and-class-components), il ne doit jamais modifier ses propres props.

#### faire remonter
pour pouvoir passer l’info, on va devoir utiliser une fonction qui sera passée en tant que props par le composant parent vers le composant enfant.

```jsx
// le parent
increment = (elem) => {
	...
}

render() {
	return (
		<Link  increment={this.increment}  class={"active"}>
			Active
		</Link>
}

// l'enfant
render() {
	<a href="#" onClick={() => this.props.increment("active")} className={`nav-link ${this.props.class}`}>
		{this.props.children}
	</a>
}

```

ni parent ni enfant ne peuvent savoir si un certain composant est à état ou non, et ne devraient pas se soucier de savoir s’il est défini par une fonction ou une classe.

### les états
react utilise la propriété `state` pour mettre à jour le composant. c'est un objet avec plusieurs attributs qu'on peut modifier et qui va automatiquement mettre à jour la vue.

**l’état local est similaire aux props, mais il est privé et complètement contrôlé par le composant!**

pour modifier l'état on doit utiliser la méthode `setState`!
```js
this.state = {date: new Date};
...
// code
...
this.setState({date: new Date}); // mets à jour la date
```

le constructeur est le seul endroit où vous devriez affecter directement une valeur à `this.state`. Dans toutes les autres méthodes, utilisez plutôt `this.setState()`.

Si vous vous demandez pourquoi on utilise la fonction « setState » au lieu de changer directement le State en faisant :
```js
this.state.formatTime = format;
``` 
c’est que le State n’est mis à jour correctement qu’avec l’appel de la fonction « setState ». Si vous ne l’utilisez pas, le composant ne sera pas rafraîchi.

#### mise en garde
le code suivant peut poser des problèmes si plusieurs appels successifs à setState qui se lance en même temps par react car l'attribut dépends de l'état
```js
this.setState({n: this.state.n + 1});
```
donc il vaut mieux faire pour éviter des problèmes
```js
this.setState((props, state)=> {n: state.n + 1});
```
https://fr.reactjs.org/docs/state-and-lifecycle.html#state-updates-may-be-asynchronous


### cycle de vie
surtout utilisé pour le backend
- lecture de base de données
- mise à jour de la base de données
- fin de lecture de la base de données

diagramme de cycle de vie:
https://projects.wojtekmaj.pl/react-lifecycle-methods-diagram/
#### montage
les méthodes suivantes sont appelées dans cet ordre lorsqu’une instance d’un composant est créée puis insérée dans le DOM :
-   [**`constructor()`**](https://fr.reactjs.org/docs/react-component.html#constructor)
-   [`static getDerivedStateFromProps()`](https://fr.reactjs.org/docs/react-component.html#static-getderivedstatefromprops)
-   [**`render()`**](https://fr.reactjs.org/docs/react-component.html#render)
-   [**`componentDidMount()`**](https://fr.reactjs.org/docs/react-component.html#componentdidmount)
elle est appelé juste après qu'un composant a été monté. 

#### update
une mise à jour est déclenchée par des changements dans les props ou l’état local. les méthodes suivantes sont appelées dans cet ordre quand un composant se rafraîchit :

-   [`static getDerivedStateFromProps()`](https://fr.reactjs.org/docs/react-component.html#static-getderivedstatefromprops)
-   [`shouldComponentUpdate()`](https://fr.reactjs.org/docs/react-component.html#shouldcomponentupdate)
-   [**`render()`**](https://fr.reactjs.org/docs/react-component.html#render)
-   [`getSnapshotBeforeUpdate()`](https://fr.reactjs.org/docs/react-component.html#getsnapshotbeforeupdate)
-   [**`componentDidUpdate()`**](https://fr.reactjs.org/docs/react-component.html#componentdidupdate)

#### démontage
-   [**`componentWillUnmount()`**](https://fr.reactjs.org/docs/react-component.html#componentwillunmount)
elle est appelé juste avant qu'un composant va être démonté.

### les événements
on peut utiliser l'attribut `onClick` d'une balise pour gérer les événement de type click
```jsx
render() {
	return <div>{this.state.n}<button onClick={this.increment.bind(this)}>incrémentation</button><div>
}

increment(e) { // e est un synthetic event créer par react pour react natif/desktop ces événement sont les mêmes (générique)
	this.setState({n: n++});
}
```

html vs jsx
```html
<button onclick="activateLasers()">
	Activer les lasers
</button>
```
est légèrement différent avec React:
```jsx
<button onClick={activateLasers}>
	Activer les lasers
</button>
```

**tous les événements existant en JavaScript existent ici aussi (onMouseOver, onChange, onKeyDown …)**

#### optimisation des performances
on préférera toujours définir les événements dans le constructeur par souci de performance. certes ca créera à chaque composant une nouvelle méthodes qui ne prendra pas un seul slot en mémoire mais ca évitera de créer autant de fonction  qu'il y a d'appel à `render`.
```jsx
constructor(props) {
	super(props);
	// événements
	this.increment = this.increment.bind(this);
}

increment() {
	...
}

render() {
	return <button onClick={this.increment}></button>
}
```

la méthode par [syntaxe des champs de classes](https://babeljs.io/docs/plugins/transform-class-properties/)
sinon on peut utiliser cette syntaxe expérimentale qui fonctionne grâce à babel qui permet de ne pas bind avec this.
```jsx
class LoggingButton extends React.Component {
  // Cette syntaxe nous assure que `this` est bien lié dans la méthode handleClick.
  // Attention : cette syntaxe est encore *expérimentale*.
  handleClick = () => {    console.log('this vaut :', this);  }
  render() {
    return (
      <button onClick={this.handleClick}>
        Clique ici
      </button>
    );
  }
}
```

#### passage de paramètres
on doit faire passer les paramètres par une méthode fléchée.


## la programmation
### map
```jsx
render() {
        return (
            <div className="app">
                {this.state.actors.map((value) => {
                    return (
                        <Perso
                            // ne met pas à jour si la clef est la même...
                            // il vaut éviter d'utiliser l'index...
                            key={value.nom}
                            actor={value}
                            onButton={this.change}
                        />
                    );
                })}
            </div>
        );
    }
```

#### choisir la clé
https://fr.reactjs.org/tutorial/tutorial.html#picking-a-key


### conditions
3 manières de faire des conditions en jsx
- faire les if avant le return du render et stocker le résultat dans une variable
- les opérations ternaires
```jsx
render() {
	return (
        <main>
            {this.nombreArticles >= 2 ? (
                <>
                    <Article titre="les tartines"/>
                    <Article titre="coding school"/>
                </>
            ) : (
                <h1>Il n'y a pas d'articles</h1>
            )}
        </main>
    );
}
```
- if et l'opération AND façon bash
```jsx
{this.nombreArticles >= 2 &&
	<div>
		<Article />
		<Article />
	</div>
}{this.nombreArticles < 2 &&
	<h1>Il n'y a pas d'articles </h1>
}
```

dans l’exemple ci-dessous,  `<WarningBanner />`  s’affichera en fonction de la valeur de la prop  `warn`. Si la valeur est  `false`, le composant ne s’affiche pas :
```jsx
function WarningBanner(props) {
  if (!props.warn) {    return null;  }
  return (
    <div className="warning">
      Attention !
    </div>
  );
}
```

### Pourquoi l’immutabilité est importante
https://fr.reactjs.org/tutorial/tutorial.html#why-immutability-is-important
https://medium.com/pro-react/a-brief-talk-about-immutability-and-react-s-helpers-70919ab8ae7c#.xtosqqg8w
on préfère copier des tableau que de réaliser directement des modifications sur celui-ci. on appelle ca une donnée immuable.
voici les bénéfices d'utiliser des données immuables :
- implémentation de voyage dans le temps plus simple (annuler une action de l'utilisateur et revenir en arrière)
- on peut facilement détecter une modification (si la référence de l'objet est différent alors il y a eu une modification)
- react peut savoir quand mettre à jour le rendu

## formulaire
les formulaires sont spéciaux parce que les éléments ont leur propres états avec html. si on définit la valeur (l'état) d'une balise form via une variable "react" alors c'est react qui va s'occuper de mettre à jour l'état. donc on ne peut plus modifier l'input sauf si on définir l'événement avec onChange et en définissant un state.
```jsx
// champ controllé par react
<input type="text" value={maValeur} onChange={maFonction}></input>
```

on peut utiliser `defaultValue` pour déterminer une valeur par défaut et laissé le contrôle du champ à html.

### ref
on peut créer des références pour récupérer des éléments, peut être pratique pour les formulaires.
il y a deux raisons pour utiliser le ref:
-  pour les champs non contrôlés composants controlés par html
-  pour lier une composant via une librairie externe


## les hooks
les hooks permets d'utiliser le state dans les composants fonctionnels.

### hook useState
permet de définir un état pour le composant. cela va créer un état et une fonction pour pour modifier son état.
```jsx
const [state, setState] = useState("valeur par défaut");
```
react créer un état pour le composant qui est en train d'être créer. c'est grâce au contexte qu'on peut créer plusieurs composants à partit de la même et donc à l'ordre des appels.

**donc une useState ne peut pas être dans un if** parce que react ne va pas attribuer les bons états aux composants.

### hook  useEffect
le useEffect exécute une callback une fois au montage du composant. le deuxième paramètres sont les dépendances que est un tableau avec les valeurs à check pour exécuter la callback si les valeurs diffèrent.
```js
useEffect(callback, dépendances);
```

#### componentDidMount
similaire à `componentDidMount`
```jsx
useEffect(callback, []);
```

#### componentWillUnmount
similaire à `componentWillUnmount`
```jsx
useEffect(()=> {
	// ...
	// componentWillUnmount
	return function() {
	    timer.clearInterval();
	}
}, [])
```

#### componentDidUpdate
similaire à `componentDidMount` + `componentDidUpdate`. si seulement `componentDidUpdate` il faut utiliser une ref
https://dev.to/savagepixie/how-to-mimic-componentdidupdate-with-react-hooks-3j8c
```jsx
useEffect(callback);
```

### hook personnalisé
on peut créer des hooks pour pouvoir les utiliser dans plusieurs composants différents. dans les faits les hooks sont des fonctions qui retourne un state et un setter pour pouvoir modifier le state.

chargement à partir d'une base de donnée : https://grafikart.fr/tutoriels/react-hook-personnalise-1329#autoplay

> Written with [StackEdit](https://stackedit.io/).
