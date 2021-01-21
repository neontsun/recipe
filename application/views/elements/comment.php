<?php

function getComment($essence, $commentData) {

	echo '<div class="comment">';
		echo '<img src="/public/img/time-icon.svg" alt="image" class="comment__img">';
		echo '<div class="comment__data">';
			echo '<div class="comment__username-date">';
				echo '<div class="comment__username">neontsun@gmail.com</div>';
				echo '<div class="comment__date">23 часа назад</div>';
			echo '</div>';
			echo '<div class="comment__text">Lorem ipsum dolor sit amet.</div>';
		echo '</div>';
	echo '</div>';

}
