# Exo 3 Database
- Créer une DB exo3codingschool avec 3 tables
- 1 Table users avec (id, nom, prenom, age, date de naissance, email, mot de passe)
- 1 Table articles avec (id, auteur, date, texte)
- 1 Table animaux avec (id, nom, age, couleur de peu)

Vous devez créer 5 personnes, 4 articles et 8 animaux

```sql
CREATE DATABASE exo3_coding_school;
use exo3_coding_school;

create table users (
    id int primary key auto_increment,
    nom varchar(30), prenom varchar(30),
    `date de naissance` DATE,
    email varchar(30),
    `mot de passe` varchar(30)
);

create table articles (
    id int auto_increment primary key,
    auteur varchar(40),
    date DATE,
    texte TEXT
);

create table animaux (
    id int primary key auto_increment,
    nom varchar(30),
    age int unsigned,
    `couleur de peau` varchar(30)
);
```