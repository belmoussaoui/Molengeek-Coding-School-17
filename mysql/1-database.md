# Exo 1 Database

- créer une DataBase du nom de : exo1CodingSchool
- créer une table users 
- la table users contient 3 colonnes 
- id ( doit etre un entier, ne peut pas etre négatif, ne peut pas etre null,  doit etre une clef primaire )
- nom (doit etre un varchar de 40 maximum)
- age (doit etre un entier, ne peut pas etre négatif)

- Insérer 3 entrées : Nicolas 18, Elias 14, Ayhan 12
Tester de sélectionner toutes les entrées
SELECT * FROM nomdelatable;

**!Attention :** avant de pouvoir faire un select il faut au préalable USE la bonne DB
USE nombasededonnée;

```
> create database exo1_coding_school;
> use exo1_coding_school;
> create table users (id int unsigned NOT NULL auto_increment primary key, nom varchar(40), age int unsigned);
> insert into users set nom="Nicolas", age=18;
> insert into users set nom="Elias", age=14;
> insert into users set nom="Ayhan", age=12;
> select * from users;
+----+---------+------+
| id | nom     | age  |
+----+---------+------+
|  1 | Nicolas |   18 |
|  2 | Elias   |   14 |
|  3 | Ayhan   |   12 |
+----+---------+------+
> update users set age=25 where id=2;
> ALTER TABLE users CHANGE age age int;
```