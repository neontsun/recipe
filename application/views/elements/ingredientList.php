<?php

require 'application/views/elements/ingredient.php';

function getIngredientList($ingredients) {

	echo '<ul class="recipe-article__ingridient-list">';

		foreach ($ingredients as $ingredient) {
			
			echo '<li>';

				getIngredient($ingredient["ingredient"], $ingredient["weight"]);

			echo '</li>';

		}

		
	echo '</ul>';

}
