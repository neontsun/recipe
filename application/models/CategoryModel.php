<?php 

namespace application\models;
use application\core\Model;

class CategoryModel extends Model {

	private $fields = [];

	/* Получение всех категорий по id рецепта */
	public function getCategoryByRecipeId($id) {

		$this->fields = [
			"row_id",
			"name",
			"tag",
		];

		$sql = "SELECT `c`.row_id, `c`.name, `c`.tag
						FROM `category` c
						JOIN `recipe-category` rc ON `c`.row_id = `rc`.category_id
						WHERE `rc`.recipe_id = ?";

		return $this->db->getQuery($sql, $this->fields, [$id => "i"]);

	}

}
