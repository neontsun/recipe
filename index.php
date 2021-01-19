<?php

use application\core\Router;
require_once 'application/functions/dev.php';

try {
	
	spl_autoload_register(function ($class) {

		$path = str_replace('\\', '/', $class . '.php');

		if (file_exists($path)) {
			require $path;
		}
		else throw new Exception("Класс не найден");

	});

	session_start();

	$router = new Router();
	$router->run();

} 
catch (Exception $e) {
	
	var_dump($e->getMessage());

}
