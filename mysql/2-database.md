# Exo 2 Database

- créer une DB exo2codingschool avec une table users et une table classes
- users ( id, nom,age, classe)
- classes ( id, nom, taille )
- dans users, il doit y avoir : Nicolas 18 CS15, Maxime 9 CS17, Elias 14 CS6, Maryam 4 CS11, André 12 CS15
- dans classes, il doit y avoir : Coding School 20, Webmaster School 14

- Trouvez le moyen de n'affichez que les users dont l'age est supérieur a 10
- Trouver le moyen de n'afficher que les users dont l'age est inférieur à 10

```sql
CREATE DATABASE exo2_coding_school;
USE exo2_coding_school;
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    age INT UNSIGNED,
    classe VARCHAR(10)
);
CREATE TABLE classes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30),
    taille INT UNSIGNED
);

INSERT INTO classes(nom, age) VALUE ("Nicolas", 18);
INSERT INTO classes(nom, age) VALUE ("Maxime", 9);
INSERT INTO classes(nom, age) VALUE ("Elias", 14);
INSERT INTO classes(nom, age) VALUE ("Maryam", 4);
INSERT INTO classes(nom, age) VALUE ("André", 12);


INSERT INTO classes(nom, taille) VALUE ("Coding School", 20);
INSERT INTO classes(nom, taille) VALUE ("Webmaster School", 14);



UPDATE users SET classe="CS15" where id="Nicolas";
UPDATE users SET classe="CS17" where id="Maxime";
UPDATE users SET classe="CS6" where id="Elias";
UPDATE users SET classe="CS11" where id="Maryam";
UPDATE users SET classe="CS15" where id="André";

SELECT * FROM users WHERE age>10;
+----+---------+------+--------+
| id | nom     | age  | classe |
+----+---------+------+--------+
|  1 | Nicolas |   18 | CS15   |
|  3 | Elias   |   14 | CS6    |
|  5 | André   |   12 | CS15   |
+----+---------+------+--------+

SELECT * FROM users WHERE age<10;
+----+--------+------+--------+
| id | nom    | age  | classe |
+----+--------+------+--------+
|  2 | Maxime |    9 | CS17   |
|  4 | Maryam |    4 | CS11   |
+----+--------+------+--------+

```