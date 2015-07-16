<?php

// inspiration : http://www.grafikart.fr/tutoriels/php/router-628

// gestion des erreurs
ini_set('display_errors','on');
error_reporting(E_ALL);

require "vendor/autoload.php";

$router = new App\Router\Router($_GET['url']);

$router->get("/", function() { echo "Bonjour"; });
$router->get("/posts", function() { echo "Tous les articles"; });

$router->get("/posts/:slug-:id", function($slug, $id) {
	echo "Article $slug / $id";
})->with('slug', '[a-z\-0-9]+')->with('id', '[0-9]+');

$router->get("/posts/:id", function($id) { echo "Afficher l'article ".$id; });
$router->post("/posts/:id", function($id) { echo "Poster pour l'article ".$id; });

$router->run();
