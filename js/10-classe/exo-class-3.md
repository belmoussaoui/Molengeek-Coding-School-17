Dans cet exercice tu devras créer :
### - Trois boss(Sauron,Chronos,Lilith). 
 Chaque boss poss�dera les propri�t�s suivantes :
>* Un nom;
>* Un nombre de points de vie;
>* Un nombre de points d'attaque.
#### A Savoir sur les boss :
>* une fois le boss � 20% de ses points de vie, il posera � tes personnages (l'utilisateur) une �nigme (choisie al�atoirement entre minimum 3 �nigmes) � laquelle ils devront r�pondre en 3 essais au maximum, s'ils �chouent, il mourront, sinon ils vaincront le boss.
### - Trois h�ros : Un mage, Un guerrier, Un archer.
Avec les propri�t�s et actions suivantes :
### Le guerrier 
- Propri�t�s :
  >* nom
  >* points de vie
  >* points d'attaque
  >* point de rage : 0
- Actions de posture :
  >* defense
  >* attaque
  #### A Savoir sur le guerrier 
  >* Tous les tours le guerrier gagne 1 point de rage au bout de 4 points ,le guerrier gagne 25% ( * 1.25 ) d'attaque suppl�mentaire durant 1 tours puis retombe � 0 de rage et perd ce bonus.
### Le mage 
- Propri�t�s :
  >* nom
  >* points de vie
  >* points d'attaque
  >* point de mana : chiffre qui sera al�atoirement impos� entre les suivants 7 , 9 ou 11.
- Actions :
  >* defense
  >* attaque
  #### A Savoir sur le mage
  >* Les attaques du mage lui coute 2 points quand il n'a plus assez de point de mana pour attaquer,il passe 1 tour sans attaquer et il r�cup�re 7 points de mana
### L'archer 
- Propri�t�s :
  >* nom;
  >* points de vie
  >* points d'attaque
  >* nombre de fl�ches : chiffre qui sera al�atoirement impos� entre  7, 8 , 9 ,10 ,11.
- Actions :
  >* defense
  >* attaque
  #### A Savoir sur l'archer
  >* les attaques de l'archer consomme deux fl�ches par tour et r�cup�re une fl�che chaque tour.Quand il n'a plus de fl�ches il passe un tour et r�cup�re 6 fl�ches.
### Les actions de posture : 
  #### Defense :
  >* Diminue de moiti�( * 0.5 ) ses d�gats d'attaque mais augmente de deux fois et demi ses points de vie ( * 2.5 ). 
  >* Augmente de deux les chances d'�tre attaqu� par le boss
  #### Attaque
  >* Augmente de deux cinqui�me ( * 1.4 ) ses d�gats d'attaque mais diminue d'un quart ses points de vie ( * 0.75 )
## A Savoir en g�n�ral : 
>* Un boss est choisi al�atoirement parmis les trois, c'est vous qui aurez au pr�alable choisis ses caract�ristiques
>* Vous attribuez des valeurs aux propri�t�s des boss.
>* L'utilisateur choisi le nom de chaque h�ros
>* Vous devez fixer un total de point de vies et de points d'attaques que l'utilisateur lui devra distribuer entre ses h�ros.
>* L'utilisateur pourra choisir une posture 'attaque' ou 'd�fense' ou le mode 'normal' == rien du tout.Avant le d�but du combat.
>* Chaque tour les trois personnages attaque une fois le boss.
>* Chaque tour le boss attaque au hasard un des personnages
## Bonus :
- Pour l'�nigme, la r�ponse de l'utilisateur devra �tre mise en minuscule et les �ventuels espace supprim�s (exemple : "Un Marron" => "unmarron"). Il faudra aussi trouver une m�thode qui permet de v�rifier si la bonne r�ponse est contenue dans la r�ponse de l'utilisateur (exemple : bonne r�ponse = "homme", r�ponse utilisateur = "les HoMmEs" => la r�ponse est bonne).
<!--stackedit_data:
eyJoaXN0b3J5IjpbMjAzMjYxMDU5MV19
-->
