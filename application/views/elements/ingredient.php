<?php

function getIngredient($ingredient, $weight) {

	echo '
		<div class="recipe-article__ingridient-element">
			<div class="recipe-article__ingridient-name">'.$ingredient.'</div>
			<div class="recipe-article__ingridient-dott"></div>
			<div class="recipe-article__ingridient-weight">'.$weight.'</div>
		</div>
	';

}
