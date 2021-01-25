<?php

require 'application/views/elements/recipeSteps.php';

function getRecipeStepsList($images, $text) {

	echo '<div class="recipe-article__steps">';
		
		$count = 0;
		for ($index = 0; $index < count($images); $index++) {

			getRecipeSteps(++$count, $images[$index]["link"], $text[$index]);

		}
	
	echo '</div>';

}
