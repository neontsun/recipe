<?php

use application\models\RecipeModel;

$routes = [

	'' => [
		'controller' => 'main',
		'action' => 'index'
	]

];

$recipeModel = new RecipeModel;
$recipesLink = $recipeModel->getRecipesLinks();

foreach ($recipesLink as $link) {

	$routes['recipe/'.$link["link"].''] = [
		'controller' => 'recipe',
		'action' => 'index'
	];
	
}

return $routes;
