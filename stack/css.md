# Css

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

les ``inline``n'ont pas de propriété de taille en hauteur (padding-top, margin-top, height, ...)

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

## Pseudo class
``h1:hoover`` est une pseudo classe.

### ::after ::before
``:after`` et ``:before`` sont dépréciés. il vaut mieux utilisés ``::after`` et ``::before``. on peut injecter du texte dans le html avec le css avec l'attribut ``content``. ce ne sont pas des pseudo classes mais un pseudo-élément!

les éléments natives dépendent du système d'exploitation comme pour la balise ``select``, ``input``, les ``textarea``, ...

## Formats d'images
### webp
le nouveau format d'image pour le web.

## flex
on peut tous faire avec! j'aime les containers!
https://css-tricks.com/snippets/css/a-guide-to-flexbox/


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



> Written with [StackEdit](https://stackedit.io/).
