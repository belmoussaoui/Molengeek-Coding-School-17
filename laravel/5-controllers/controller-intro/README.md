# Migration, Seeder et Factory

Vous allez créer un nouveau exercice et vous allez l'appeler laravel-migration-exo-5

## Users

   - Un id qui sera un entier et il s'incrémentent automatiquement
   - Un nom qui sera un string limité à 30 caractères
   - Un email qui sera un string et unique
   - Un mot de passe qui sera un string
   - Une photo qui sera un string

## Albums

   - Un nom qui sera un string limité à 30 caractères et unique
   - Une description qui sera un texte
   - Un auteur qui sera un string limité à 30

## Photos

  - Un nom qui sera un string limité à 30 caractères
  - Un path pour mettre le lien de l'image qui sera un string

Vous allez créer 5 users avec factory dont leur mot de passe est crypté, 10 albums avec factory et 50 photos avec factory aussi