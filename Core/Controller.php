<?php

namespace Core;

use Core\View;

abstract class Controller {

	/**
	 * Route Parameters
	 * @var array
	 */
	protected $params = [];

	public function __construct( $params ) {
		$this->params = $params;
	}

	/**
	 * @param $name
	 * @param $arguments
	 */

	public function __call( $name, $arguments ) {
		$method = $name . 'Action';

		if ( method_exists( $this, $method ) ) {
			call_user_func_array( array( $this, $method ), $arguments );
		} else {
			echo "$name is not exists in " . get_class( $this );
		}
	}

	/**
	 * Run before every function
	 */
	protected function before() {
	}

	protected function after() {
	}

}