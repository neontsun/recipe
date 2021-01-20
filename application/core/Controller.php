<?php

namespace application\core;

abstract class Controller {
	
	public $route;
	public $view;

	public function __construct($route) {

		$this->route = $route;
		$this->view = new View($route);

	}

	protected function setLayouts($layout) {

		$this->view->layout = $layout;

	}

}

