# Educapp-web1.0
Par rapport à EDUCAPP:  EDUCAPP est une application pratique destinée au centres de formations qui veulent digitaliser et numériser leurs méthodes de travails
## Technologies
***
Les technologies utilisées pour developper EDUCAPP:
* [Symfony](https://symfony.com): Version 4.4.*
* [PHPStorm](https://www.jetbrains.com/fr-fr/phpstorm): Version 2021.2.2
* [MyPhpAdmin](https://www.phpmyadmin.net): Version 3.2.6
* [WAMP](https://www.phpmyadmin.net): Version 3.2.6	
## FAQs
***
Les questions les plus posées: 
1. **Quelles sont les technologies utilisées pour la création de votre application**
* Symfony4 : Symfony est un ensemble de composants PHP ainsi qu'un framework MVC libre écrit en PHP. Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d'un site web.
* PhpStorm : PhpStorm est un éditeur pour PHP1, HTML, CSS et JavaScript, édité par JetBrains.
Il permet d'éditer du code PHP pour les versions allant de la 5.3 à la 8
* PhpMyAdmin: phpMyAdmin (PMA) est une application Web de gestion pour les systèmes de gestion de base de données MySQL et MariaDB, réalisée principalement en PHP et distribuée sous licence GNU GPL.
*WAMP : WampServer (anciennement WAMP5) est une plateforme de développement Web de type WAMP, permettant de faire fonctionner localement (sans avoir à se connecter à un serveur externe) des scripts PHP.
WampServer n'est pas en soi un logiciel, mais un environnement comprenant trois serveurs (Apache, MySQL et MariaDB), un interpréteur de script (PHP), ainsi que phpMyAdmin pour l'administration Web des bases MySQL.

2. __Pourquoi GitHub?__ 
GitHub permet aux développeurs de : stocker et de partager, publiquement ou non, le code qu’ils créent. La plate-forme accueille ainsi, dit-elle, plus de 80 millions de projets, qu’il s’agisse de logiciels, de sites Web, d’applications pour mobile ou tous autres types de programme informatique — et ce quel que soit le langage de programmation utilisé.

## Installation 
***
Pour installer EDUCAPP sur vos machines il vous suffira de: 
```
*Cloner le projet
$ https://github.com/ChaymaBoualy/Educapp-web1.0.git
*Injecter les dépendances 
$ cd ../path/to/the/file
$ composer install
$ composer require symfony/web-server-bundle
*Créer la base de données 
$php bin/console doctrine:database:create
$php bin/console make:migration
$php bin/console doctrine:migrations:migrate
