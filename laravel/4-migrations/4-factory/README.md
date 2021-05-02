# Migration, Seeder et Factory

Vous allez créer un nouveau exercice et vous allez l'appeler laravel-migration-exo-4

## Batiments
Créer une table Batiment. Cette table aura comme propriété :

    - un id qui sera un entier, s'incrémente
    - un nom pour identifier le batiment qui sera un string, limité à 30 caractères
    - une description qui sera un text

## Formations
Créer une table formations. Cette table aura comme propriété :

    - un id qui sera un entier, s'incrémente
    - un nom pour identifier les formations qui sera un string, limité à 30 caractères
    - une description qui sera un text

## TypeFormation
Créer une table typeformations. Cette table aura comme propriété suivante:

    - un id qui sera un entier, s'incrémente
    - un nom pour identifier les types de formations qui sera un string, limité à 30 caractères

## Eleves
Créer une table eleves. Cette table aura comme propriété suivante:

    - un id qui sera un entier, s'incrémente
    - un nom pour identifier les noms des élèves qui sera un string, limité à 30 caractères
    - un prenom pour identifier les prenoms des élèves qui sera un string, limité à 30 caractères
    - l'âge pour identifier l'âge des élèves qui sera un number
    - un état pour identifier si les élèves sont demandeurs d'emploi qui sera un boolean, limité à 30 caractères

Une fois que les tables ont été crées, vous devez créer 1 batiment (seed), 6 formations (seed), 10 types de formations (seed) et 50 élèves (factory)