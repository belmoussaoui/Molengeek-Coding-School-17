
# SASS
https://sass-lang.com/guide
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

## braces ou non?
https://stackoverflow.com/a/5654471
l'ancienne syntaxe (`SASS` tout court) n'utilise pas de braces (*{...}*). la nouvelle syntaxe utilise les braces est appelé `SCSS (Sassy CSS)`. Le `SCSS` reste du `SASS` mais permet que tout `CSS` soit compatible avec `SASS`.

`SCSS`
```
 a {
    display: block;
    padding: 6px 12px;
    text-decoration: none;
  }
```
`SASS`

```
a
    display: block
    padding: 6px 12px
    text-decoration: none
```

## Emboitement
`SCSS`
```
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
```
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
```sass
$font-stack: Helvetica, sans-serif;
$primary-color: #333;

body {
  font: 100% $font-stack;
  color: $primary-color;
}
```


> Written with [StackEdit](https://stackedit.io/).
