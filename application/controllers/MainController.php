<?php

namespace application\controllers;
use application\core\Controller;
use application\models\RecipeModel;
use application\models\CommentModel;
use application\models\CategoryModel;

class MainController extends Controller {
	
	public function indexAction() {

		if ($_GET) {

			if (isset($_GET["sorting"])) {

				$sort = $this->parseSortingParams($_GET["sorting"]);
				$data = $this->getRecipesByFilter($_GET, $sort[0], $sort[1]);

			}
			else
				$data = $this->getRecipesByFilter($_GET);

		}
		else
			$data = $this->getAllDataForAllRecipes();
		
		$recipeCount = $data ? count($data) : 0;

		$this->set_layouts("default");
		$this->view->render("Пошаговые рецепты с фото", [$data, $recipeCount]);

	}

	private function getAllDataForAllRecipes($fieldSort = "row_id", $sortStyle = "DESC") {

		$recipeModel = new RecipeModel;
		$commentModel = new CommentModel;

		$recipes = $recipeModel->getAllRecipes($fieldSort, $sortStyle);

		foreach ($recipes as &$value) {
			
			$id = $value["row_id"];
			$value["comment_count"] = $commentModel->getCommentCountByRecipeId($id);
			$value["category"] = $recipeModel->getAllCategoryById($id);

		}
		unset($value);

		return $recipes;

	}

	private function getRecipesByFilter($params, $fieldSort = "row_id", $sortStyle = "DESC") {

		$recipeModel = new RecipeModel;
		$commentModel = new CommentModel;
		
		$recipes = $recipeModel->getRecipeByFilter($params, $fieldSort, $sortStyle);

		if ($recipes) {

				foreach ($recipes as &$value) {

					$id = $value["row_id"];
					$value["comment_count"] = $commentModel->getCommentCountByRecipeId($id);
					$value["category"] = $recipeModel->getAllCategoryById($id);

				}
				unset($value);

				return $recipes;
			
		}
		else return [];
	
	}

	private function parseSortingParams($sorting) {

		switch ($sorting) {

			case 'Старые': return ["row_id", "ASC"]; break;
			case 'Новые': return ["row_id", "DESC"]; break;
			case 'Оценкам': return ["like_count", "DESC"]; break;

		}

	}

}

