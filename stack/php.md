# Php
https://www.php.net/docs.php
## Introduction
-   Despite its age, PHP is still a commonly used technology in web development.
-   PHP is designed to interact with HTML to generate dynamic websites.
-   Embedding PHP in HTML is done by placing PHP code between  `<?php`  and  `?>`  tags.
-   Every statement in PHP must be terminated with a semicolon  `;`.
-   PHP files have a  **.php**  extension and the file always starts with the opening PHP tag  `<?php`. The closing tag is implied and left out by convention.
-   Whitespace is generally ignored when executing PHP code.
-   Keywords are not case sensitive in PHP. As a convention, use the standard casing.
-   Single line comments are made in PHP using  `#`  or  `//`. Multi-line comments are placed between  `/*`  and  `*/`.

1994 -> création de php
![](https://content.codecademy.com/courses/updated_images/PHP_Ecosystem-09-09.svg)
php est utiliser pour créer des pages web dynamique.
![](https://content.codecademy.com/courses/introduction-to-php/php_static_dynamic.svg)
php est très proche du html (dans le sens ou il peut interagir avec). de plus on peut utiliser du php dans l'html en utilisant les balises

```html
<h1>mon titre</h1>
<?php  echo  "<p>But this code is interpreted by PHP and turned into HTML</p>";?>
```

### Fonctionnement
lorsque nous écrivons un fichier script PHP, nous devons toujours indiquer que nous commençons notre code PHP en utilisant `<?php`, mais la balise de fermeture n'est plus nécessaire. Elle est généralement omise par convention.

contrairement à de nombreux autres langages, PHP n'est pas toujours sensible à la casse, ainsi Echo est une déclaration valide en PHP même s'il faut mieux utiliser echo

### commentaire
`//`, `#`, `/*...*/`
```php
<?php
// I will always remember this
echo  "Hello, World!"; # My first PHP statement

/* "I've never thought of PHP as more
than a simple tool to solve problems."
- Rasmus Lerdorf */

echo  "\nRasmus is the creator of PHP!";
```

### to do list
The todo list example is frequently used when demonstrating a web framework or technology. It provides a way to exhibit how the **CRUD** (Create, Read, Update, Delete) behaviors are implemented using a specific technology.

Within a todo app, the functionality is typically:

-   Add new items to the list (Create)
-   View the existing list (Read)
-   Change the completion status of each item (Update)
-   Remove items from the list (Delete)

## variables
### concatenation
```php
echo  "one" . "two"; // Prints: onetwo
```

### variables
```php
$my_name = "Aisle Nevertell";
```
![](https://content.codecademy.com/courses/php-strings-variables/PHP_m2l1e5.svg)
One common convention when naming PHP variables is to use an underscore between words on variable names with more than one word in their name. This is known as _snake case_:

#### parsing
```php
$dog_name = "Tadpole";  
$favorite_food = "salmon";  
$color = "brown";  
  
echo  "I have a $color dog named $dog_name and her favorite food is $favorite_food.";  
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.
```
concatenations avec variables
```php
$dog_name = "Tadpole";  
$favorite_food = "treat";  
$color = "brown";  
  
echo  "I have a ${color}ish dog named $dog_name and her favorite food is ${favorite_food}s.";  
// Prints: I have a brownish dog named Tadpole and her favorite food is treats.
```

#### affectation par référence 
We use a different operator for this—the reference assignment operator (`=&`).

When we  _assign by reference_  we’re saying that the variable on the left of the operator should point, or  _refer_, to the exact same data as the variable on the right. With assignment by reference, changes made to one variable will affect the other:
```php
$first_player_rank = "Beginner";  
$second_player_rank =& $first_player_rank;  
echo  $second_player_rank; // Prints: Beginner  
  
$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank  
echo  $second_player_rank; // Prints: Intermediate
```
### numbers
comme en js

### récap
-   We can use the concatenation operator (`.`) to combine two strings into one.
-   We declare a variable using the dollar sign (`$`) followed by the variable name and then use the assignment operator (`=`) to give it a value.
-   PHP has variable parsing which allows us to include variables directly in our strings.
-   We can create an alias for a variable, instead of just a copy, using the reference assignment operator (`=&`).
-   Operations to the right of the assignment operator will be evaluated before assignment takes place.
-   The concatenating assignment operator (`.=`) is a shorthand notation for reassigning a string variable to its current value appended with another string value.
-   PHP has two number data types: integers and floating point numbers

## fonctions
une fonction retourne `NULL` si pas d'instruction return.
```php
function returnNothing()  
{  
	echo  "I'm running! I'm running!\n";  
}
```

on peut définir des paramètres par défauts
```php
function test($param1 = "default")  
{  
	...  
}
```

### passage par référence
les paramètres de nos fonctions sont des copie de valeur. la variable et le paramètres sont des entités distincts, les modifications à l'intérieur de la fonction ne vont pas affecter la variable :
```php
function addX ($param)  
{  
$param = $param . "X";  
echo  $param;  
};  
$word = "Hello";  
addX($word); // Prints: HelloX  
echo  $word; // Prints: Hello
```
pour le passage par référence on utilise `&$param` sur le paramètre de la fonction
```php
function addXPermanently (&$param)  
{  
$param = $param . "X";  
echo  $param;  
};  
$word = "Hello";  
addXPermanently($word); // Prints: HelloX  
echo  $word; // Prints: HelloX
```

### portée des variables
on peut définir des variables globales à l'intérieur de fonction
```php
$feed_quantity = 300;  
function calculateDaysLeft($number, $rate)  
{  
	global  $feed_quantity;  
	$result = $feed_quantity / ($number * $rate);  
	return  $result;  
}  
echo calculateDaysLeft(2, 120);
```

### récap
-   Functions can return a value by using the  `return`  keyword otherwise they return  `NULL`  which means no value.
-   When invoking functions, the values that we give them are called  _arguments_.
-   Functions can have multiple parameters.
-   You can make an argument optional by providing its corresponding parameter with a default value.
-   If you prepend a parameter with the reference sign (`&`) that argument will be passed by reference.
-   Variables within functions have local scope and can not be accessed from outside the function.
-   Use the  `global`  keyword to use variables from the global scope within a function.

## fonctions internes
https://www.php.net/manual/fr/

We’ve been using `echo` to print information to the console. [`echo`  is NOT a function](https://www.php.net/manual/en/function.echo.php) (it’s a “language construct”).
### variables
- `gettype($name)`: retourne le type de la variable sous forme de string
- `var_dump($namme)` : affiche les informations sur la variable sous ce format `type(taille) valeur` 

### strings
- `strrev($name)` : renverse la chaîne de caractères
- [`strtolower()`](https://www.php.net/manual/en/function.strtolower.php) : lowercase
- str_repeat: prends deux paramètres, la chaine et le nombre de répétitions
```php
echo str_repeat("hi", 10); // Prints: hihihihihihihihihihi
```
- [`substr_count()` ](https://www.php.net/manual/en/function.substr-count.php) : retourne le nombre d'instances d'une sous chaine de caractères dans une chaîne
```php
echo substr_count($story, "like");
```

### number
- `abs($number)`: valeur absolue
- `round($number)`: arrondie à l'entier le plus proche
- `rand($min?, $max?)`: retourne un nombre aléatoire **entier** entre min et max **inclus** sinon retourne un nombre jusqu'à la valeur max. **Fun fact: the second argument provided can be larger than `getrandmax()`.**
```php
$max = getrandmax();   
echo  $max;  
echo rand(); // Prints a number between 0 and $max
```
-`is_numeric`: check if variable is a number

## arrays
### afficher
pour afficher un array, on utilise la fonction `print_r`
```php
print_r($number_array);
/*
Array  
(  
	[0] => 0  
	[1] => 1  
	[2] => 2  
)
*/
```
ou
```php
echo implode(", ", $number_array);
```
### methodes
#### ajouter
on peut ajouter un élément sans utiliser de fonctions
```php
$string_array = ["first element", "second element"];  
$string_array[] = "third element";
```
sinon utiliser [**array_push**](https://www.php.net/manual/fr/function.array-push.php)

on peut ajouter des éléments au début d'un array avec la méthode `array_unshift`.

#### supprimer
on utilise la fonction **array_pop** pour supprimer le dernier élément. Note that `array_pop()` doesn’t just set the last element to `NULL`. It actually removes it from the array, meaning that array’s length will decrease by one (which we can verify using `count()`).

on peut utiliser **array_shift** pour supprimer le premier élément.

#### random
`array_rand($array)` : mélange un tableau avec un paramètre;
`shuffle` : mélange tous le tableau et retourne un boolean;
```php
$fruits  = ["pomme", "fraise", "banane", "ananas"];
shuffle($fruits);
```

### union
c'est le premier array qui a la priorité
```php
$animal_rankings = $my_array + $more_rankings;
```
par exemple dans l'exemple suivant on obtient un tableau `[8, 3, 7]` car ils partages les mêmes indices (0, 1, 2) et c'est le premier tableau qui a la priorité.
```php
$number_array = [8, 3, 7];  
$string_array = ["first element", "second element", "third element"];  
$union_array = $number_array + $string_array;
```

### assignation par valeur ou par référence
There are two ways to assign one variable to another:

-   By value—this creates two variables which hold copies of the same value but remain independent entities.
-   By reference—this creates two variable names (aliases) which point to the same space in memory. They cannot be modified separately!
```php
function changeColor ($arr)  
{  
$arr["color"] = "red";  
}  
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];  
changeColor ($object);  
echo  $object["color"]; // Prints: green
```
sinon on doit utiliser l'opérateur `&` pour passer par référence.



### arrays ordonnés
on peut utiliser la fonction array pour créer un array:
```php
$my_array = array(0, 1, 2); // 0, 1, 2
```
on utilise la fonction `count` pour obtenir la taille d'un tableau.

### arrays associatives
les arrays associatives permettent de créer des dictionnaire/objets avec attributs et valeurs.
utilisation d'une classe
```php
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
```

#### objets
```php
$personne = new stdClass();
$personne->prenom = "Elias";
$personne->nom = "Aboutaharan";
```
équivalent?
```php
$object  = (object) array(
	'name'  =>  'Trevor',
	'age'  =>  42
);
```

### recap
-   To print an array’s keys and their values, we can use the  `print_r()`  function.
-   We can assign values to keys using this same indexing syntax and the assignment operator (`=`):  `$my_array["dog"] = "good cuteness";`
-   We can remove a  _key=>value_  pair entirely using the PHP  `unset()`  function.
-   Keys can be integers. In fact, ordered arrays are just arrays in which integer keys have been assigned to the values automatically.
-   In PHP, associative arrays and ordered arrays are different uses of the same data type.
-   The union (`+`) operator takes two array operands and returns a new array with any unique keys from the second array appended to the first array.

## php avec html
### fonctionnement
Presenting and interacting with HTML is one of the primary uses of PHP. Our server takes each PHP file (in our examples, this is **index.php**), and translates them into HTML to present to the client in their web browser
![](https://content.codecademy.com/courses/updated_images/NodeBackEndFrontEnd_Update_1.gif)
### php dans html
il faut un fichier `index.php` pour pouvoir utiliser les balises php
```php
<?php
	echo "<p>This is PHP</p>";
?> 
```
ou la syntaxe courte pour ne pas utiliser le `echo`
```php
<?="<p>PHP interprets this and turns it into HTML</p>";?>
```

### superglobals
php a été construit dans un but de développement web, **When the front end client makes a request to a backend PHP server, several _superglobals_ related to the request are available to the PHP script.**

-   `$GLOBALS`
-   `$_SERVER`

####   `$_GET`
les informations sont passées par url contrairement à post!
dans l'exemple suivant il y a deux informations (first et last)
`www.codecademy.com/?first=ellen&last=richards`

```html
<form  method="get">  
Country: <input  type="text"  name="country">   
Language: <input  type="text"  name="language">   
<input  type="submit"  value="Submit">  
</form>
```
résultat
`https://localhost/?country=belgium&language=french`

#### `$_POST`
When using POST to submit forms, you will not see the URL change. The form data is sent using the headers of the HTTP request instead of URL parameters.


-   `$_FILES`
-   `$_COOKIE`
-   `$_SESSION`
-   `$_REQUEST` : contient les requêtes quelles soient post ou get.
-   `$_ENV`

#### action
To handle a form using **receive_form.php** from **index.php**, you would use the following:
```php
<form  method="get"  action="receive_form.php">
```

### recap
-   `<?=`  is shorthand for  `<?php echo`.
-   PHP provides superglobals which can be accessed anywhere in the script.
    -   `$_GET`  is an associative array containing data from a GET request.
    -   `$_POST`  is an associative array containing data from a POST request.
    -   `$_REQUEST`  is an associative array containing data from both GET and POST requests. It should only be used if you don’t care which method was used.






> Written with [StackEdit](https://stackedit.io/).
