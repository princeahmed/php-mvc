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
			$str = "is not exists in";
			echo "$name {$str} " . get_class( $this );
		}
	}

	/**
	 * Run before every function
	 */
	protected function before() {
	}

	protected function after() {
	}

	protected function getAssets() {
		$assets = array();
		$json   = json_decode( file_get_contents( './assets/manifest.json' ) );

		foreach ( $json as $key => $asset ) {

			$asset = array_map( function ( $name ) use ( $key ) {
				$parts         = explode( '.', $name );
				$type          = end( $parts );
				$file[ $type ] = $name;

				return $file;

			}, $asset );

			foreach ( $asset as $file ) {
				foreach ( $file as $type => $name ) {
					$assets[ $key ][ $type ] = $name;
				}
			}

		}

		return $assets;
	}

}