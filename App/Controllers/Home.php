<?php

namespace App\Controllers;

use Core\View;


/**
 * Class Home
 */
class Home extends \Core\Controller {

	/**
	 * Index Function
	 */


	public function indexAction() {

		View::view( 'home/index', [ 'name' => 'Prince' ] );

	}

	public function dashAction() {
		echo '<h2>Dashboard</h2>';
	}

	public function before() {
		echo 'Run Before';
	}

	public function after() {
		echo 'Run After';
	}


}