<?php 

namespace application\models;
use application\core\Model;

class CommentModel extends Model {

	private $fields = [];

	/* Получение комментариев по id рецепта */
	public function getCommentByRecipeId($id) {

		$this->fields = [
			"row_id",
			"text",
			"email",
			"date",
			"like_count"
		];

		$sql = "SELECT `c`.row_id, `c`.text, `c`.email, `c`.date, `c`.like_count
						FROM `comment` c
						JOIN `recipe-comment` rc ON `c`.row_id = `rc`.comment_id
						WHERE `rc`.recipe_id = ?";

		return $this->db->getQuery($sql, $this->fields, [$id => "i"]);

	}
	
	/* Получение количества комментариев по id рецепта */
	public function getCommentCountByRecipeId($id) {

		return count($this->getCommentByRecipeId($id));

	}

}
