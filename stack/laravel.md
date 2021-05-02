# Laravel
désactivation de l'antivirus car un fichier de laravel est considéré comme un virus.

https://laracasts.com/

## installation
https://5balloons.info/how-to-install-laravel-with-mamp-on-mac-os/

### windows
- utilisation de [**laragon**](https://laragon.org/).
https://sourceforge.net/projects/laragon/files/releases/4.0/laragon-full.exe/download
- la dernière version de nodejs (binary zip!)
https://nodejs.org/en/download/
- version 7 de php
- la dernière version de composer: https://getcomposer.org/download/
- phpmyadmin: https://www.phpmyadmin.net/

dans le dossier bin de laragon (la racine du pc), il faut remplacer composer.phar, la version de node, la version de php
dans laragon/etc/apps mettre phpMyAdmin

### mac
- mamp: https://www.mamp.info/en/windows/

https://www.apprendre-laravel.fr/laraguide/2017-11-02-installation-d-un-projet-laravel-avec-macos

```
curl -sS [https://getcomposer.org/installer](https://getcomposer.org/installer "https://getcomposer.org/installer") | php
```
```
mv composer.phar /usr/local/bin/composer
```

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
```
brew install php@7.4
echo 'export PATH="/usr/local/opt/php@7.4/bin:$PATH"' >> ~/.zshrc
echo 'export PATH="/usr/local/opt/php@7.4/sbin:$PATH"' >> ~/.zshrc
```

```
composer global require "laravel/installer"
```

***tous les projets laravel dans :
Applications ▹ MAMP ▹ htdocs***

`source ~/.bash_profile`

## introduction
### creation de projet
``laravel new mon-premier-projet``

## architecture
laravel a une architecture **MVC** (model view controller)
model : base de données
view :  l'interface
controller (gestion de la base de donnée et de ce qu'on voit)

chaque fichier fait une seule chose et c'est pour ca qu'il y a beaucoup de fichiers

### app
il va gérer tous , relation entre l'application et la base de données. c'est là ou se trouve les controllers et la base de données

- console et exceptions
pas utile (juste des messages d'erreurs
- http
on va utiliser les **controllers** (quoi faire) (des fonctions qui permettent la suppression, création et modification) et les middleware (qui peut exécuter les controllers).
- model
relation entre la base de données et les tables du projet
- providers
donne l'autorisation des middleware a être exécuté dans des parties du projet (les middleware seront principalement dans les routes)

### bootstrap
gestion de l'interface (on va pas utiliser car on utilisera des interfaces déjà faites)

### config
des paramètres pour notre application
(on peut change le nom du domaine et plein d'autres paramètres)

#### timezone
on peut modifier le fuseau horaire et le remplacer paf 
`timezone' => "utc-8",`
`'timezone' => "Europe/Brussels",`

### database
pour travaille sur la base de données. séparation de la création des tables et du contenue.
- factories
valeurs automatiquement (aléatoire) via une librairie "faker". c'est une usine pour donner des valeurs par défauts. pour éviter de créer des utilisateurs à la main via une libraire. c'est surtout pour tester.
- migrations
création de tables (petites parties de la base de données): une table c'est un objet avec des propriétés.

3 tables sont déjà faits

- seeders
création des valeurs manuellement (soit on utilise le seeders soit factories)

### public
- index.php
aller dans un dossier est grâce aux routes ce qu'il doit executer (il remplace index.html). on le laisse tel quel.

### resources
dossier de production (css, js, ...) il le met dans public par la suite.

- views
les views sont ce qui remplace le contenu html et *.blade.php* c'est comme du jsx en quelque sorte. c'est du html dans php.

### routes
ce sont les url. on indique la route `/...` et la vue attribuée.
le chemin et ce qu'il doit faire

les *broadcast* sont les notifications et les popups (on va pas voir ca)

### storage
stockage des images
- app
- framework
- logs

### tests
les tests unitaires (les requêtes) 

### vendor
c'est le node_modules de php

### fichiers
- .env : la relation pour recevoir et envoyer des requêtes
`DB_PORT=8889` a mettre sur mac
`DB_PASSWORD=root`
- artisan: permet d'executer des commandes
- composer.json : c'est comme package.json
composer i pour installer les dépendances
- server.php: l'antivirus veut le supprimer (il est utiliser par php artisan serve)
- webpack.mix: c'est pour indiquer quoi watch les ressources

## Fonctions
### dump and die
c'est comme un console.log
```php
dd($tableau); // affiche le tableau
```

## Routes
#### get
à besoin de deux paramètres, une url et une action (sous forme de fonction) qui retourne un rendu.

##### view
on peut retourner un fichier `.blade.php` avec la fonction `view`.

```php
Route::get("/", function  () {
	return  view("index");
});
```

pour passer des variables à view
```php
Route::get("/contact", function  () {
	return view("contact", ['name' => 'Victoria']);
});
```
ou 
https://www.php.net/manual/fr/function.compact.php
```php
Route::get("/contact", function  () {
$name = "Victor";
	return  view("contact",  compact("name"));
});
```

en laravel on préfère utiliser le `.` pour indiquer d'aller chercher le chemin dans le dossier au lieu de `/`. on fait une différence entre le chemin et ou se trouve les fichiers.
```php
Route::get("/contact", function  () {
$name = "Victor";
	return  view("pages.contact",  compact("name"));
});
```

on peut donner des noms à des routes pour éviter de mettre des url
```php
Route::get('/', function  () {
	return  "Bonjour chers utilisateurs";
})->name("pagePrincipale");
```
et ensuite
```php
<a  href={{ route("pagePrincipale") }}>à propos</a>
```

##### routes dynamiques
toujours mettre les routes dynamiques à la fin (après les routes normales.
```php
Route::get("/{chiffre}", function  ($x) {
	return  "Le chiffre que j'ai ajouté est $x";
});
```

#### post

#### delete

### Pattern
on peut définir des patterns pour les routes via les regex et un identifiant.
https://laravel.com/docs/4.2/routing#route-parameters

## blade.php
ce sont des fichiers  ou on peut mettre du html mélangé avec du php pour représenté une vue.

### variables
on utilise le doubles accolades qui est equivalent à une balise php.

### condition
if else
```php
@if ()
	...
@else
	...
@endif
```

le switch
```php
@switch($type)
	@case(1)
		...
		@break
	@case(2)
		...
		@break
	@default
		...
@endswitch
```

### for loop
```php
@foreach ($tableau  as  $elem)
	<h1>mon element = {{  $elem  }}!</h1>
@endforeach
```

```php
@for ($i = 0; $i < count($tableau); $i++)
	<h1>mon element = {{  $tableau[$i] }}!</h1>
@endfor
```

### divers
#### variables optionnels pour une vue
on utilise deux points d'interrogations `??` pour indiquer une valeur par défaut:
```php
<body>
	<span>Bonjour {{  $prenom ?? "bilal"  }}  {{  $nom ?? "el moussaoui"  }}</span>
</body>
```

## bootstrap
avant il y avait tout (vue, react, bootstrap) qui étaient pré-installés. maintenant il faut installer soit même ce qu'on a besoin (c'est mieux!)
https://www.itsolutionstuff.com/post/laravel-8-install-bootstrap-example-tutorialexample.html (bootstrap 4)
```
composer require laravel/ui
php artisan ui bootstrap
```
ensuite il faut modifier la version de bootstrap le package.json
```json
"bootstrap": "^5.0.0-beta3",
```
et pour finir
```
npm install @popperjs/core
npm install && npm run dev
```
la commande `npm run dev watch` permet de compiler tous ce que est dans le dossier ressource dans le public

et la vrai fin 
```
npm run dev
```

### les liens
`asset` va directement chercher dans le dossier public. on utilise pas `/js/main.js` car le `/` fait référent à un projet local. nous on veut faire référence au nom du domaine du site
```php
<link  rel="stylesheet"  href={{  asset("css/app.css")  }}>

<script  src={{  asset("js/app.js")  }}></script>
```

## utilitaires
laravel permet d'utiliser des fonctions préfètes.
```
$fruits = Arr::shuffle(["pomme", "fraise", "banane", "ananas"]);
```

## template
on peut créer des template pour factoriser le code. on crée un dossier `layout` et un fichier `app.blade.php` . **layout c'est les structures de bases d'un fichiers**.

on peut aussi créer un dossier `partials` pour y mettre des composants. **les partials sont les sections, header, footer...**

### yield
le yield est une méthode qui permet d'injecter du code avec un nom qui permet de l'identifier. c'est pour indiquer quoi et ou injecter du code. c'est dans les fichiers qui se trouvent dans le `layout`
```php
@yield("content")

@section("test")
	<h1>hello world</h1>
@show
```

### extends
on peut étendre un layout qui comport un `yield` avec des composants avec le `@extends`. (directement dans la vue)
```php
@extends("layouts.app")

// section en relation avec le yield 
@section('content')
	@include("partials.nav")
	<h1>je suis un h1</h1>
	@include("partials.footer")
@endsection

// on peut faire extension d'une section du parent
@section('test')
	@parent // affiche le contenu du parent
	<p>lorem...</p>
@endsection
```

### include
permet d'injecter directement une view dans une autre
```php
@include("component")
```

## divers
### comment tuer un serveur créer par php artisan serve
https://stackoverflow.com/questions/38761354/stop-laravel-server-with-command-line-interface
```
sudo kill $(sudo lsof -t -i:port_number)
// par exemple
sudo kill $(sudo lsof -t -i:8000)
```

### navbar avec élement en active
```php
<a  class="nav-link {{  "about"  ==  Route::currentRouteName() ? 'active' : ''  }}"  href={{  route("about")  }}>About</a>
```
par passage de variable par la route
```php
<a  class="nav-link {{  "about"  ==  $page ? 'active' : ''  }}"  href={{  route("about")  }}>About</a>
```

### utiliser du html dans une variable blade
```php
$title = "<h1>je suis un h1</h1>";
{!! $title !!}
```

## migrations

### introduction
créer une base de données sur phpmyadmins avec le même nom que le projet laravel.
`DB_PORT=8889` sur mac
`DB_USERNAME=username`
`DB_PASSWORD=password`

### migrations
prendre un table et la mettre dans la base de données

#### la commande migration
```
php artisan migrate
```
convention laravel
- **up** prendre ca et la mettre dans la base de données
- **down** supprime de la base de données
#### create user table
- `Schema::create` : nom de base de données et une action.
la variable `$table` permet de créer des colonnes.

- `id()` -> primary key auto_increment integer unsigned;
- `string(name, length=255) `-> c'est un **varchar**;
-  string("email")->unique() -> un seul mail identique dans la table pour éviter de s'inscrire plusieurs fois avec la même adresse.
- timestamp('email_verified_at')->nullable() -> mets une date pour la vérification du mail. donc par défaut elle est à null car pas encore vérifier.
- rememberToken() -> enregistrement pour identifier l'utilisateur
- timestamp() -> la dernière mise à jour du compte (changement photo de profil, description, etc)

## seeders
pour créer un seeder (insertion de données dans une table), on utilise la commande suivante:

```bash
php artisan // donne tous les commandes possibles
php artisan make:seeder UserSeeder // en singulier
```

### insertion de données
pour utiliser une base de donnée:
```php
use Illuminate\Support\Facades\DB;

//...

public function run() {
	// utilisateur 1
	DB::table("users")->insert([
		"name"  =>  "Bilal",
		"email"  =>  "bilal@molengeek.com",
		"password"  =>  "motDePasse",
		"created_at" =>  now()
	]);
	// utilisateur 2
	DB::table("users")->insert([
		"name"  =>  "Elias",
		"email"  =>  "elias@molengeek.com",
		"password"  =>  "testtest",
		"created_at"  =>  now()
	]);
}
```
et ensuite dans `DatabaseSeeder` pour appeler notre seeder :
```php
// ...
public function run() {
	$this->call(UserSeeder::class);
}
```

### db:seed (insertion)
pour insérer les données des seeders dans la base de donnée:
```
php artisan db:seed
```
exécute ce que trouve dans les seeders pour les insérer dans la base de données

### migrate:fresh (supprimer les tables)
si on a fait une erreur et qu'on a besoin de supprimer les tables et les recréer.
```
php artisan migrate:fresh
```
et ensuite pour la remplir
```
php artisan db:seed 
```

### make:migration (création de tables)
il faut respecter la convention pour le nom du fichier
``
php artisan make:migration create_personnes_table
``
cela va créer un fichier dans le dossier migration avec comme nom la date de création et le paramètre passé dans la commande précédente.

```php
public  function  up() {
	Schema::create('personnes', function  (Blueprint  $table) {
		$table->id();
		$table->string("name");
		$table->unsignedInteger("age");
		$table->date("ddn");
		$table->timestamps();
	});
}
```
et ensuite on lance la commande suivante:
```
php artisan migrate
```
cela ne va executer que les migrations qui n'ont pas été fait.

on crée le seeder:
```
php artisan make:seeder PersonneSeeder
```
et on réalise **l'insertion de données** (voir section correspondante)


## models
le but principal est de **communiquer** avec la base de données (mysql) et la vue (blade). c'est ce qui sera afficher dans la vue. il permet aussi de protéger les propriétés et les valeurs de la table.

chaque table à son propre modèle dans le dossier `app/Models/`.

### les propriétés
- **table**
la ligne suivante permet de protéger la table `users` et éviter d'appliquer des modifications en dehors de la classe. c'est la table associée avec le modèle.

```php
protected $table = "users";
```

- **fillable**
ce sont les données (colonnes) qui vont avoir beaucoup de valeurs (valeur en masse).
```php
protected $fillable = ['name', 'email', 'password'];
```

- **hidden**
ce sont les données (colonnes) qui doit être protégés
```php
protected  $hidden  = ['password', 'remember_token'];
``` 

- **casts**
ce sont pour les données de type `timestamp` (créer et update) qui n'ont pas de données par défaut. donc on doit spécifier un type (string, date, integer) dans ce tableau.
```php
protected  $casts  = ['email_verified_at'  => 'datetime'];
```

### php artisan make:model Name
pour la création d'une classe modèle. à chaque fois 
```
php artisan make:model Voiture
```
on peut aussi utiliser la commande suivante pour créer un modèle avec une migration et une factory/seeder
```
php artisan make:
```
pour avoir accès au model
```php
$users = User::all();
dd($users[2]->name);
```
on évitera d'utiliser les crochets (l'index) pour avoir accès à une données car elle ne permet pas d'identifier une donnée. car on peut supprimer les données est les index sont ré-attribuer mais pas les `id`. donc on utiliser les `id` pour avoir accès à une donnée:
```php
$users = User::first(); // [0]
$users = User::find(5); // selon l'id
$users = User::where('nom', 'bilal')->get(); // affiche les données qui respectent la condition sous forme de tableau
$users = User::where('id', 5)->first(); // équivalent à ::find(5);
```


## factory
permet de créer des données de manières automatique comme si c'était une usine. la classe factory a un attribut `faker` qui permet de générer des données.

### faker
c'est un librairie qui permet de générer des données et qui est accessible à partir de l'attribut `$faker`.
https://github.com/fzaninotto/Faker

pour générer un mot de passe par exemple on fait la ligne de code suivante
```php
'password'  =>  Hash::make($this->faker->password()),
```
la méthode `Hash::make(password)` permet de crypter un mot de passe.

### propriétés
- **$model**
le lien avec le modèle qui détient également la table.

### seeder
pour générer des données et les insérer dans la table liée à notre modèle
```php
\App\Models\User::factory(10)->create();
```
ou
```php
use App\Models\User;
// ...
User::factory(10)->create();
```
et ensuite on lance dans le terminal
```
php artisan db:seed
```

## controller
il y a un controller par table.
le back office permet la gestion des données pour le client qui n'as pas besoin de passer par `mysql` ou `phpmyadmins`.

ca se divise en 5 parties:
- afficher (read)
retourner tous les éléments qui sont dans une table spécifiée.
- afficher un seul élément (read)
pour afficher un élément précis (cliquer sur une image affiche une description est des informations supplémentaires par exemple)
- creer (create)
pour créer des nouveaux éléments dans la table (insertion de données).
- mise à jour (update)
pour mettre à jour les données d'un seul élément (une colonne) d'une table.
- suppression (delete)
la suppression d'un seul élément précis d'une table

### crud (create, read, update, delete)
c'est en quelque sorte de "recréer" `phpmyadmins` directement dans le site pour les moldus (client) qui ne sait pas l'utiliser.

#### crud vs seeder/factory
on utiliser les seeder/factory pour créer des données préalablement pour la première livraison du site. le crud est utilisé lors de la durée de vie du site et pas à la naissance par le client.

### php artisan make:controller name
la commande pour créer un controller dans `app/Http/Controllers` :
```
php artisan make:controller UserController 
```

et maintenant on utilise la ligne de code suivante pour la gestion des routes:
```php
Route::get('/user', [UserController::class, 'index']);
```

### méthodes
- index
prends tous les éléments du model et les envois dans une blade. elle doit donc retourner une `view`
```php
public  function  index() {
	return  view("welcome");
}
```

## erreurs
### error 500 server not found
Si vous avez une erreur 500 Server, c'est parce que vous n'avez pas de fichier .env

Vous devez créer ce fichier à la racine du projet, copier ce qu'il y a dans le fichier .env.example et le mettre dans le fichier .env

et puis lancer
```
php artisan key:generate
```
cela arrive lorsqu'on clone un projet avec github

### 1 ERROR child compilations
modifier les chemins dans le scss ou ajouter la ligne suivante dans webpack.mix.js (peut causer certains problèmes)
```js
mix.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css')
	.options({processCssUrls: false})
	.sourceMaps();
```



> Written with [StackEdit](https://stackedit.io/).
