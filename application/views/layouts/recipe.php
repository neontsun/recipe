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

			<?php echo $content; ?>

		</div>

	</div>

	<script src="/public/js/recipe.js"></script>
	<script src="/public/js/jquery-3.5.0.min.js"></script>
	<script src="/public/js/ajax-comment-form.js"></script>

</body>

</html>
