<?php

namespace application\controllers;

use application\core\Controller;
use application\models\RecipeModel;
use application\models\CommentModel;
use application\models\CategoryModel;
use application\models\ImageModel;

class RecipeController extends Controller {
	
	public function indexAction() {
		
		$recipeId = $this->getRecipeIdFromLink();
		$recipeData = $this->getFullDataForRecipeById($recipeId)[0];
		$recipeTitle = $recipeData["title"];
		// pretty($recipeData);
		$this->setLayouts("recipe");
		$this->view->render($recipeTitle, $recipeData);

	}

	private function getFullDataForRecipeById($recipeId) {

		$recipeModel = new RecipeModel;
		$commentModel = new CommentModel;
		$categoryModel = new CategoryModel;
		$imageModel = new ImageModel;

		$recipesData = $recipeModel->getFullRecipeDataById($recipeId);
		
		if ($recipesData) {
			
			$recipesData[0]["comments"] = $commentModel->getCommentByRecipeId($recipeId);
			$recipesData[0]["comment_count"] = count($recipesData[0]["comments"]);
			$recipesData[0]["categorys"] = $categoryModel->getCategorysByRecipeId($recipeId);
			$recipesData[0]["images"] = $imageModel->getImagesByRecipeId($recipeId);
			
			return $recipesData;

		}
		else return [];

	}

	private function getRecipeIdFromLink() {

		$recipePath = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/');
		$recipeLink = explode("/", $recipePath)[1];
		$recipeId = explode("-", $recipeLink)[0];

		return $recipeId;

	}
	
}

