# Exercice avec les Storage et les Validate
laravel_storage_exercice

## Database
- Une table users avec nom(30), prenom(30), age(int), email (unique), mot de passe (crypté), photo de profil
- Une table albums avec un nom(30) et une description(255)
- Une table photos avec un nom(30), un lien(255), une categorie(50) et une description(255)

## Fonctionnalités
Vous devez faire tous les CRUD pour ces tables et vous allez devoir ajouter une fonctionnalité pour télécharger l'image
Aussi, vous devez stocker les images dans le votre projet, et quand je ne remplis pas tous les champs, je reçoit un message d'erreur, dans le cas contraire, je dois avoir un message en vert comme quoi j'ai bien créé l'élément
Pour les catégories des photos, vous devez me proposer 5 catégories avec un select