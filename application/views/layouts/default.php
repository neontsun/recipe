<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/public/img/site-icon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php echo $title; ?>
	</title>

	<link rel="stylesheet" href="/public/css/normalize.css">
	<link rel="stylesheet" href="/public/css/style.css">

</head>

<body>

	<div class="wrapper">

		<div class="menu">
			<div class="menu__auth">
				<div class="menu__logo">
					<a href="/"><img class="menu__logo-img" src="/public/img/site-logo.png" alt="logotype"></a>
				</div>
				<div class="menu__buttons">
					<a href="/register"><button class="btn menu__btn">Регистрация</button></a>
					<a href="/login"><button class="btn menu__btn btn_fill_green">Вход</button></a>
				</div>
			</div>
			<div class="separator menu__separator"></div>
			<div class="menu__nav">
				<span class="menu__nav-item">Рецепты</span>
				<span class="menu__nav-item">Статьи</span>
			</div>
		</div>

		<div class="content">

			<section class="section header">
				<h1 class="header__text">Каталог рецептов</h1>
			</section>
			<div class="separator"></div>

			<section class="section search">
				<div class="search__recipe-count">
					Рецептов найдено:
					<?php echo $data[1]; ?>
				</div>
				<form action="" method="GET" class="search__form">
					<div class="search__icon">
						<img src="/public/img/search-icon.svg" alt="search-icon-img" class="search__icon-img">
					</div>
					<input type="text/submit" class="search__input" placeholder="Поиск по названию">
				</form>
				<div class="search__sort">
					Сортировать: <div class="search__sort-filter search__sort_active">Новые</div>
					<div class="search__sort-icon">
						<img src="/public/img/down-arrow.svg" alt="down arrow" class="search__sort-icon-img">
					</div>
				</div>
			</section>
			<div class="separator"></div>

			<section class="section	recipes">
				<div class="recipes__filter">
					<div class="filter">
						<button class="filter__accordion">
							<div class="filter__icon">
								<img src="/public/img/down-arrow.svg" alt="down arrow" class="filter__icon-img">
							</div>
							По категории блюд
						</button>
						<div class="filter__panel">
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Выпечка
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Основные блюда
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Салаты
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Супы
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Десерты
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Запеканки
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Блины, оладьи, сырники
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Соусы и заправки
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Каши
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Бутерброды
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Пельмени и вареники
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Шашлык
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Хлеб
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Напитки
							</label>
						</div>
						<div class="separator filter__separator"></div>
					</div>
					<div class="filter">
						<button class="filter__accordion">
							<div class="filter__icon">
								<img src="/public/img/down-arrow.svg" alt="down arrow" class="filter__icon-img">
							</div>
							Быстрые рецепты
						</button>
						<div class="filter__panel">
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								до 15 минут
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								до 30 минут
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								до 45 минут
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								до 60 минут
							</label>
						</div>
						<div class="separator filter__separator"></div>
					</div>
					<div class="filter">
						<button class="filter__accordion">
							<div class="filter__icon">
								<img src="/public/img/down-arrow.svg" alt="down arrow" class="filter__icon-img">
							</div>
							Время приема пищи
						</button>
						<div class="filter__panel">
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Завтрак
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Обед
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Полдник
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Ужин
							</label>
						</div>
						<div class="separator filter__separator"></div>
					</div>
					<div class="filter">
						<button class="filter__accordion">
							<div class="filter__icon">
								<img src="/public/img/down-arrow.svg" alt="down arrow" class="filter__icon-img">
							</div>
							По праздникам
						</button>
						<div class="filter__panel">
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Новый год
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Пасха
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Масленица
							</label>
							<label for="" class="filter__checkbox-text">
								<input type="checkbox" class="filter__checkbox">
								Пост
							</label>
						</div>
						<div class="separator filter__separator"></div>
					</div>
					<button class="btn recipes__btn">Показать</button>
				</div>

				<div class="recipes__content">

					<?php echo $content; ?>

				</div>

			</section>

		</div>

	</div>

	<script src="/public/js/main.js"></script>
</body>

</html>
