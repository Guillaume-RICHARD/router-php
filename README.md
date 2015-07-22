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

Il faut aussi utiliser Composer pour la gestion de l'autoloading. il faut donc faire :
```
composer init (pour l'initialiser)
composer dump-autoload (pour mettre à jour)
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


- Exemple 3
```php
$router->post("/posts/:id", function($id) { echo "Poster pour l'article ".$id; });
```

Permet d'afficher un texte spécifique pour un posts, à l'URL "http://[YOUR-URL]/posts/[ID]".
Notez le paramètre $id dans la fonction.


- Exemple 4
```php
$router->get("/posts/:id", "Posts#show");
```

Fait la même chose que l'exemple 3, mais la fonction se trouve dans un controller.
"Posts#show" signifie que la méthode "get" appelle la fonction "show" dans le controller "PostsController.php".


- Exemple 5
```php
$router->get(
	"/posts/:slug-:id",
	function($slug, $id) use ($router) {
		echo "slug : $slug, id : $id";
	},
	'post.show'
)->with('slug', '[a-z\-0-9]+')->with('id', '[0-9]+');
```

Permet la création d'une URL plus complexe avec une chaîne de caractère, et un id.
Pour l'exemple suivant : http://[YOUR-URL]/posts/bonjour-175, la fonction retourne "slug : bonjour, id : 175".
Remarquer l'utilisation de la fonction "with" qui permet de différencier les parties de l'URL ($slug et $id) avec des expressions régulières.


### Documentation

See [DOCUMENTATION](https://github.com/Guillaume-RICHARD/router-php)

### License

Basé sur la licence "CC BY". ![Image of License](https://licensebuttons.net/l/by/3.0/88x31.png)

See [RÉSUMÉ](http://creativecommons.org/licenses/by/4.0/)

See [CODE JURIDIQUE](http://creativecommons.org/licenses/by/4.0/legalcode)
