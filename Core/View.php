<?php

namespace Core;

use Jenssegers\Blade\Blade;

class View {


	/**
	 * Render a view file
	 *
	 * @since 1.0.0
	 *
	 * @param $view
	 *
	 * return string
	 */
	public function render( $view, $args = [] ) {

		extract( $args, EXTR_SKIP );

		$file = "../App/Views/$view";

		if ( is_readable( $file ) ) {
			require $file;
		} else {
			echo "$file is no found";
		}

	}

	/**
	 * =======================
	 * Render Blade Template
	 * =======================
	 *
	 * @param $view
	 * @param array $params
	 */

	public static function view( $view, $params = [] ) {

		$blade = new \Jenssegers\Blade\Blade( dirname( __DIR__ ) . '/App/Views', dirname( __DIR__ ) . '/App/Views/cache' );

		try {
			echo $blade->make( $view, $params );
		} catch ( \Exception $exception ) {
			echo $exception->getMessage();
		};

		exit();

	}

}