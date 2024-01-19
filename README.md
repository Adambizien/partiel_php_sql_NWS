### initialiser le projet ###
(pour installer composer : 
    sudo apt install composer)


il faut mettre le projet dans la racine (var/www/html)  :
  - allez dans le projet.
  - enlever le fichier composer.json et composer.lock
  - Initialiser le projet: "composer init" (que des entrer si il vous demande de entrer n vous le faite )
  - "sudo composer install" (que des yes)
  - Mettre à jour les autoloaders : "sudo composer dump-autoload" (que des yes)
  - Installer PHPUnit en tant que dépendance de développement : "sudo composer require phpunit/phpunit --dev" (que des yes)
  - Assurez-vous que les fichiers inclus dans votre projet sont correctement spécifiés dans la section autoload de votre composer.json sinon Changer tous les includes du projet  (changer 'use Adam\PartielPhpSqlNws' par ce qu'il vous donne).

Puis changez le fichier 'config.exemple.json' en 'config.json' et saisissez vos informations pour la base de données.

pour le sql [ici](https://github.com/Adambizien/partiel_php_sql_NWS/blob/main/Database.sql)
