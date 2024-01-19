### initialiser le projet ###
Si le projet est dans la racine de /var/www/html :
     - Accéder au projet 
     - Mettre à jour les autoloaders:
       sudo composer dump-autoload
      -Installer PHPUnit en tant que dépendance de développement:
       composer require phpunit/phpunit --dev
     - Si cela ne fonctionne pas, effectuer le sinon

Sinon, il faut enlever le fichier composer.json et composer.lock :
  
  - Initialiser le projet: composer init
  - Mettre à jour les autoloaders : sudo composer dump-autoload
  - Installer PHPUnit en tant que dépendance de développement : composer require phpunit/phpunit --dev
  - Assurez-vous que les fichiers inclus dans votre projet sont correctement spécifiés dans la section autoload de votre composer.json sinon Changer tous les includes du projet si nécessaire.

Le sinon fonctionne à coup sûr

Puis changez le fichier 'config.exemple.json' en 'config.json' et saisissez vos informations pour la base de données.

pour le sql [ici](https://github.com/Adambizien/partiel_php_sql_NWS/blob/main/Database.sql)
