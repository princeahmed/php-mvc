<?php

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


}