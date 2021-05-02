
# SQL
c'est un langage pour écrire des requêtes à la base de données.
une base de données est composé de tables, ce sont des sortes d'objets qui comportent des attributs valeurs.

## mysql vs sqlite
https://www.geeksforgeeks.org/difference-between-mysql-and-sqlite/


## mysql dans le terminal
```
sudo /Applications/MAMP/Library/bin/mysql -u root -p
```

pour se connecter à un compte ou `root` est l'utilisateur
```bash
mysql -u root -p
```
le mot de passe est `root`.

## créer un utilisateur
on utilise la commande suivante pour créer un utilisateur
```create user 'belmouss'@'localhost' identified by 'password';```
ensuite il faut donner les mêmes privilèges que root pour pouvoir créer des bases de données
```sql
grant all privileges on *. * to 'belmouss'@'localhost';
```
et ensuite pour mettre à jour les changements
```sql
flush privileges;
quit;
```

### pour se connecter
```mysql -u belmouss -p```
on peut créer un alias pour nous faciliter la vie dans le fichier `.zshrc` qui se trouve à la racine de l'utilisateur:
```
alias mysql="/Applications/MAMP/Library/bin/mysql"
```

## base de données
on utilise la commande `show databases;` pour afficher les bases de données
```bash
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
```

### suppression de bdd
on utilise la commande suivante pour supprimer une base de données
```sql
drop database `database-name/`;
```

### création d'une bdd
```sql
create database introduction_mysql;
```

### utilisation d'une bdd
pour utiliser une base de donnée on utilise la commande suivante
```sql
use database_name;
```

## Les tables
une table est une "structure" de notre base de données qui comporte des objets. un tableau est composés de lignes qui sont les valeurs d'un objet et des colones qui sont les attributs du tableau:
```sql
// colonne1 = propriété 1, colonnen = propriété n
+----+-------+
| id | nom   |
+----+-------+
|  1 | Bilal | // ligne1 = objet 1
|  2 | Elias | // ...
|  3 | Nico  | // lignen = objet n
+----+-------+
```
### CREATE
ensuite on peut créer un tableau (objet avec les propriétés de bases). Chaque élément de la table doit toujours avoir un `id` pour pouvoir l'identifier:

```sql
create table personnes (id int auto_increment primary key, nom char(30));
```
qui respecte la syntaxe suivante:
```sql
CREATE TABLE table_name (  
	column_1 data_type,  
	column_2 data_type,  
	column_3 data_type  
);
```
`CREATE TABLE` est la clause. par convention on écrit les clauses en majuscules. les clauses procède à une tâche sql spécifique.


#### contraintes
on peut spécifier des contraintes qui ajoute des informations sur comment une colonne peut être utilisé

- **primary key**
la clé primaire indique que c'est la propriété la plus importante et qui le permet d'identifier l'objet. Une tentative d'insérer une ligne avec une valeur identique d'une colonne déjà présente dans la table entrainera une **constraint violation**.
- **NOT NULL**
la colonne doit avoir une valeur par défaut.



on doit spécifier une taille maximum de caractères pour les chaînes (30 au maximum  ci-dessus)

pour afficher les propriétés/valeurs d'un tableau:

```
show columns from personnes;
+-------+----------+------+-----+---------+----------------+
| Field | Type     | Null | Key | Default | Extra          |
+-------+----------+------+-----+---------+----------------+
| id    | int(11)  | NO   | PRI | NULL    | auto_increment |
| nom   | char(30) | YES  |     | NULL    |                |
+-------+----------+------+-----+---------+----------------+
```
le int nous permet  d'avoir (-2147483648-2147483647) soit 4 octets. il faudrait utiliser `bigint` pour pouvoir mettre plus d'utilisateurs (8 octets).

### INSERT
pour attribuer les valeurs à des propriétés
```sql
insert into personnes set nom="Bilal";
select * from personnes;
+----+-------+
| id | nom   |
+----+-------+
|  1 | Bilal |
|  2 | Elias |
|  3 | Nico  |
+----+-------+
```
une autre syntaxe pour insérer des valeurs dans une table
```sql
INSERT  INTO celebs (id, name, age)  
VALUES  (1, 'Jeff Gordon', 49);
```

### ALTER
la clause `ALTER TABLE` permet d'ajouter une nouvelle colonne dans une table. elle permet aussi d'appliquer des **alterations** dans une table.
```sql
alter table personnes rename column oldname to newname;
```
```sql
ALTER TABLE your_table_name CHANGE original_column_name new_col_name data_type;
```
modifier la valeur d'un objet:
```sql
update table_name set column_name="value" where id=chiffre;
```

### SELECT
Les instructions `SELECT` sont utilisées pour extraire des données d'une base de données.
```sql
SELECT nom FROM personnes; // extraction des noms
SELECT * FROM personnes; // extration de tous les données
```

### UPDATE
`ALTER` est utilisé pour add, delete, **modify** les attributs d'une base de données. `UPDATE` est utilisé pour **update** des données existantes. 
```sql
UPDATE celebs
SET twitter_handle = '@taylorswift13'
WHERE id = 4;
```

### DELETE
la clause `DELETE` est utilisé pour supprimé des un ou plusieurs colonnes d'une table.
```sql
DELETE  FROM celebs  
WHERE twitter_handle IS  NULL;
```
la commande précédente supprime tous les colonnes qui n'ont pas de valeur pour l'attribut `twitter_handle`.


## QUERIES
on utilise la clause `SELECT` à chaque fois qu'on souhaite utiliser une requête.
```sql
SELECT column1, column2  
FROM table_name;
```
### as
permet d'utiliser un alias pour une colonne ou une table.
```sql
SELECT name AS  'Titles'  
FROM movies;
```

> Written with [StackEdit](https://stackedit.io/).
