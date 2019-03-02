<?php

namespace Core;


class Router {

	protected $routes = [];
	protected $params = [];

	/**
	 * Set routes
	 *
	 * @param array $routes
	 */
	public function setRoutes( $route, $params = [] ) {

		$route = preg_replace( '/\//', '\\/', $route );
		$route = preg_replace( '/\{([a-z-]+)\}/', '(?P<\1>[a-z-]+)', $route );
		$route = preg_replace( '/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route );
		$route = '/^' . $route . '$/';

		$this->routes[ $route ] = $params;
	}

	/**
	 * @return array
	 */
	public function getRoutes() {
		return $this->routes;
	}

	/**
	 * Match the url
	 *
	 * @param $url
	 *
	 */
	public function match( $url ) {

		foreach ( $this->routes as $route => $params ) {
			if ( preg_match( $route, $url, $matches ) ) {
				foreach ( $matches as $key => $match ) {
					if ( is_string( $key ) ) {
						$params[ $key ] = $match;
					}
				}

				$this->params = $params;

				return true;
			}
		}

		return false;
	}

	/**
	 * Get currently matched url params
	 */

	public function getParams() {
		return $this->params;
	}

	/**
	 * Dispatch the url
	 */

	public function dispatch( $url ) {

		$url = $this->removeQueryStringVariables($url);

		if ( $this->match( $url ) ) {
			$controller = $this->params['controller'];
			$controller = $this->convertToStudlyCaps( $controller );
			$controller = "App\Controllers\\$controller";

			if ( class_exists( $controller ) ) {
				$controller = new $controller($this->params);

				$action = $this->convertToCamelCase( $this->params['action'] );

				if ( is_callable( array( $controller, $action ) ) ) {
					$controller->$action();
				} else {
					echo "Method <code>$action</code> not found in " . get_class( $controller );
				}
			} else {
				echo "Class <code>$controller</code> not found.";
			}

		} else {
			echo 'No Match';
		}
	}

	/**
	 * Convert String to StudlyCaps
	 */

	public function convertToStudlyCaps( $str ) {
		$str = ucwords( str_replace( '-', ' ', $str ) );
		$str = str_replace( ' ', '', $str );

		return $str;
	}

	/**
	 * Convert a string to camelCase
	 */

	public function convertToCamelCase( $str ) {
		$str = ucwords( str_replace( '-', ' ', $str ) );
		$str = lcfirst( str_replace( ' ', '', $str ) );

		return $str;
	}

	/**
	 * Remove Query String Variables
	 * products/new?id=1 -> products/new
	 */

	public function removeQueryStringVariables( $url ) {
		if ( ! empty( $url ) ) {

			$parts = explode( '&', $url, 2 );
			if ( strpos( $parts[0], '=' ) === false ) {
				$url = $parts[0];
			} else {
				$url = '';
			}
		}

		return $url;
	}


}