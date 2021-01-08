
# SASS
https://sass-lang.com/guide
https://thomlom.dev/how-to-get-better-at-writing-css/
https://www.grafikart.fr/formations/sass-preprocesseur

## installation
on utilise la commande suivante pour installer sass via npm
```
sudo npm install -g sass
```
emplacement d'installation
```
/usr/local/bin/sass -> /usr/local/lib/node_modules/sass/sass.js
```

## compilation
on compile un fichier `.sass` en `.css` avec la commande suivante à partir de la racine de notre projet:
```
sass --watch public/sass/style.sass public/css/style.css
```
l'argument ``-watch`` permet de compiler automatiquement à chaque changement du fichier `.sass`.

### map
un fichier .map est généré par sass qui permet dans l'inspecteur de retrouver la source du css directement dans le fichier sass. le css dans l'inspecteur indique la position du sélecteur dans le fichier sass.

## braces ou non?
https://stackoverflow.com/a/5654471
l'ancienne syntaxe (`SASS` tout court) n'utilise pas de braces (*{...}*). la nouvelle syntaxe utilise les braces est appelé `SCSS (Sassy CSS)`. Le `SCSS` reste du `SASS` mais permet que tout `CSS` soit compatible avec `SASS`.

`SCSS`
```scss
 a {
    display: block;
    padding: 6px 12px;
    text-decoration: none;
  }
```
`SASS`

```sass
a
    display: block
    padding: 6px 12px
    text-decoration: none
```

## Emboitement
`SCSS`
```scss
nav {
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  li { display: inline-block; }

  a {
    display: block;
    padding: 6px 12px;
    text-decoration: none;
  }
}
```

`CSS`
```css
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
nav li {
  display: inline-block;
}
nav a {
  display: block;
  padding: 6px 12px;
  text-decoration: none;
}
```

## variables
il était déjà possible d'utiliser des variables en css!
déclaration d'une variable `--main-bg-color`
```css
:root {
  --main-bg-color: brown;
}
```
les variables en `sass` permet d'éviter des problèmes de compatibilités mais on ne peut pas les attribuer une autre valeur après la déclaration!
```sass
$font-stack: Helvetica, sans-serif;
$primary-color: #333;

body {
  font: 100% $font-stack;
  color: $primary-color;
}
```

## héritage
on peut faire de l'héritage en ``sass`` avec l'instruction ``@extend father`` qui indique que le sélecteur courant hérite de ``father``. c'est une des fonctionnalités les plus utiles de sass.

```sass
/* This CSS will print because %message-shared is extended. */
%message-shared {
  border: 1px solid #ccc;
  padding: 10px;
  color: #333;
}

// This CSS won't print because %equal-heights is never extended.
%equal-heights {
  display: flex;
  flex-wrap: wrap;
}

.message {
  @extend %message-shared;
}
```

## mixins
permet de créer un bloc de code réutilisable. permet d'éviter le copier-coller. **attention la syntaxe est différente selon si on utilise `sass` ou `scss`**!

```sass
// en sass
=transform($property)
  -webkit-transform: $property
  -ms-transform: $property
  transform: $property
.box
  +transform(rotate(30deg))
```

```scss
// en scss
@mixin transform($property) {
  -webkit-transform: $property;
  -ms-transform: $property;
  transform: $property;
}
.box { @include transform(rotate(30deg)); }
```

## conditions et boucles
on peut faire des conditions en ``sass```
```scss
.btn {
	text-decoration: none;
	background: $primary;
	@if (lightness($primary) > 50%) {
		color: #000;
	} @else {
		color: #FFF;
	}
}
```

on peut aussif faire des boucles
```scss
// m-1 = 25rem, m-2 = 50rem, ..., m-4 = 100rem
@for  $i from 1 through 4 {
	.m-#{$i} {
		margin:0 ($i * .25rem);
	}
}

$animals: bear, lion, camel;
// attribue le bon background selon la classe .icon-animal
@each  $animal in $animals {
	.icon-#{$animal} {
		background: url(img/#{$animal}.png); 
	}
}

// un dictionnaire key-value
$categories: chien rgb(114, 114, 114), chat rgb(223, 170, 73), poisson rgb(137, 137, 212);

@each  $category in $categories {
	// accès à la clé
	.#{nth($category, 1)} {
		// background = rgb(...)
		background: nth($category, 2);
	}
}
```

## bootstrap
on peut avoir accès au ``sass`` de bootstrap et même le modifié:
https://getbootstrap.com/docs/5.0/getting-started/download/


> Written with [StackEdit](https://stackedit.io/).
