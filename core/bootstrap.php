<?php 
//$app = [];
//$app['config'] = require 'config.php';//config.php contais database details and return database array
// $app=[
	//'config'=>database[]
//]
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';
//require 'core/Request.php';
//require 'core/Router.php';
App::bind('config',require 'config.php');
App::bind('database',new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

 ?>