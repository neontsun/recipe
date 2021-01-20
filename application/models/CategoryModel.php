<?php 

namespace application\models;
use application\core\Model;

class CategoryModel extends Model {

	/* Получение всех категорий по id рецепта */
	public function getCategorysByRecipeId($recipeId) {

		$returnedRequestFields = [
			"name"
		];

		$sqlQuery = "SELECT c.`name`
								 FROM `category` c
								 JOIN `recipe-category` rc ON rc.`category_id` = c.`row_id`
								 WHERE rc.`recipe_id` = ?";

		$bindParams[$recipeId] = "i";

		return $this->db->getQuery($sqlQuery, $returnedRequestFields, $bindParams);

	}

}
