<?php 
/*$router->define([
	''=>'controllers/index.php',
	'about'=>'controllers/about.php',
	'about/culture'=>'controllers/about-culture.php',
	'contact'=>'controllers/contact.php',
	'names'=>'controlles/add-name.php'
	])*/
	$router->get('','PageController@home');
	$router->get('about','PageController@about');
	$router->get('contact','PageController@contact');
	$router->post('users','UsersController@store');
	$router->get('users','UsersController@index');

 ?>