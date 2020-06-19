<?php

namespace App;
use PDO;
class Controller {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=db-utssitimarlina2", "root", "");
		} catch (Exception $e) {
			die ("erorr! " . $e->getMessage());
		}
	}
}