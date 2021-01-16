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

	<div class="menu">
		<div class="menu__auth">
			<div class="menu__logo">
				<a href="/"><img class="menu__logo-img" src="/public/img/site-logo.png" alt="logotype"></a>
			</div>
		</div>
	</div>

	<div class="content">

		<?php echo $content; ?>

	</div>

</body>

</html>
