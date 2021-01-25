<?php require 'application/views/elements/recipeImg.php'; ?>
<?php require 'application/views/elements/ingredientList.php'; ?>
<?php require 'application/functions/parseIngredient.php'; ?>
<?php require 'application/functions/parseStepsText.php'; ?>
<?php require 'application/views/elements/recipeStepsList.php'; ?>
<?php require 'application/views/elements/categoryList.php'; ?>
<?php require 'application/views/elements/commentList.php'; ?>

<!-- Начало шапки страницы -->
<div class="section section_padding_vert head">
	<h1 class="head__text">Рецепт</h1>
	<div class="head__description">
		<a href="/" class="head__link">Главная</a>
		<div class="head__dott">·</div>
		<div class="head__recipe-title">

			<?= $data["title"]; ?>

		</div>
	</div>
</div>
<div class="separator"></div>
<!-- Конец шапки страницы -->

<div class="section section_padding_vert recipe-article">

	<div class="recipe-article__content">

		<!-- Начало блока названия рецепта -->
		<div class="section section_padding_vert section_padding_hor recipe-article__title">

			<?= $data["title"]; ?>

		</div>
		<!-- Конец блока названия рецепта -->

		<!-- Начало блока главного изображения рецепта -->
		<?php 
			$imgLink = array_shift($data["images"]);
			getRecipeImg($imgLink["link"]);
		?>
		<!-- Конец блока главного изображения рецепта -->

		<!-- Начало блока оценок и комментариев -->
		<div class="section section_padding_vert section_padding_hor recipe-article__feedback">
			<div class="recipe-article__feedback-element">
				<div class="recipe-article__feedback-icon far fa-heart"></div>
				<div class="recipe-article__feedback-count">

					<?= $data["like_count"]; ?>

				</div>
			</div>
		</div>
		<div class="recipe-article__separator">
			<div class="separator"></div>
		</div>
		<!-- Конец блока оценок и комментариев -->

		<!-- Начало блока времени приготовления -->
		<div class="section section_padding_vert section_padding_hor recipe-article__time-preparing">
			<div class="recipe-article__time-icon far fa-clock"></div>
			<div class="recipe-article__time-desc">
				<div class="recipe-article__time-desc-title">Приготовление</div>
				<div class="recipe-article__time-desc-value">

					<?= $data["time_cooking"]; ?>

				</div>
			</div>
		</div>
		<div class="recipe-article__separator">
			<div class="separator"></div>
		</div>
		<!-- Конец блока времени приготовления -->

		<!-- Начало блока описания рецепта -->
		<div class="section section_padding_vert section_padding_hor recipe-article__desc">
			<div class="recipe-article__desc-title">Описание</div>
			<div class="recipe-article__desc-text">

				<?= $data["description"]; ?>

			</div>
		</div>
		<!-- Конец блока описания рецепта -->

		<!-- Начало блока ингредиентов рецепта -->
		<div class="section section_padding_vert section_padding_hor recipe-article__ingridient">
			<div class="recipe-article__ingridient-title">Ингредиенты</div>

			<?
				$ingredientList = parseIngredient($data["ingredients"]);
				getIngredientList($ingredientList);
			?>

		</div>
		<!-- Конец блока ингредиентов рецепта -->

		<!-- Блок начала шагов рецепта -->
		<div class="section section_padding_vert section_padding_hor recipe-article__begin-block">
			<div class="recipe-article__begin-text">Пошаговый рецепт с фото</div>
		</div>
		<!-- Конец блока начала рецептов -->

		<!-- Начало блока шагов рецепта -->
		<?php 
			$images = $data["images"];
			$text = parseStepsText($data["text"]);
			getRecipeStepsList($images, $text);
		?>
		<!-- Конец блока шагов рецепта -->

		<!-- Начало блока категорий рецепта -->
		<div class="section section_padding_vert section_padding_hor recipe-article__category">
			<div class="recipe-article__category-title">Категории рецепта</div>

			<?php
				$categorys = $data["categorys"];
				getCategoryList($categorys);
			?>

		</div>
		<!-- Конец блока категорий рецепта -->

	</div>

	<!-- Начало блока комментариев -->
	<div class="recipe-article__comments">

		<div class="recipe-article__comments-block">
			<div class="recipe-article__comments-count">

				<?php 
					$commentCount = $data["comment_count"];
					if ($commentCount == 0)
						echo 'Комментариев нет';
					else
						echo 'Комментарии — ' . $commentCount;
				?>

			</div>
			<form id="ajax-comment-form" action="" method="POST" class="recipe-article__comments-write">
				<div class="recipe-article__comments-write-block">
					<div class="recipe-article__comments-write-icon far fa-comment"></div>
					<div class="recipe-article__comments-fields">
						<input name="comment-login" type="text" placeholder="Email" class="recipe-article__comments-write-login">
						<textarea name="comment-message" placeholder="Текст вашего сообщения..."
							class="recipe-article__comments-write-message"></textarea>
					</div>
				</div>
				<div class="recipe-article__comments-write-btn-block">
					<div class="recipe-article__comments-error"></div>
					<button class="recipe-article__comments-write-btn">Отправить</button>
				</div>
			</form>
		</div>

		<?php
			$comments = $data["comments"];
			getCommentList($comments);
		?>

	</div>
	<!-- Конец блока комментариев -->

</div>
