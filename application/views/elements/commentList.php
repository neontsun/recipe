<?php

require 'application/views/elements/comment.php';

function getCommentList($commentsData) {

	echo '<div class="recipe-article__comments-list">';
		
		foreach ($commentsData as $comment) {
			
			getComment($comment["email"], $comment["date"], $comment["text"]);

		}

	echo '</div>';

}
