<?php

require 'application/views/elements/category.php';

function getCategoryList($categorys) {

	echo '<div class="recipe-article__category-list">';

		foreach ($categorys as $category) {
			
			getCategory($category["name"]);

		}

	echo '</div>';

}
