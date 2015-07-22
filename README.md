# Router-php

Création d'un router en PHP5.

Ce router vous permet de créer rapidement des applications web puissantes et des API.
Il est facile d'utilisation pour les débutants et les professionnels.
Son utilisation est simple et intuitive.

# Getting Started

### Installation

Utilisation de la commande suivante, dans le dossier courant du projet :
```
git clone https://github.com/Guillaume-RICHARD/router-php.git
```

### Usage

Dans le fichier index.php, voici le code basique

```php
<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

require "vendor/autoload.php";

$router = new App\Router\Router($_GET['url']);

$router->get("/", function() { echo "Bonjour"; });

$router->run();
```

Examples de création de route :

- Exemple 1
```php
$router->get("/", function() { echo "Bonjour"; });
```

Permet d'afficher "Bonjour", sur la page d'accueil.


- Exemple 2
```php
$router->get("/posts", function() { echo "Tous les articles"; });
```

Permet d'afficher "Tous les articles", à l'URL "http://[YOUR-URL]/posts".



### Documentation

See [DOCUMENTATION](https://github.com/Guillaume-RICHARD/router-php)

### License

![Image of License](https://licensebuttons.net/l/by/3.0/88x31.png) Basé sur la licence "CC BY".
See [DOCUMENTATION](http://creativecommons.org/licenses/by/4.0/)
See [DOCUMENTATION](http://creativecommons.org/licenses/by/4.0/legalcode)
