<?php

function parseIngredient(string $ingredients) : array {

	$ingredientArray = [];

	foreach (explode("&", $ingredients) as $ingredient) {
		
		$temp = explode("|", $ingredient);
		$ingredientArray[] = [
			"ingredient" => $temp[0],
			"weight" => $temp[1],
		];

	}

	return $ingredientArray;

}
