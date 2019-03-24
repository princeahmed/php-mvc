<?php

require_once '../vendor/autoload.php';

$router = new Core\Router();

$router->setRoutes( '', [ 'controller' => 'Home', 'action' => 'Index' ] );
$router->setRoutes( 'admin', [ 'controller' => 'Dashboard', 'action' => 'index', 'namespace' => 'Admin' ] );
$router->setRoutes( 'test', [ 'controller' => 'Test', 'action' => 'index' ] );
$router->setRoutes( 'post', [ 'controller' => 'Posts', 'action' => 'index' ] );
$router->setRoutes( 'css', [ 'controller' => 'Css', 'action' => 'index' ] );
$router->setRoutes( '{action}', [ 'controller' => 'Home' ] );
$router->setRoutes( '{controller}/{action}' );
$router->setRoutes( '{controller}/{id:\d+}/{action}' );

$url = $_SERVER['QUERY_STRING'];

$router->dispatch( $url );
