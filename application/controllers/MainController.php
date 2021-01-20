<?php

namespace application\controllers;

use application\core\Controller;
use application\models\RecipeModel;
use application\models\CommentModel;
use application\models\CategoryModel;

class MainController extends Controller {
	
	public function indexAction() {

		$queryParams = $_GET;

		if ($queryParams) {

			if (isset($queryParams["sorting"])) {
				$sortingValue = $this->parseSortingParams($queryParams["sorting"]);
				$recipesArray = $this->getRecipesByFilter($queryParams, $sortingValue);
			}
			else
				$recipesArray = $this->getRecipesByFilter($queryParams);

		}
		else
			$recipesArray = $this->getAllDataForAllRecipes();
		
		$allDataForRecipes = [
			$recipesArray,
			count($recipesArray)
		];
		
		$this->setLayouts("default");
		$this->view->render("Пошаговые рецепты с фото", $allDataForRecipes);

	}

	private function getAllDataForAllRecipes() {

		$recipeModel = new RecipeModel;
		$commentModel = new CommentModel;
		$categoryModel = new CategoryModel;

		$allRecipes = $recipeModel->getAllRecipes();

		if ($allRecipes) {

			foreach ($allRecipes as &$recipe) {
			
				$recipeId = $recipe["row_id"];
				$recipe["comment_count"] = $commentModel->getCommentCountByRecipeId($recipeId);
				$recipe["category"] = $categoryModel->getCategorysByRecipeId($recipeId);
				$recipe["image"] = $recipeModel->getImageById($recipeId);

			}
			unset($recipe);

			return $allRecipes;

		}
		else return [];

	}

	private function getRecipesByFilter($params, $sortingArray = []) {

		$recipeModel = new RecipeModel;
		$commentModel = new CommentModel;
		$categoryModel = new CategoryModel;
		
		if ($sortingArray) {
			$sortingField = $sortingArray["field"];
			$sortingValue = $sortingArray["value"];
			$allRecipes = $recipeModel->getRecipeByFilter($params, $sortingField, $sortingValue);
		}
		else
			$allRecipes = $recipeModel->getRecipeByFilter($params);

		if ($allRecipes) {

			foreach ($allRecipes as &$recipe) {

				$recipeId = $recipe["row_id"];
				$recipe["comment_count"] = $commentModel->getCommentCountByRecipeId($recipeId);
				$recipe["category"] = $categoryModel->getCategorysByRecipeId($recipeId);
				$recipe["image"] = $recipeModel->getImageById($recipeId);

			}
			unset($recipe);

			return $allRecipes;
			
		}
		else return [];
	
	}

	private function parseSortingParams($querySorting) {

		$sortingValue = [];

		switch ($querySorting) {

			case 'Старые':  
				$sortingValue = [
					"field" => "row_id", 
					"value" => "ASC"
				]; 
				break;
			case 'Новые': 
				$sortingValue = [
					"field" => "row_id", 
					"value" => "DESC"
				]; 
				break;
			case 'Оценкам': 
				$sortingValue = [
					"field" => "like_count", 
					"value" => "DESC"
				];
				break;
			default: return [];

		}

		return $sortingValue;

	}

}

