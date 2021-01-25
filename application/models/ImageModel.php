<?php 

namespace application\models;
use application\core\Model;

class ImageModel extends Model {

	/* Получение изображений по id рецепта */
	public function getImagesByRecipeId($recipeId) {

		$returnedRequestFields = [
			"link"
		];

		$sqlQuery = "SELECT i.`link`
								 FROM `image` i
								 WHERE i.`recipe_id` = ? 
								 ORDER BY `order_index` ASC";

		$bindParams[$recipeId] = "i";

		return $this->db->getQuery($sqlQuery, $returnedRequestFields, $bindParams);

	}

	/* Получение главного изображения рецепта по id */
	public function getMainImageByRecipeId($recipeId) {

		return $this->getImagesByRecipeId($recipeId)[0];

	}

}
