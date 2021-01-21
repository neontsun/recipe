<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/public/img/shortcut-icon.ico">

	<title>
		<?php echo $title; ?>
	</title>

	<link rel="stylesheet" href="/public/css/normalize.css">
	<link rel="stylesheet" href="/public/css/main.css">

</head>

<body>

	<div class="wrapper">

		<div class="section section_padding_vert section_padding_hor header">
			<div class="header__logo">
				<img src="/public/img/logotype.png" alt="logotype" class="header__img">
			</div>
		</div>

		<div class="section section_padding_hor content">

			<div class="section section_padding_vert head">
				<h1 class="head__text">Рецепт</h1>
				<div class="head__description">
					<a href="/" class="head__link">Главная</a>
					<div class="head__dott">·</div>
					<div class="head__recipe-title">Название рецепта</div>
				</div>
			</div>

			<div class="separator"></div>

			<div class="section section_padding_vert recipe-article">

				<div class="recipe-article__content">

					<div class="section section_padding_vert section_padding_hor recipe-article__title">
						Название рецепта
					</div>

					<!-- $getRecipeImg; -->

					<div class="section section_padding_vert section_padding_hor recipe-article__feedback">
						<div class="recipe-article__feedback-element">
							<img src="/public/img/like-icon.svg" class="recipe-article__feedback-icon">
							<div class="recipe-article__feedback-count">7</div>
						</div>
						<div class="recipe-article__feedback-element">
							<img src="/public/img/comment-icon.svg" class="recipe-article__feedback-icon">
							<div class="recipe-article__feedback-count">7</div>
						</div>
					</div>

					<div class="recipe-article__separator">
						<div class="separator"></div>
					</div>

					<div class="section section_padding_vert section_padding_hor recipe-article__time-preparing">
						<img src="/public/img/time-icon.svg" class="recipe-article__time-icon">
						<div class="recipe-article__time-desc">
							<div class="recipe-article__time-desc-title">Приготовление</div>
							<div class="recipe-article__time-desc-value">1 час 30 минут</div>
						</div>
					</div>

					<div class="recipe-article__separator">
						<div class="separator"></div>
					</div>

					<div class="section section_padding_vert section_padding_hor recipe-article__desc">
						<div class="recipe-article__desc-title">Описание</div>
						<div class="recipe-article__desc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
							nostrum molestiae voluptatibus. Nisi nam sit error officiis laboriosam ducimus aliquid.</div>
					</div>

					<div class="section section_padding_vert section_padding_hor recipe-article__ingridient">
						<div class="recipe-article__ingridient-title">Ингредиенты</div>

						<!-- $ingredientList; -->

					</div>

					<div class="section section_padding_vert section_padding_hor recipe-article__begin-block">
						<div class="recipe-article__begin-text">Пошаговый рецепт с фото</div>
					</div>

					<!-- $recipeStepsList; -->

					<div class="section section_padding_vert section_padding_hor recipe-article__category">
						<div class="recipe-article__category-title">Категории рецепта</div>

						<!-- $categorys; -->

					</div>

				</div>

				<div class="recipe-article__comments">

					<div class="recipe-article__comments-block">
						<div class="recipe-article__comments-count">Комментариев нет</div>
						<form class="recipe-article__comments-write">
							<div class="recipe-article__comments-write-block">
								<img src="/public/img/time-icon.svg" class="recipe-article__comments-write-icon">
								<textarea placeholder="Текст вашего сообщения..."
									class="recipe-article__comments-write-input"></textarea>
							</div>
							<div class="recipe-article__comments-write-btn-block">
								<button class="recipe-article__comments-write-btn">Отправить</button>
							</div>
						</form>
					</div>

					<!-- $comment; -->

				</div>

			</div>

		</div>

	</div>

	<!-- <script src="/public/js/main.js"></script> -->

</body>

</html>
