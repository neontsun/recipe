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

foreach ($recipesLink as $value) {

	$link = $value["link"];
	$routes["recipe/$link"] = [
		'controller' => 'recipe',
		'action' => 'index'
	];
	
}

return $routes;
