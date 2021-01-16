<?php

namespace application\core;

class View {

	public $path;
	public $layout = 'default';
	public $route;

	public function __construct($route) {

		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route["action"];

	}

	public function render($title, $data = []) {
		
		$path = 'application/views/' . $this->path . '.php';

		if (file_exists($path)) {
			
			ob_start();
			require $path;
			$content = ob_get_clean();

			require_once 'application/views/layouts/' . $this->layout . '.php';

		}
		else throw new Exception("Вид не найден");

	}

}
