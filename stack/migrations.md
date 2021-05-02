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