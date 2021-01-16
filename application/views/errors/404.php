<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>404 | Такой страницы нет</title>

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

			<div class="error">
				<h1 class="error__code">404</h1>
				<p class="error__description">
					Такой страницы нет. Вероятно, ссылка, по которой вы сюда попали, устарела, или вы
					ошиблись, когда набирали адрес.
				</p>
				<p class="error__description">
					Вы можете перейти на <a href="/" class="error__link">главную страницу</a>
				</p>
			</div>

		</div>

	</div>

</body>

</html>
