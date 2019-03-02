<?php
namespace App\Controllers;
/**
 * Class Home
 */

class Home extends \Core\Controller {

	/**
	 * Index Function
	 */


	public function indexAction(){
		echo '<h1>Home Index</h1>';
	}

	public function dashAction(){
		echo '<h2>Dashboard</h2>';
	}

	public function before() {
		echo 'Run Before';
	}

	public function after() {
		echo 'Run After';
	}


}