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
	<link rel="stylesheet" href="/public/css/all.min.css">
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
				<h1 class="head__text">Каталог рецептов</h1>
			</div>

			<div class="separator"></div>

			<div class="section section_padding_vert search">
				<div class="search__recipe-count">
					<span>Рецептов найдено: </span>
					<span class="search__recipe-count_bold">
						<?php echo $data[1]; ?>
					</span>
				</div>
				<form class="search__form">
					<div class="search__form-icon fas fa-search"></div>
					<input type="text" placeholder="Название рецепта" class="search__input">
				</form>
				<div class="search__filter">
					<span>Сортировать по: </span>
					<div class="search__list-btn">
						<span class="search__btn-text">Новые</span>
						<div class="search__btn-icon fas fa-angle-down"></div>
					</div>
				</div>
			</div>

			<div class="separator"></div>

			<div class="section section_padding_vert filters">

				<div class="filters__item">
					<button class="filters__accordion">
						<span>По категории блюд</span>
						<div class="filters__accordion-icon fas fa-angle-down"></div>
					</button>
					<div class="filters__panel">
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox1">
							<label for="filtersCheckbox1" class="filters__checkbox-text">Выпечка</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox2">
							<label for="filtersCheckbox2" class="filters__checkbox-text">Основные блюда</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox3">
							<label for="filtersCheckbox3" class="filters__checkbox-text">Салаты</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox4">
							<label for="filtersCheckbox4" class="filters__checkbox-text">Супы</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox5">
							<label for="filtersCheckbox5" class="filters__checkbox-text">Десерты</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox6">
							<label for="filtersCheckbox6" class="filters__checkbox-text">Запеканки</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox7">
							<label for="filtersCheckbox7" class="filters__checkbox-text">Блины, оладьи, сырники</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox8">
							<label for="filtersCheckbox8" class="filters__checkbox-text">Соусы и заправки</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox9">
							<label for="filtersCheckbox9" class="filters__checkbox-text">Каши</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox10">
							<label for="filtersCheckbox10" class="filters__checkbox-text">Бутерброды</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox11">
							<label for="filtersCheckbox11" class="filters__checkbox-text">Пельмени и вареники</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox12">
							<label for="filtersCheckbox12" class="filters__checkbox-text">Шашлык</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox13">
							<label for="filtersCheckbox13" class="filters__checkbox-text">Хлеб</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox14">
							<label for="filtersCheckbox14" class="filters__checkbox-text">Напитки</label>
						</div>
					</div>
				</div>
				<div class="filters__item">
					<button class="filters__accordion">
						<span>Быстрые рецепты</span>
						<div class="filters__accordion-icon fas fa-angle-down"></div>
					</button>
					<div class="filters__panel">
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox15">
							<label for="filtersCheckbox15" class="filters__checkbox-text">до 15 минут</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox16">
							<label for="filtersCheckbox16" class="filters__checkbox-text">до 30 минут</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox17">
							<label for="filtersCheckbox17" class="filters__checkbox-text">до 45 минут</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox18">
							<label for="filtersCheckbox18" class="filters__checkbox-text">до 60 минут</label>
						</div>
					</div>
				</div>
				<div class="filters__item">
					<button class="filters__accordion">
						<span>Время приема пищи</span>
						<div class="filters__accordion-icon fas fa-angle-down"></div>
					</button>
					<div class="filters__panel">
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox19">
							<label for="filtersCheckbox19" class="filters__checkbox-text">Завтрак</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox20">
							<label for="filtersCheckbox20" class="filters__checkbox-text">Обед</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox21">
							<label for="filtersCheckbox21" class="filters__checkbox-text">Полдник</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox22">
							<label for="filtersCheckbox22" class="filters__checkbox-text">Ужин</label>
						</div>
					</div>
				</div>
				<div class="filters__item">
					<button class="filters__accordion">
						<span>По праздникам</span>
						<div class="filters__accordion-icon fas fa-angle-down"></div>
					</button>
					<div class="filters__panel">
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox23">
							<label for="filtersCheckbox23" class="filters__checkbox-text">Новый год</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox24">
							<label for="filtersCheckbox24" class="filters__checkbox-text">Пасха</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox25">
							<label for="filtersCheckbox25" class="filters__checkbox-text">Масленица</label>
						</div>
						<div class="filters__panel-item">
							<input type="checkbox" class="filters__checkbox" id="filtersCheckbox26">
							<label for="filtersCheckbox26" class="filters__checkbox-text">Пост</label>
						</div>
					</div>
				</div>

			</div>

			<div class="separator"></div>

			<div class="section section_padding_vert selected-filters">
				<span>Фильтров выбрано: </span>
				<span class="selected-filters__count">0</span>
				<span class="selected-filters__btn">Сбросить</span>
			</div>

			<div class="section section_padding_vert recipes grid">

				<?php echo $content; ?>

			</div>

		</div>

	</div>

	<div class="filter-modal">
		<div class="filter-modal__title">Сортировать по</div>
		<div class="filter-modal__link filter-modal__link_active">Новые</div>
		<div class="filter-modal__link">Старые</div>
		<div class="filter-modal__link">Оценкам</div>
	</div>

	<script src="/public/js/main.js"></script>
	<script src="/public/js/masonry.pkgd.min.js"></script>
	<script src="/public/js/grid.js"></script>

</body>

</html>
