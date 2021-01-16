<?php

require 'application/functions/parseDate.php';
require 'application/functions/installLimtitText.php';

/* Возвращает объект карточки рецепта */
function getRecipeCard($data) {

	echo '
		<a href="/recipe/' . $data["link"] . '">
			<div class="card recipes__card">
				<div class="card__img-block">
					<img src="/public/img/recipe-img/1.jpg" alt="recipe images" class="card__img">
				</div>
				<div class="card__text">
					<div class="cart__text-block">
						<h2 class="card__title">' . $data["title"] . '</h2>
						<p class="card__description">' . installLimtitText($data["text"]) . '</p>
					</div>
					<div class="card__other">
						<span class="card__date">' . parseDate($data["date"]) . '</span>
						<div class="separator card__separator"></div>
						<div class="card__icon-block">
							<div class="card__icon">
								<img src="/public/img/like-icon.svg" alt="like icon" class="card__icon-img">
								<span class="card__like-count">' . $data["like_count"] . '</span>
							</div>
							<div class="card__icon">
								<img src="/public/img/comment-icon.svg" alt="like icon" class="card__icon-img">
								<span class="card__like-count">' . $data["comment_count"] . '</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	';

}
