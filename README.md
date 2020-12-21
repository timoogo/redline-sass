# redline-sass
Basé sur le projet effectué lors des semaines de POO. J'ai juste intégré ce que nous avions fait avec mon groupe dans mon projet, De plus, j'ai ajouté une couche de SASS que nous n'avions pas effectué lors du rendu de groupe.

## Configuration
Il faut créer un ficher `_config.php` (dans le dossier `Core/Config/`) dans lequel nous mettons les paramètres de la connexion à la base de données dans le dossier `Core/`
### Template de _config.php
```php

<?php 
$dbConfig =[
  "host"   => "localhost",
  "dbname" =>"redline",
  "dbuser" => "[NOM DU L'UTILISATEUR]", //souvent root
  "dbpass" => "[MOT DE PASSE DE L'UTILISATEUR]" ,//souvent root
];
?>

```

Je me tiens à votre disposition si besoin.
