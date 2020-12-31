# Les commandes bash
## L'éditeur Vim
cheatsheet : https://devhints.io/vim

Le tutoriel de vim (partie 1 suffisant pour comprendre les bases)
```shell
vimtutor
```
create a file
```shell
vim text.txt = create/open text.txt with vim
```
cheatsheet:
```shell
i = insert
a = append
x = delete
:q! = quit and abort
:q = quit
:wq = save and quit
:w = save
```
## Nano
éditeur de text nano 
```shell
nano file.txt
```
## shortcut terminal
<kbd>Command</kbd> + <kbd>N</kbd> = open new terminal
<kbd>Command</kbd> + <kbd>T</kbd> = open new tab
<kbd>Tab</kbd> = autocomplete name folder/file (sensitive case)

## Historique
L'historique des évolutions des langages shell. **zsh** reprend les meilleures idées de **bash**, **ksh** et **tcsh** 
![historique de l'évolution des shells](https://user.oc-static.com/files/160001_161000/160272.png)

## Comandes
https://fr.wikibooks.org/wiki/Programmation_Bash/Commandes_shell
https://doc.ubuntu-fr.org/tutoriel/console_ligne_de_commande
### - cd (Change Directory)
change directory au dossier de l'utilisateur de la session
```
cd ~
```
or
```
cd
```
change directory à la root de l'ordinateur
```
cd /
```
### - ls (LiSte)
le manuel d'information de la commande
```
man ls
```
affiche les fichiers cachés
```
ls -a
```
affiche le autorisations d'écriture (admin, utilisateur, invité)
**d** = directory, **-** = file

```
ls -l
>>> d|rwxrw----@
```
un repertoire ou l'admin peut tout faire, le staff peut lire et everyone ne peut rien faire

**@** = attributs étendus (informations supplémentaires) (auteurs, autres)

affiche tous de manière récursive depuis le chemin courant
```
ls -R
```
### - mkdir (MaKe DIRectory)
https://phoenixnap.com/kb/create-directory-linux-mkdir-command#:~:text=You%20can%20create%20directories%20one,names%2C%20separated%20by%20a%20comma.

création de dossier
```shell
mkdir {test1,test2,test3}
```

```shell
mkdir -p folder1/folder2
```

pour créer un dossier et s'y déplacer
```
mkdir foo && cd "$_"
```

### - rm (ReMove)
```shell
sudo rm -Rf foldername
```

à ne jamais faire car supprime tous de manière récursive forcée à partir de la racine avec les droits
```shell
sudo rm -Rf /
```
### - cat (ConcAtenaTe)
pour afficher dans le terminal le fichier
```shell
cat main.py
```

### - mv (MoVe)
pour déplacer, renommer un fichier ou les deux en même temps
```
mv file.css style.css
mv Molengeek ./desktop
mv file.css ./desktop/style.css
```
### -chmod (CHange MODe)
donne à l'utilisateur le droit de lecture et d'execution
```
chmod u+r+x filename.sh
```

## Script shell
cheatsheet = https://devhints.io/bash
### Execution
**.sh** pour l'extension d'un script

indique d'utiliser le bash pour le script
```shell
#!/bin/bash
```

execution du script
```
./script.sh param1 param2 param3
```
Les paramètres :
-   `$#` : contient le nombre de paramètres ;
-   `$0` : contient le nom du script exécuté (ici`./script.sh`);  
-   `$1` : contient le premier paramètre ;
-   `$2` : contient le second paramètre ;
-   … ;
-   `$n` : contient le ne paramètre.

déplacer le script au dossier suivant sur mac pour l'exécuter depuis n'importe quelle position courante
```
/usr/local/bin
```
### les variables
pas d'espaces entre le **=**!
```shell
ma_variable="valeur"
```
la variable **environnement** 
```shell
env
```

### eval
utiliser `` `command` `` pour évaluer la commande

```
message=`pwd`
echo "Vous êtes dans le dossier $message"
```
### read
pour lire les input de l'utilisateur
(peut t'on évaluer un input?)
```
read -p 'Entrez votre nom : ' nom
echo "Bonjour $nom !"
```
**-p** affiche le premier argument dans le terminal

### les tableaux
pour définir un tableau de taille 3
```shell
tableau=('valeur0' 'valeur1' 'valeur2')
```
affiche tout le tableau
```shell
echo ${tableau[*]}
```

### getopts
La commande interne **getopts** permet à un script d'analyser les options passées en argument.
https://www.quennec.fr/book/export/html/341
mais n'est pas adapté pour les `option long`

> Written with [StackEdit](https://stackedit.io/).
