<?php

class Router {

	protected $routes = [];
	protected $params = [];

	/**
	 * Set routes
	 *
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

	/**
	 * Match the url
	 * @param $url
	 *
	 * @return bool
	 */
	public function match($url){
		foreach($this->routes as $route => $params){
			if($route == $url){
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	/**
	 * Get currently matched url params
	 */

	public function getParams(){
		return $this->params;
	}

}