# Git
un p'tit jeu:
https://git-school.github.io/visualizing-git/

master deviens main :-(
https://www.zdnet.com/article/github-to-replace-master-with-main-starting-next-month/

https://www.grafikart.fr/formations/git
https://www.atlassian.com/fr/git/tutorials

## Git vs Github
git est le langage et github est l'outil qui utilise le langage git pour l'hébergement de dépôts git.

git est basé sur un modèle distribué (décentralisé), on peut donc travailler hors ligne sur sa propre machine jusqu'au (``pull/push``?).

d'ailleurs on peut utiliser git seul sans de dépôt distant! par contre par moyen de collaborer avec d'autres développeurs de cette manière. c'est uniquement pour garder un historique du code. 

une vidéo expliquant la manière dont fonctionne git:
https://www.youtube.com/watch?list=PLtAnN3kwIVucWlr1pyfnmw8qCNaq0tusi&v=PjTilX5DeyM&feature=emb_title

## Les états des fichiers
un fichier peut être
- ``tracked``
- ``untracked``

un fichier ``untracked`` est un fichier qui n'est pas indexé (jamais commit) et pas dans la scène courante.

les sous-états sont
- ``modified`` : les fichiers modifiés mais pas présente dans la scène
- ``staged`` (indexé): les fichiers présentes dans la scène pour le prochain commit
- ``commited`` : les fichiers présentes dans la base de données 

## Les zones de travail
**le repertoire de travail (working tree)** : correspond à un checkout, les fichiers sur le disque dur de l'ordinateur. lorsqu'on ``checkout``, on change les fichiers présents sur le disque dur.

**staging area** : un fichier qui comporte tous les noms de fichiers/répertoires qui sont présents dans la scène

**repertoire git** : tous les méta-données et la base de données .git invisible. utilisé ``ls -a`` pour avoir accès

## Base de git
### git config
on peut configurer les paramètres git. on utilise ``git config --list`` pour obtenir les valeurs des attributs de la configuration.

### git status
indique la branche actuelle et les fichiers "untracked" et "tracked".

### git add
ajoute le fichier/repertoire spécifié en paramètre dans la zone "staged". le "staged" est une sorte de scène qui contiendra les prochains fichiers/repertoires à "snapshot". ce sont les données prêtes à être commit.

ajouter tous les fichiers html
```git
git add *.html
```
### git commit -m ""
chaque commit stock un "snapshot" dans une base de donnée locale (sur la machine). c'est optimisé puisque git compresse seulement les modifications dans le "snapshot" dans le repertoire .git invisible.

### le remote
nécessaire d'avoir un remote (généralement github mais ca peut tout simplement être une clés usb/un serveur personnel ou tout simplement un autre repertoire).

``origin`` est un alias de ``url`` qui est toujours nommé de cette manière par convention. on définit pour le repertoire git courant le remote se trouvant à ``url`` et qui s'appelle ``origin``.  on peut d'ailleurs ajouter plusieurs remote.
```
git remote add origin url
```
``url`` doit être un répertoire initialisé git! on utilise la commande ``git init --bare`` pour éviter d'avoir une base de données inutile dans le remote.

#### git push
ainsi la commande ``push`` transfère les commits locaux dans le ``remote``.
```git
git push origin
```
ou tout simplement si un seul remote qui est nommé ``origin``
```git
git push
```

#### git pull
permet de récupérer les commits du ``remote``.
si le remote est en avance, cela va effectuer un ``3 way merged``
```git
git pull
```

on peut faire un ``fast forward`` avec
```git
git pull --rebase
````

#### git clone
pour débuter un nouveau projet depuis un remote:
```git
git clone url
```


### git log
afficher les derniers commits

afficher les deux derniers commits
```git
git log -n 2
```

afficher les commits sur une ligne
```git
git log --oneline
```

afficher les commits en rapport avec le paramètre
```git
git log -p readme.md
```

afficher les commits sous forme de graphe
```git
git log --all --decorate --oneline --graph
```

on peut afficher l'historique sur vs code en cherchant ``git history`` dans le panel de vs code en installant https://marketplace.visualstudio.com/items?itemName=donjayamanne.githistory.

### git reflog
contient tous les commits même ceux effacés et qui n'ont pas était nettoyé par le garbage collector de git! c'est une astuce de pro. ``reflog`` donne accès aux derniers emplacements de  HEAD. permet donc de retrouver le ``SHA1`` (id d'un commit) qui a était effacé mais toujours en mémoire.

### git diff
permet de voir les différences avec le dernier commit

### git stash
imaginons qu'on est en train de travailler et qu'on souhaite changer de branche sans pouvoir commit ce qu'on était en train de faire car on a pas fini d'écrire la fonctionnalité. on peut dès lors utiliser un ``git stash`` pour en quelque sorte mettre au placard (qui fonctionne comme une pile) ce qu'on a fait (le remisage).

#### git stash
on utilise ``git stash apply`` pour appliquer la dernière modifications qui est dans le placard (peut créer des conflits?).

on utilise ensuite ``git stash drop`` pour supprimer le dernier élément dans le placard.

on peut aussi utiliser ``git stash pop`` pour effectuer un ``apply``et un ``drop``en même temps.

#### git stash list
on peut mettre plusieurs modifications dans le placard. on peut consulter le placard avec
```git
git stash list
```

## Revenir en arrière
### git revert
le prochain commit est un retour à ``id_commit``.
donc ca n'efface pas les commits qui ont été fait après `id_commit`!

### git reset HEAD
``file`` est un fichier staged. on peut le retirer de la scène via la commande suivante:
```git
git reset HEAD file
```

permet de revenir à deux commits en arrière.
mais ne restaure pas le repertoire de travail. donc on peut ajouter les modifications dans la scène (``staged``) on peut faire avec l'option (``--soft``)
```git
git reset HEAD^^
```
ne peut pas être défait!
permet de restaurer au dernier commit
```git
git reset --hard
```

permet de revenir au commit et supprimer tous les commits qui ont été fait après ``id_commit``. mais ne restaure pas le repertoire de travail.
```git
git reset id_commit
```
et ensuite pour force le remote à se mettre à jour par rapport à notre repertoire de travail
```git
git push --force origin master
```
ou 
```git
git push --force origin main
```
**à évidement ne jamais faire car ca modifie l'historique des collaborateurs!**

## Les branches et merge
la branche principale est ``main`` au lieu de ``master`` dans github! mais cela reste ``master`` dans git.

### git branch -b
pour créer une branche et changer la branche courante
```git
git branch -b new_branch
```
équivalent à
```git
git branch new_branch
git checkout new_branch
```

on utilise la commande suivante la première fois pour push une branch dans le remote
```git
git push --set-upstream origin new_branch
```


### git checkout
permet de changer de branche et de revenir en arrière.

on peut obtenir id d'un commit via ``git log``
cela permet de consulter le passé
```git
git checkout id_commit
```

permet de restaurer ``file`` à l'état ``id_commit``
```git
git checkout id_commit file
```

changer de branche
```git
git checkout new_branch
```

### git merge
il faut être dans la branche master pour la fusionner avec une autre branche.

à partir de master, permet de fusionner une branche avec master et de la supprimer ensuite:
```git
git merge new_branch
git branch -d new_branch
```

#### fast forward
le fast forward permet de fusionner deux branches lorsque le master n'a pas commit par rapport à la branche. on ajoute les  commits de la branche au master! on peut le désactiver lors d'un merge avec
```git
git merge --no-ff new_branch
```

#### 3-way merge
lorsque les deux branches ont commit, on créer un nouveau commit pour rattacher les deux branches.


## L'historique
### amend
on peut modifier le dernier commit si on a oublié certaines modifications. cette commande ajoute la scène courante dans le commit précédant. ne fonctionne pas après un push?
```git
git commit --amend
```

### rebase
la commande ``rebase`` permet de déplacer une branche à la fin d'une autre. ca permet de forcer un ``fast forward`` plutôt qu'un ``3 way merge``. par contre on devra résoudre des éventuelles conflits pendant l'opération ``rebase``. donc c'est surtout pour avoir un historique "linéaire" lisible.

déplace ``new_branch`` à la fin du ``main`` et effectue un ``fast forward``
```git
git checkout new_branch
git rebase main
git checkout main
git merge feature
```
#### rebase -i
on peut utiliser le paramètre ``-i`` pour indiquer de quelle manière est faite le rebase (par exemple utiliser un seul commit). on peut ainsi fusionner plusieurs commit en un seul!

modifie les 3 dernier commits de la branche courante
```
git rebase -i HEAD~3
```
https://git-scm.com/docs/git-rebase#_interactive_mode

**ne pas faire une modification de l'historique lorsqu'elle est publié via un push!** c'est seulement en local sinon ca devient compliqué pour les collaborateurs car ca modifie l'adresses des commits.

<!--## Pull request
#### fork
to do
### pull request
to do-->

## Git flow
une méthodologie de travail avec git:
https://www.atlassian.com/fr/git/tutorials/comparing-workflows/gitflow-workflow

## Questions et réponses
### changer le nom d'un commit
https://docs.github.com/en/free-pro-team@latest/github/committing-changes-to-your-project/changing-a-commit-message

### suppression des éléments de l'indexage
```git
git rm --cached
```

### retour à l'avant dernier commit et restaurer le remote github
https://stackoverflow.com/a/6459166

### peut-on partager un dossier .git
https://stackoverflow.com/questions/52313545/is-it-secure-to-publish-my-git-directory-for-debugging

### ajouter un repertoire git dans un repo git
on a un avertissement si on ajoute un dossier git via la commande ``git add``. ce repertoire ne pourra pas être lu dans github! une petite solution pour régler ce problème:
https://stackoverflow.com/a/47031933


> Written with [StackEdit](https://stackedit.io/).
