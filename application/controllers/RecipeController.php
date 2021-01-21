<?php

namespace application\controllers;

use application\core\Controller;
use application\models\RecipeModel;
use application\models\CommentModel;
use application\models\CategoryModel;

class RecipeController extends Controller {
	
	public function indexAction() {

		$this->setLayouts("recipe");
		$this->view->render("Рецепт");

	}

}

