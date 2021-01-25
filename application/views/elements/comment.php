<?php

function getComment($commentUser, $commentDate, $commentText) {

	echo '
		<div class="comment">
			<div class="comment__img far fa-comment"></div>
			<div class="comment__data">
				<div class="comment__username-date">
					<div class="comment__username">'.$commentUser.'</div>
					<div class="comment__date">'.$commentDate.'</div>
				</div>
				<div class="comment__text">'.$commentText.'</div>
			</div>
		</div>
	';

}
