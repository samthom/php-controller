<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
// die(var_dump($app));
// $router = new Router;

// require 'routes.php';

// require $router->direct($uri);

require Router::load('routes.php')
	->direct(Request::uri(),Request::method());

?>