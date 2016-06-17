
<?php

$loader=require 'vendor/autoload.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;

$request=Request::createFromGlobals();

switch($_SERVER['PATH_INFO]){
case '/':
				echo 'This is the homepage';
				break;
case '/about':
				echo 'This is about page';
				break;
default:
				echo 'Not found';
				}

?>
