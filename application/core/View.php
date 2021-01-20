<?php

namespace application\core;

class View {

	public $actionPath;
	public $layout;
	public $route;

	public function __construct($route) {

		$this->route = $route;
		$this->actionPath = $route['controller'] . '/' . $route["action"];

	}

	public function render($title, $data = []) {
		
		$actionPath = 'application/views/' . $this->actionPath . '.php';

		if (file_exists($actionPath)) {
			
			ob_start();
			require $actionPath;
			$content = ob_get_clean();

			if ($this->layout)
				require_once 'application/views/layouts/' . $this->layout . '.php';
			else
				throw new Exception("Слой не установлен");

		}
		else throw new Exception("Вид не найден");

	}

}
