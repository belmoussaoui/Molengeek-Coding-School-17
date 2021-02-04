# Les conditions - Exercice 2
## 1. Les réponses booléenes (part 1)
À l'aide de deux prompts, récupérez deux nombres et stockez les dans des variables.
- Vérifiez si les valeurs sont égales et affichez la réponse dans une alert.
- L'alert doit renvoyer une phrase contenant les variables et la réponse.

> *Par exemple :*
>
> Le nombre ``x`` et le nombre ``y`` sont-ils égaux ? : ``réponse``

## 2. Les réponses booléennes (part 2)
À l'aide de deux prompts, récupérez deux nombres et stockez les dans des variables.
- Vérifiez si la première valeur est plus petite que la seconde ; affichez la réponse dans une alert.
- L'alert doit renvoyer une phrase contenant les variables et la réponse.

> *Par exemple :* 
>
> Le nombre ``x`` est-il plus petit que le nombre ``y`` ? : ``réponse``

## 3. Les réponses booléenes (part 3)
À l'aide de trois prompts, récupérez trois nombres et stockez les dans des variables.
- Additionnez les deux premières valeurs et vérifiez si la somme est plus grande que la troisième valeur ; affichez la réponse dans une alert.
- L'alert doit renvoyer une phrase contenant les variables et la réponse.

> *Par exemple :*
> 
>   La somme de ``x`` + ``y`` est-elle plus grande que le ``z`` ? : ``réponse``

## 4. Strings et calculs
À l'aide de deux prompts, récupérez une phrase de l'utilisateur ainsi qu'une estimation de l'utilisateur du nombre de caractères dans cette phrase.
- Affichez ensuite, dans une alert, si la prédiction était correcte.
- Dans le cas contraire, indiquez la différence par rapport à la bonne réponse.

> *Par exemple :*
> - *Entrez une phrase :*
> - "Nathan est le meilleur coach."
> - *Combien de caractères y'a-t-il dans cette phrase ?*
> - "42"
> - *Faux, vous êtes à 13 caractères de la bonne réponse.*

## 5. Des maths sans Maths
À l'aide de deux prompts, récupérez deux nombres et stockez les dans des variables.

- **Sans utiliser la méthode Math.abs()**, affichez une alert indiquant la valeur absolue de la différence des deux nombres.
- L'alert doit contenir les variables et la réponse.

> *Par exemple :*
>
> |9-15| = 6

## 6. Qui ~~a la plus grosse~~ est le plus grand ?
À l'aide de trois prompts, récupérez trois nombres et stockez les dans des variables.
- Affichez dans une alert quel est le plus grand des 3 nombres.
- L'alert doit renvoyer une phrase contenant les variables et la réponse.

> *Par exemple :*
>
> Entre `x`, `y` et `z`, `réponse` est le plus grand.

## 7. Respect des consignes
À l'aide d'un prompt, récupérez le prénom de l'utilisateur et vérifiez qu'il a bien indiqué quelque chose.
Si l'utilisateur n'a rien rentré, affichez un nouveau prompt signalant le problème et redemandant le prénom.
> ex : *Veuillez vous assurer de bien remplir le champs ci-dessous. Quel est votre prénom ?*

Sinon, saluez l'utilisateur (en utilisant son prénom) dans une alert.

**Il est normal ne ne reposer la question qu'une seule fois.**

## 8. Abonnez-vous
- Trouvez un moyen (natif) qui n'accepte que des réponses par l'affirmative ou la negative.
- Utilisez ce moyen en proposant à l'utilisateur de s'abonner.
  - Si l'utilisateur accepte, renvoyez lui un prompt demandant quelle formule elle souhaite, Luxe ou Normal, puis le féliciter de s'être abonné à la dite formule dans une alert.
  > Par exemple : 
  > - Si c'est Luxe : *Félicitation pour votre abonnement à la formule Luxe !*
  > - Si c'est Normal : *Merci pour votre abonnement.*
  - Si l'utilisateur ne répond rien, demandez lui si il est certain de la même manière qu'auparavant (oui/non).
    - Si la réponse est "oui", affichez lui votre déception dans une alert.
    - Si la réponse est "non", reproposez lui le choix entre "Luxe" et "Normal"

## 9. Questions pour un codeur
Dans cet exercice il vous faudra préparer un mini quizz.
- Créer 2 variables contenant chacune un prompt posant une question.
- Créer 2 variables contenant la réponses à chacune de ces questions.
  - Si l'utilisateur ne répond correctement à aucune question, affichez une alert pour lui dire qu'il a échoué
  - Si l'utilisateur répond correctement à une des deux questions alors dites lui qu'il y est presque et montrez lui sur quelle question il s'est trompé.
  - Si l'utilisateur répond correctement à toutes les questions, félicitez le !

**Pensez à utiliser des méthodes de string dans la comparaison des réponses !**

## 10. C'est moi qui dit qui qui entre et qui qui entre pas
À l'aide d'un prompt, demandez l'âge de l'utilisateur (pour une réservation au cinéma. Selon l'âge donné, affihez l'un des messages suivant dans une alert :
- Si la personne est majeure (plus de 18) ➡ "vous êtes majeur, vous pouvez réserver." 
- Si la personne est mineure (moins de 18) ➡ "vous êtes mineur, revenez plus tard."

Ajoutons quelques conditions supplémentaires :
- Si la réponse est moins de 0 ➡ "Revenez quand vous serez né !"
- Si la personne passe tout juste (pile 18) ➡ "Réservez mais attention, c'est tout juste et ce film peut être choquant !"
- Si la personne n'entre pas un âge ➡ "Vu que vous ne savez pas lire une instruction, je présume que vous n'avez pas l'âge."
> ``⚠`` L'ordre de ces conditions a de l'importance ! ``⚠``

### Bonus 1 :
Même chose sauf que l'utilisateur entre son année de naissance. Vous devez calculez son âge en fonction de l'année actuelle.

### Bonus 2 :
On oublie l'année mais le programme doit fonctionner que l'utilisateur entre son âge sous le format ``24`` ou ``24ans`` ou même ``24 ans``.

## 11. Mais oui, c'est ~~clair~~ Logique (opérateus logiques)
À l'aide de trois prompts (ou autre solution déjà vue), vous allez poser trois questions et en garder les réponses dans des variables.
- "Voulez-vous partir en vacances ?"
- "Est-ce que vous êtes riche ?"
- "Est-ce que vous avez un chat ?"

> Stocker ``true``/``false`` dans les variables est une bonne façon de réaliser cet exercice.

Ensuite, vous devrez afficher une alert correspondant à la bonne combinaison de réponses :
> ``⚠`` Tout ne se passe pas en même temps, plusieurs alert peuvent parfois être affichées ``⚠``
- Si la personne ne veut pas partir en vacances ➡ "Pas de problème, ne partez pas en vacances."
  > Utilisez l'opérateur ``!``
- Si la personne n'est pas riche ou qu'elle a un chat ➡ "Même si vous le vouliez, vous ne pouriez pas partir..."
  > Utilisez l'opérateur ``!`` ainsi que l'opérateur ``||``
- Si la personne est riche et n'a pas de chat ➡ "Vous pourriez partir en vacance si vous le vouliez." 
  > Utilisez ``&&`` et ``!``
- Si la personne est riche, n'a pas de chat et veut partir en vacances ➡ "Tout est parfait, partez en vacance !"
  > Utilisez ``&&`` et ``!``
- Même chose que le point précédent, mais seulement avec ``||`` et ``!``