<?php

$loader=rquire 'vendor/autoload.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request=Request::createFromGlobals();
$response=new Response();


