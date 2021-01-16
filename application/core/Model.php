<?php

namespace application\core;
use application\core\DataBase;

abstract class Model {

	public $mysqli;
	public $db;

	public function __construct() {

		$this->db = new DataBase;
		$this->mysqli = $this->db->getInstance();
		
	}

}
