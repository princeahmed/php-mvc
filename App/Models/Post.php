<?php

namespace App\Models;

class Post extends \Core\Model {

	public static function getAll() {

		$db = static::getDB();

		$sql = "SELECT * FROM posts;";

		$stmt = $db->prepare( $sql );
		$stmt->execute();

		$posts = $stmt->fetchAll(\PDO::FETCH_OBJ);

		return $posts;

	}

}