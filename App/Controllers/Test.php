<?php

namespace App\Controllers;

class Test {

	public function index() {
		$this::connectDB();
	}

	function connectDB() {
		$host     = "localhost";
		$user     = "root";
		$password = '';
		$db_name  = 'mvc';

		$connection = new \mysqli( $host, $user, $password, $db_name );

		if ( $connection->connect_error ) {
			echo "Connection failed. $connection->error";
		} else {
			echo "Connected Successfully";
		}

	}

}