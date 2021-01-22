# Bootstrap
https://getbootstrap.com/docs/5.0/getting-started/introduction/
## installation dans un projet
après un `npm init -y` on peut installer localement bootstrap dans le projet
```bash
npm install @popperjs/core@^2.5.4
npm install bootstrap@next
```

## version 5.0
la version change beaucoup de choses par rapport à la version 4.0!
voici la liste des changements:


## package vs package.json
déjà package.json est présent sans le `npm init` lorsqu'on installe un module

## utilitaires
### spacing margin
les noms des espaces gauches et droites ont changés dans bootstrap! c'est plus `l` (left) `r` (right)! on doit utiliser `s` (start) et `e` (end). on utilise `p` ou `m` pour padding et margin respectivement. enfin, il y a entre 0 et 5 taille différentes et `auto`.

```
pe-5 // un padding à droite de 5
ms-auto // un margin à droite en auto
my-3 // un margin en haut et en bas de 3
```

### translate v5.0
`translate-middle-x` et `translate-middle-y` pour centré verticalement et horizontalement pour un élément en position absolue/fixe.

### text
#### font-size
```
fs-*  // * = 1-6 comme les headings (<h1>, ...) html par défaut
```
#### font-weight
```
fw-*
```

#### font-style
```
fst-*
```

## Layout
### containers
crée des margin à droite et à gauche afin de centrer l'élément

### grid
une grille peut avoir jusqu'a 12 colonnes. cette élément utilise le **display flex**. pour centrer la grille on la met dans un container.

les espaces entre les colonnes sont appelé des **gutter**

plusieurs `<div class="col">` vont se partager l'espace disponible à part égales. la colonne `<div class="col-auto">` va prendre seulement l'espace qu'il a besoin pour son contenue.

notons que nous avons besoin d'une seul row et bootstrap va automatiquement revenir à la ligne si la col dépasse la taille 12 courante.

#### row-columns
permet d'avoir un meilleur rendu des colonnes! c'est fort pratique:
```html
<div class="container">
  <div class="row row-cols-3">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
```
créer une première rangée à 3 colonne de taille 4 et la suivante 1 colonne de taille 4 en première positon.

#### column break
on peut demander à une grille de sauter à la ligne
```html
<div class="container">
  <div class="row">
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

    <!-- Force next columns to break to new line -->
    <div class="w-100"></div>

    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
  </div>
</div>
```

#### offset
au lieu de faire des éléments de tableau vide pour créer un espace, on peut utiliser des offsets. par exemple la classe ``offset-4 `` va créer un offset à gauche pour l'élément courant d'une taille de taille 4.

#### col-*
on peut utiliser les cols pour toutes les div pour donner width!!! par exemple la classe ```col-3``` donne une taille de 25% à la div!

#### gutters
il vaut mieux utiliser **gutters** pour une row que des margins pour chaque col. en plus en a 

```html
g-3 <!-- un margin x et y de 3 -->
gy-1 <!-- un margin y de 1 -->
```

par contre nécessite de créer une div supplémentaire!

### media queries
on peut utilises des media queries entre l'attribut et la valeur de la classe.
par exemple
```html
<div class="row justify-content-md-center">
```
la valeur `md` dans `justify-content-md-center` indique que l'attribut s'applique si la fenêtre est en **médium** (≥768px). la classe `row`est importante car elle indique que l'élément html est en `display: flex`! on peut utiliser `d-flex` pour indiquer que ``display: flex``. donc cette élément est au centre de l'écran si plus grand que 768px

```html
<div  class="container-md-fluid py-md-5 container bg-primary text-center">
	message
</div>
```
l'élément div est une container fluid (prends tout l'écran) avec un grand padding en y lorsque l'écran est plus grand que **médium** sinon c'est un container avec le padding par défaut et le text et toujours centré quoi qu'il arrive. ce comportement est possible grâce à **!important**.

## Composants
### Carousel

### Card

### Collapse

### List Group

### Navbar

## Extension
### variables
on peut changer les variables de bootstrap. il se trouve dans le fichier `_variables.sass`. on fait un `@import` de bootstrap directement dans le sass! donc plus dans le header de html via la balise `link`. et on redéfinit les variables avant l'importation car les variables sont définis en `!default`.

donc on peut facilement changer la couleur `primary` par la notre.

### margin et padding
https://stackoverflow.com/a/59743693


> Written with [StackEdit](https://stackedit.io/).
