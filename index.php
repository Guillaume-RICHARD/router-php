<?php

// gestion des erreurs
ini_set('display_errors','on');
error_reporting(E_ALL);

// on appel l'autoloading
require "vendor/autoload.php";

// on créé un objet $router
$router = new App\Router\Router($_GET['url']);

// exemple de route créé par le router
$router->get("/", function() { echo "Bonjour"; });
$router->get("/posts", function() { echo "Tous les articles"; });

$router->get(
	"/posts/:slug-:id",
	function($slug, $id) use ($router) {
		echo $router->url('post.show', ['id' => 1, 'slug' => 'salut-les-gens']);
	},
	'post.show'
)->with('slug', '[a-z\-0-9]+')->with('id', '[0-9]+');

// $router->get("/posts/:id", function($id) { echo "Afficher l'article ".$id; });
$router->get("/posts/:id", "Posts#show");
$router->post("/posts/:id", function($id) { echo "Poster pour l'article ".$id; });

// on démarre l'application
$router->run();
