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
	 */
	public function match($url){

		$regex = '/(?<controller>[a-z-]+)\/(?<action>[a-z-]+)/i';

		if(preg_match($regex, $url, $matches)){
			foreach ($matches as $key => $param){
				if(is_string($key)) {
					$this->params[ $key ] = $param;
				}
			}

			return true;

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