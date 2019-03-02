<?php
namespace App\Controllers;
/**
 * Class Post
 */

class Post extends \Core\Controller {

	/**
	 * Index Function
	 */

	public function index(){
		echo '<h2>Post Index</h2>';
		echo '<pre>';
		    print_r($this->params);
		echo '</pre>';
	}

}