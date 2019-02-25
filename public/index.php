<?php

require '../Core/Router.php';

$router = new Router();

$router->setRoutes( '', [ 'controller' => 'Home', 'action' => 'index' ] );
$router->setRoutes( 'posts', [ 'controller' => 'Posts', 'action' => 'index' ] );
$router->setRoutes( 'users', [ 'controller' => 'Users', 'action' => 'index' ] );

$url = $_SERVER['QUERY_STRING'];


if($router->match($url)){
	echo '<pre>';
	    print_r($router->getParams());
	echo '</pre>';
}
