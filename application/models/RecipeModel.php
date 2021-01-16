<?php 

namespace application\models;
use application\core\Model;
use application\models\CommentModel;
use application\models\CategoryModel;

class RecipeModel extends Model {

	private $fields = [];

	/* Получение всех рецептов */
	public function getAllRecipes($fieldSort = "row_id", $sortStyle = "DESC") {

		$this->fields = [
			'row_id',
			'title',
			'text',
			'like_count',
			'link',
			'date'
		];
		$sql = "SELECT * FROM `recipe` ORDER BY `$fieldSort` $sortStyle";

		return $this->db->getQuery($sql, $this->fields, []);

	}

	/* Получение рецепта по id */
	public function getRecipeById($id) {

		$this->fields = [
			'row_id',
			'title',
			'text',
			'like_count',
			'link',
			'date'
		];
		$sql = "SELECT * FROM `recipe` WHERE `row_id` = ?";

		return $this->db->getQuery($sql, $this->fields, [$id => "i"]);

	}
	
	/* Получение количества рецептов */
	public function getRecipesCount() {

		$this->fields = [
			"count"
		];
		$sql = "SELECT COUNT(`row_id`) FROM `recipe`";

		return $this->db->getQuery($sql, $this->fields, [])[0];

	}

	// Получение ссылок всех рецептов
	public function getRecipesLinks() {

		$this->fields = [
			"link"
		];
		$sql = "SELECT `link` FROM `recipe`";

		return $this->db->getQuery($sql, $this->fields, []);

	}

	// Получение рецепта в соответствии с параметрами запроса
	public function getRecipeByFilter($params, $fieldSort = "row_id", $sortStyle = "DESC") {

		$this->fields = [
			'row_id',
			'title',
			'text',
			'like_count',
			'link',
			'date'
		];
		$bindArr = [];

		$sql = "SELECT r.`row_id`, r.`title`, r.`text`, r.`like_count`, r.`link`, r.`date`
						FROM `recipe` r 
						JOIN `recipe-category` rc ON r.`row_id` = rc.`recipe_id`
						JOIN `category` c ON c.`row_id` = rc.`category_id` ";

		if (isset($params["tag"])) {
			$sql .= "WHERE ";
			foreach ($params["tag"] as $category) {
				foreach ($category as $item) {
					$sql .= "c.`name` = ? OR ";
					$bindArr[$item] = "s";
				}
			}
			$sql = substr($sql, 0, strlen($sql) - 3);
		}
		if (isset($params["title"]) && isset($params["tag"])) {
			$sql .= "AND r.`title` LIKE '%" . $params["title"] . "%' ";
		}
		else if (isset($params["title"])) {
			$sql .= "WHERE r.`title` LIKE '%" . $params["title"] . "%' ";
		}
		if (isset($params["sorting"])) {
			$sortStyle = $params["sorting"] != "ASC" && $params["sorting"] != "DESC" ? "DESC" : $params["sorting"];
		}		
		$bindArr[count($bindArr)] = "i";

		$sql .= "GROUP BY rc.`recipe_id`
						 HAVING COUNT(rc.`recipe_id`) >= ? ";
		$sql .= "ORDER BY r.`$fieldSort` $sortStyle";
		
		return $this->db->getQuery($sql, $this->fields, $bindArr);

	}

}
