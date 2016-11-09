<?php 
$app = [];
$app['config'] = require 'config.php';//config.php contais database details and return database array
// $app=[
	//'config'=>database[]
//]
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';
//require 'core/Request.php';
//require 'core/Router.php';

$app['database'] = new QueryBuilder(

	Connection::make($app['config']['database'])
		);

 ?>