<?php

require 'application/views/elements/recipeCard.php';
require 'application/views/elements/emptyResult.php';

if (!$data[0]) {

	getEmptyBlock();

}
else {

	foreach ($data[0] as $value) {

		getRecipeCard($value);
		
	}

}



