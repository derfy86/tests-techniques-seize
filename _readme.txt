Bonjour,

Ce petit exercice consiste à évaluer vos compétences de développeur Full-Stack.
Le but est de réaliser la soumission d'un formulaire et d'en afficher la réponse sans rechargement.


----------------------
Prérequis :

- Pour réaliser cet exercice, vous aurez besoin a minima d'un environnement Apache (tel que WAMP, MAMP ou autre de votre choix).


----------------------
Structure des fichiers :

- index.php : Fichier contenant la page affichée sur le navigateur
- templates/form.php : Fichier contenant le contenu du formulaire
- templates/result.php : Fichier contenant le contenu de la réponse
- inc/functions.php : Fichier contenant les fonctions de l'excercice
- inc/process-form.php : Fichier qui devra contenir le traitement PHP utilisé dans la requête AJAX
- assets/styles.css : Fichier de styles CSS
- assets/scripts.js : Fichier de scripts JS


----------------------
Partie Back :

Il faut donc réaliser une soumission asynchrone du formulaire grâce à un traitement AJAX, alliant ainsi Javascript et PHP.
Pour cela, nous vous laissons libre d'utiliser la fonction Javascript fetch(), la fonction jQuery ajax() ou une autre fonction que vous maîtrisez.

Le principe est donc de :
- Capter la soumission du formulaire en Javascript
- Appeler le fichier PHP "inc/process-form.php" pour réaliser le traitement
- Vérifier que tous les champs sont correctement complétés (optionnel)
- Renvoyer la réponse dûment complétée en remplaçant les champs #...# du fichier "templates/result.php" par une intégration dynamique des champs saisis
- Afficher la réponse sur la page à la place du formulaire


----------------------
Partie Front :

Le but du jeu est d'intégrer les maquettes fournies dans le dossier /jpg, pour avoir un formulaire fonctionnel et beau :-).
Pour cela, le fichier /assets/styles.css est à votre disposition, pré-rempli avec une grille simplifiée qui reprend le principe col-md de Bootstrap par exemple (libre à vous de vous en servir).
Vous pouvez bien évidemment utiliser un autre langage que le CSS (sachant que nous utilisons SCSS compilé avec GULP à l'agence).

Le principe est donc de :
- Implémenter le HTML en conformité avec les maquettes
- Intégrer le CSS
- Gérer la partie responsive du site (les maquettes sont volontairement non fournies)
- S'il vous reste du temps et que vous trouvez cela utile en terme d'expérience utilisateur, vous pouvez ajouter des animations où bon vous semble


----------------------
Le but du jeu n'est pas de passer une nuit sur cet exercice (faites comme Claude dans Koh Lanta, 2h30 et vous serez notre héros).
N'hésitez pas à joindre un petit fichier texte pour expliquer quelle a été votre démarche, vos points de blocage etc.

Bon courage :-)
