<?php

require '../Core/Router.php';

$router = new Router();

$router->setRoutes( '', ['controller'=>'Home', 'action'=>'Index']);
$router->setRoutes( '{controller}/{action}');

$url = $_SERVER['QUERY_STRING'];


if($router->match($url)){
	echo '<pre>';
	    print_r($router->getParams());
	echo '</pre>';
}

