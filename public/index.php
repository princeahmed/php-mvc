<?php

require_once '../vendor/autoload.php';

spl_autoload_register( function ( $class_name ) {
	$root = dirname( __DIR__ );
	$file = $root . '/' . str_replace( '\\', '/', $class_name ) . '.php';
	if ( is_readable( $file ) ) {
		require_once $file;
	}
}
);

$router = new Core\Router();

$router->setRoutes( '', [ 'controller' => 'Home', 'action' => 'Index' ] );
$router->setRoutes( 'admin', [ 'controller' => 'Dashboard', 'action' => 'index', 'namespace' => 'Admin' ] );
$router->setRoutes( 'test', [ 'controller' => 'Test', 'action' => 'index' ] );
$router->setRoutes( '{action}', [ 'controller' => 'Home' ] );
$router->setRoutes( '{controller}/{action}' );
$router->setRoutes( '{controller}/{id:\d+}/{action}' );

$url = $_SERVER['QUERY_STRING'];

$router->dispatch( $url );
