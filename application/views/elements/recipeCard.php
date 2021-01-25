<?php

require 'application/functions/parseDate.php';

/* Возвращает объект карточки рецепта */
function getRecipeCard($data) {

	echo '<div class="card grid-item">';
		echo '<img src="/public/img/recipes-img/' . $data["image"]["link"] . '" alt="recipe image" class="card__img">';
			echo '<div class="card__data">';
				echo '<div class="card__category">';
					
					if (count($data["category"]) != 0) {

						$count = 0;
						foreach ($data["category"] as $value) {

							if ($count != 3) {

								echo '<div class="card__cat-elem">' . $value["name"] . '</div>';
								++$count;

							}
							else {

								echo '<div class="card__cat-more">...</div>';
								break;

							}

						}

					}

				echo '</div>';
				echo '<div class="card__title">' . $data["title"] . '</div>';
				echo '<div class="card__desc">' . $data["description"] . '</div>';
				echo '<div class="card__date">' . parseDate($data["date"]) . '</div>';
				echo '<div class="separator card__separator"></div>';
				echo '<div class="card__feedback">';
					echo '<div class="card__feedback-content">';
						echo '<div class="card__social-item">';
							echo '<div class="card__social-icon far fa-heart"></div>';
							echo '<div class="card__social-count">' . $data["like_count"] . '</div>';
						echo '</div>';
						echo '<div class="card__social-item">';
							echo '<div class="card__social-icon far fa-comment"></div>';
							echo '<div class="card__social-count">' . $data["comment_count"] . '</div>';
						echo '</div>';
					echo '</div>';
					echo '<a href="/recipe/' . $data["link"] . '" class="card__link">Подробнее</a>';
				echo '</div>';
			echo '</div>';
	echo '</div>';
	
}
