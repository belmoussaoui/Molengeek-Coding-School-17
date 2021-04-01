# Récapitulatif de ReactJs en Class

Sur base d'un nouveau dossier ReactJs, et de tout ce que vous avez vu précédemment, réalise l'exercice suivant :

## Consignes : 

Réaliser un eShop en React. L'exercice consiste à faire des achats de plusieurs articles. (voir vidéo en annexe)

Dans le fichier App.js, créer un State avec votre argent (20) , un panier (un array vide) et 3 articles (un tableau avec 3  objets. Chaque objet comporte un nom, un prix, le stock disponible et le lien d'une image pour le visuel de l'article).

Créer deux composants du nom de "Panier.js" qui affichera tous les articles achetés et "Articles.js" qui affichera tout les articles disponibles. (Utilisation des props, méthodes array.map)

## Fonctionnalité : 

Sur les 3 articles vous avez un button "acheter" qui contient une fonction. Elle permet d'ajouter l'article dans votre panier, mais en conséquence votre argent diminue (soustraire le prix de l'article à votre argent). Pareil pour le stock de l'article, à chaque ajout dans le panier, le stock de l'article diminue. La fonction doit être créer dans le composant App.js et doit être  passer dans le composant Article.js (props, setState)

Les articles achetés s'affichent dans votre panier. (dans composant Panier.js). Créer une fonction qui permet de rendre un article au magasin si vous le souhaitez.  (props)

Si vous n'avez plus d'argent, les buttons "acheter" disparaissent. (affichage conditionnel)

Si le stock de l'article est égale à 1, le fond de la card devient orange. Si le stock est égal  à 0, le fond de la card devient rouge et le buton "acheter" disparait (affichage conditionnel)

Récap de l'exercice :

Nettoyer votre structure ReactJs au maximum Sur votre fichier App.js, créer le state  et les fonctions Créer deux composants en plus : "Panier.js" et Article.js" et afficher les données qui en sont demandées
