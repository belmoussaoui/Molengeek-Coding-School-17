# Css
https://graphiste.com/blog/animations-css-dynamiser-boutons

## Priorités
L'**identifiant** a priorité sur la **classe**.
```css
#title-id {
	color:blue;
}

.title-classe {
	color:  red;
}
```
Le titre est bleu si la balise est ``id=title-id`` et ``class=title-classe`` même si elle se trouve au-dessus dans le fichier.

un lien pour les formules de priorités:
https://specificity.keegan.st/
## Classe
Une balise peut avoir plusieurs classes, ca permet de combiner plusieurs éléments a appliqués sur l'élément.

## Les selecteurs
https://flukeout.github.io/

## Les supers propriétés
un attribut qui peut avoir plusieurs valeurs
### border
```css
/* qu'importe l'ordre des attributs */
p {
	border: 10px solid black;
}

p {
	border: solid black 10px;
}

p {
	border-width:  10px;
	border-style:  solid;
	border-color:  black;
}
```

### margin
certain super priorité ont un ordre de valeurs comme les margins 
```css
/* l'ordre des attributs est important! */
/* up right down left */
p {
	margin: 50px, 40px, 30px, 20px;
}

/* y-axis x-axis
p {
	margin: 50px, 40px;
}

/* up x-axis down
p {
	margin: 50px, 40px 100px;
}

/* y-axis x-axis
p {
	margin: 50px, auto;
}
```
**auto** permet de centrer l'élément mais pas pour l'axe des y car il ne connait pas la hauteur de la fenêtre!

## Les propriétés
how to center in css : https://blog.logrocket.com/13-ways-to-vertical-center/
### display
le **display:none** est surtout utilisé avec le **js** pour faire apparaître un élément ou le supprimé. il disparait complètement de la page html! c'est aussi un moyen de lutter contre les bots, via une checkbox en ``display:none`` le bot va le sélectionner alors qu'un humain non car invisible

### inline vs block
le block prends toutes la page en x et donc la prochaine balise est à la ligne contrairement au inline qui prends que la place qu'il a besoin

les ``inline`` n'ont pas de propriété de taille en hauteur (width, height, ...)

on utilise ``inline-block`` si on a besoin d'une ``inline`` qui a besoin d'une propriété de hauteur.

les ``inline`` et les ``inline-block`` considère l'indentation dans le code html! https://youtu.be/k1ID41O4FNM?t=1775

### flex
est utilisé par bootsrap  pour créer les row, col.
est énormément utilisé...

### position
par défaut l'attribut **position** d'un élément est ``static``

``position: absolute`` donne accès à plusieurs nouveaux attributs. en plus, elle retire l'élément de **flux normal**! il est devant tous les autres éléments.

le parent est **relative** et le fils est **absolute**
utilisé **relative** sans le **absolute** pour les fils est fonctionnels => les fils ne sortiront pas du parent!

**les enfants d'une ``div`` se trouve encapsuler en position dans la div parent même avec la position par défaut!**

### z-index
il faut définir ``position≠static`` pour pouvoir utiliser le z-index!
4 raisons pourquoi le z-index ne fonctionne pas:
https://www.freecodecamp.org/news/4-reasons-your-z-index-isnt-working-and-how-to-fix-it-coder-coder-6bc05f103e6c/

### transform
``
position:absolute;
width: 50%;
translate:transform(-50%);
``

### float
les éléments avec l'attribut float sont retiré du flux normal sauf pour les éléments inline! plus très utilisé car remplacé par les flexbox! ou utilisé pour les divs côte à côte ``inline-block``

### a
pour les liens il vaut mieux toujours ajouter un `#` pour le href au minimum même si c'est pas le top
```css
<a href="#">mon message</a>
```

## Pseudo class
``h1:hoover`` est une pseudo classe.

### ::after ::before
``:after`` et ``:before`` sont dépréciés. il vaut mieux utilisés ``::after`` et ``::before``. on peut injecter du texte dans le html avec le css avec l'attribut ``content``. ce ne sont pas des pseudo classes mais un pseudo-élément!

les éléments natives dépendent du système d'exploitation comme pour la balise ``select``, ``input``, les ``textarea``, ...

### counter
on peut créer des compteurs pour les li par exemple via la commande 
```css
ol {
	counter-reset: nom_du_compteur;
}

li::before {
	conter-increment: nom_du_compteur;
	content: counter(nom_du_compteur) "- ";
}
```

### attribut
les éléments html peuvent avoir un attribut ``data-{name}`` qui permet de stocker des données utilisables dans le css. c'est plus propre que d'utiliser un span pour certains cas.

on utilise dans le css la fonction ``attr(data-{name})`` pour récupérer une variable.
permet d'éviter de polluer l'html.

### flex
on peut tous faire avec! j'aime les containers!
https://css-tricks.com/snippets/css/a-guide-to-flexbox/

### box-sizing
mettre le ``box-sizing`` à ``border-box`` permet de prendre en compte les bordures et les paddings dans le calcul de width! 

le container magique:
```css
*, *::before, *::after {
	box-sizing: border-box;
}

/* c'est une classe générique */
.container {
	padding: 0 15px;
	max-width: 1080px;
	margin: 0: auto;
}
```

## Transition et animation
il faut deux états pour un élément pour appliquer une transformation. On met l'état `transition` dans l'état 1 pour indiquer de quel manière il transite à une état 2 indiqué par une pseudo-classe comme ``:hover``.

les animations ``-webkit`` sont pour les navigateurs firefox / edge car les animations ne fonctionnent pas par défaut.
https://stackoverflow.com/a/18083113

## media queries
le css s'applique suivant s'applique lorsque l'écran à une taille minimum de 100px et une taille maximum de 300px.

faire attention au zoom qui fausse les valeurs de taille! 
```css
@media screen and (min-width: 100px) and (max-width:300px) {
	/* du css! */
}
```

media query est dans une intervalle et mets par défaut `min-width: 0px`
```sass
@media screen and  (min-width: 0px)  and  (  max-width: 576px)
	body
		background-color: yellow
```

## Questions et réponses
### pourquoi le background-color ne s'applique pas à body mais à toute la page html?
https://stackoverflow.com/a/11721746

### une petite espace blanc après une image contenu dans une div
mettre l'image en ``display:block`` résout le problème

### créer un triangle avec le css à partir de bordures
https://css-tricks.com/snippets/css/css-triangle/

### cropping une image tout simplement
https://elad.medium.com/how-to-crop-images-with-css-b8471d402b16
un image coupé en haut et en bas
```html
<div style="overflow:hidden">
	<img style="margin: -20% 0">
</div>
<!--or -->
<div style="display:flex; align-items:center; height: 300px">
	<img>
</div>
```

### label avec attribut for
https://stackoverflow.com/questions/18432376/what-does-for-attribute-do-in-html-label-tag
l'attribut "for" d'un label permet que lorsqu'on clique sur ce label, le navigateur vers l'input associé. c'est aussi utile pour les lecteurs d'écran.

### definitions
En CSS, un attribut est synonyme d'une propriété et d'une valeur, et désigne donc un  [mot clé](https://fr.wikipedia.org/wiki/Mot_cl%C3%A9 "Mot clé")  avec sa valeur[1](https://fr.wikipedia.org/wiki/Attribut_(informatique)#cite_note-1).

Par exemple, dans l'expression  `p { text-align:center; }`, l'attribut est  `text-align:center`.


> Written with [StackEdit](https://stackedit.io/).
