<?php

namespace application\controllers;
use application\core\Controller;
use application\models\RecipeModel;
use application\models\CommentModel;
use application\models\CategoryModel;

class MainController extends Controller {
	
	public function indexAction() {

		$data;
		$recipeCount;

		if ($_GET) {
			
			// pretty($_GET);
			$data = $this->getRecipesByFilter($_GET);

		}
		else {
			$data = $this->getAllDataForAllRecipes();
		}

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
			$commentCount = $commentModel->getCommentCountByRecipeId($id);
			
			$value["comment_count"] = $commentCount;
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
					$commentCount = $commentModel->getCommentCountByRecipeId($id);
					$value["comment_count"] = $commentCount;

				}
				unset($value);

				return $recipes;
			
		}
		else return false;
	
	}

}

