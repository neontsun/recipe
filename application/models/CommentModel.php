<?php 

namespace application\models;
use application\core\Model;

class CommentModel extends Model {

	/* Получение комментариев по id рецепта */
	public function getCommentByRecipeId($recipeId) {

		$returnedRequestFields = [
			"row_id",
			"text",
			"email",
			"date",
			"like_count"
		];

		$sqlQuery = "SELECT `c`.row_id, `c`.text, `c`.email, `c`.date, `c`.like_count
								 FROM `comment` c
								 JOIN `recipe-comment` rc ON `c`.row_id = `rc`.comment_id
								 WHERE `rc`.recipe_id = ?";
		
		$bindParams[$recipeId] = "i";

		return $this->db->getQuery($sqlQuery, $returnedRequestFields, $bindParams);

	}

	/* Получение количества комментариев по id рецепта */
	public function getCommentCountByRecipeId($recipeId) {

		return count($this->getCommentByRecipeId($recipeId));

	}

	public function addComment() {

		pretty(123);

	}

}

