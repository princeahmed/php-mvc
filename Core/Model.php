<?php

namespace Core;

use PDO;

abstract class Model {


	protected static function getDB() {
		static $db = null;

		if ( $db === null ) {
			$host     = 'localhost';
			$username = 'root';
			$password = '';
			$db_name  = 'mvc';

			try {
				$db = new PDO( "mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password );

				return $db;
			} catch ( PDOException $exception ) {
				echo $exception->getMessage();
			}

		}
	}

}