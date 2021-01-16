<?php

namespace application\core;

class Router {
	
	protected $routes = [];
	protected $params = [];

	public function __construct() {

		$arr = require_once 'application/config/routes.php';
		
		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}

	}
	
	private function add($route, $params) {

		$route = '#^' . $route . '$#';
		$this->routes[$route] = $params;

	}

	private function match() {
		
		$url = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/');
		
		foreach ($this->routes as $route => $params) {
			
			if (preg_match($route, $url, $matches)) {
				$this->params = $params;
				return true;
			}

		}

		return false;

	}

	public function run() {

		if ($this->match()) {
			
			$path = 'application\controllers\\' . ucfirst($this->params["controller"]) . 'Controller';

			if (class_exists($path)) {

				$action = $this->params["action"] . 'Action';

				if (method_exists($path, $action)) {
					
					$controller = new $path($this->params);
					$controller->$action();

				}
				else throw new Exception("Метод не найден");

			}
			else throw new Exception("Класс не найден");

		}
		else {
			
			header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
			require 'application/views/errors/404.php';

		}

	}

}
