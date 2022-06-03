# Configuration IDE

## Marche à suivre

Voici la marche à suivre d’installation et de mise a jours des programmes que nous allons utiliser dans le cadre du projet web.

Dans ce projet nous utiliserons toujours les dernières mises à jours des applications installées.

## PhpStorm

**Mise à jour :**

*Si vous n’avez pas PhpStorm merci de le télécharger [ici](https://www.jetbrains.com/phpstorm/download/#section=windows).*

Ouvrir PhpStorm, se diriger sur l’onglet « File/Settings », chercher dans la barre de recherche « Updates » puis cliquer sur « Check for Updates ».

**Installation de l’interpréteur et de la version PHP :**

Je rappelle que dans chaque projet il est nécessaire d’avoir son interpréteur PHP activé.

Rendez-vous a nouveau dans « File/Settings » mais cette fois si dirigé vous sur l’onglet PHP. Définissez votre PHP langage level a 8.0 et activez votre CLI interpréter. 

S’il vous manque l’interpréteur téléchargez le [ici](https://www.php.net/downloads) et installez le a l’aide de la [documentation](https://moodle.cpnv.ch/moodle/pluginfile.php/78925/mod_resource/content/7/SetupPhpStorm%20V1.1.pdf) prévue à cet effet.

**Mise en place du Xdebug :**

Pour avoir simplement le xdebug dirigez-vous dans « Run/ Run » puis sélectionnez « formulaire.php »

## Git

**Installation :**

Si git n’est pas installer sur votre machine vous pouvez le télécharger [ici](https://git-scm.com/downloads), sélectionner votre system d’exploitation et prenez la dernière version 64 bit.

Contentez-vous simplement de cliquer sur suivant tout le long de l’installation.

Lors de vos premières commandes, git vous demandera une identification, contentez-vous d’exécuter à la lettre ce qu’il vous demande et identifié vous avec votre navigateur.

**Mise a jours :**

* Sur Windows: *git update-git-for-windows*

* Sur Linux: *sudo apt-get update* puis *sudo apt-get install git*

* Sur Mac: *brew update* puis *brew upgrade git*



## Doxygen	

**Installation :**

Rendez-vous sur [ce](https://www.doxygen.nl/download.html) lien, scrollez vers le bas jusqu’à trouver la rubrique « Source and Binaries ». Téléchargez l’installateur correspondant à l’OS de votre choix. 

Contentez-vous simplement de cliquer sur suivant tout le long de l’installation.

## Slack

**Installation :**

Contentez-vous simplement de télécharger l’application disponible [ici](https://slack.com/intl/fr-ch/). Si vous avez un linux ou un mac, ajouter juste un « /linux ou un /mac a l’url.

Vous allez néanmoins devoir créer un compte.

## Client SSH	

**Installation Windows :**

Tout d’abord, pressez la touche Windows + R, dans la fenêtre copier- coller cette commande : ms-settings:optionalfeatures. Une fenêtre s’ouvre ensuite, il va falloir y chercher SSH et l’installer.

Pour lancer le service, il va falloire aller dans l’application service et y chercher OpenSSH SSH Server, puis mettre le service en démarrage manuel (Où automatique).



Adam Sifate 03.06.22  basé sur le document Doc_Configuration_IDE
