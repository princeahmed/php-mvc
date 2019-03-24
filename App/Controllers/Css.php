<?php

namespace App\Controllers;

use Core\View;

class Css extends \Core\Controller {

	public function indexAction() {
		View::view( 'css/index', [ 'assets' => $this->getAssets() ] );
	}

}
