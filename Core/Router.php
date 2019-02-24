<?php

class Router {
	protected $routes = [];

	/**
	 * @param array $routes
	 */
	public function setRoutes( $route, $params ) {
		$this->routes[$route] = $params;
	}

	/**
	 * @return array
	 */
	public function getRoutes() {
		return $this->routes;
	}

}