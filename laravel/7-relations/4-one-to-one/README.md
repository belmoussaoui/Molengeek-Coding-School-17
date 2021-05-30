Dans un nouveau projet : laravel_onetoonne_exo_1

effacez le model user de base et les fichiers migrations, ainsi que la blade welcome.

- Créez deux tables : users(id,email,nickname,profil_id) & profils(id,name,age,phone)
- Créez un model User et Profil
- Créez un ficher controller pour User
- Créez une blade pour pouvoir rajouter un user, sur le formulaire user il est possible de créer un user en remplissant a la fois la table user et la table profil
- Créez une blade ou afficher tous les users 
- Premiere étape afficher leur email et nickname 
- Seconde étape créer une eloquente relationship dans le model User pour récuperer le profil de chaque user (relation one to one)
- Dernière étape, afficher le reste des informations  sur la blade users grâce a la nouvelle méthode créée dans le model user.