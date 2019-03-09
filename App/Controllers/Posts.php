<?php
namespace App\Controllers;

use App\Models\Post;
use Core\View;
/**
 * Class Post
 */

class Posts extends \Core\Controller {

	/**
	 * Index Function
	 */

	public function index(){

		$posts = Post::getAll();

		return View::view('posts/index', array('posts' => $posts));

	}

}