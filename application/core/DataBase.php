<?php

namespace application\core;
use Exception;
use mysqli;

class DataBase {

	private $mysqli;

	public function __construct() {

		$db = require 'application/config/db.php';
		$this->mysqli = new mysqli($db["DB_HOST"], $db["DB_USER"], $db["DB_PASSWORD"], $db["DB_NAME"]);

		if ($this->mysqli->connect_error) {
			throw new Exception("Не удалось подключиться к базе данных: " . $this->mysqli->connect_error);
		}

	}

	public function getInstance() {
		return $this->mysqli;
	}

	public function getQuery($sql, $fields, $params) {
		
		if ($stmt = $this->mysqli->prepare($sql)) {
			
			if ($params) {
				$type = "";
				$vars = [];
				foreach ($params as $key => $value) {
					$type .= $value;
					$vars[] = $key;
				}
				
				$stmt->bind_param($type, ...$vars);
			}

			$stmt->execute();

			$result = $stmt->get_result();
			$array = [];
			
			if ($result->num_rows != 0) {

				while ($row = $result->fetch_array(MYSQLI_NUM)) {
					
					if (count($row) == count($fields)) {

						$temp = [];
						for ($i = 0; $i < count($row); $i++) { 
							$temp[$fields[$i]] = $row[$i];
						}
						$array[] = $temp;

					}
					else throw new Exception("Количество возвращаемых полей не соответствует количеству указанных");

				}

				$result->close();
				
			}
			
		}
		else throw new Exception("Ошибка запроса: " . $this->mysqli->error);

		return $array;

	}

}
