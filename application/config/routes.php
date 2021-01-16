<?php

use application\models\RecipeModel;

$routes = [

	'' => [
		'controller' => 'main',
		'action' => 'index'
	]

];

$recipe = new RecipeModel;
$linkArray = $recipe->getRecipesLinks();

foreach ($linkArray as $value) {
	$link = $value["link"];
	$routes["recipe/$link"] = [
		'controller' => 'recipe',
		'action' => 'index'
	];
}

return $routes;
