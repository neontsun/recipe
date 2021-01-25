<?php

function getRecipeSteps($number, $img, $text) {

	echo '
		<div class="section section_padding_vert section_padding_hor recipe-article__step">
			<div class="recipe-article__step-count"># Шаг '.$number.'</div>
			<img src="/public/img/recipes-img/'.$img.'" alt="step image"
			class="recipe-article__step-img">
			<div class="recipe-article__step-desc">'.$text.'</div>
		</div>
	';

}
