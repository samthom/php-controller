
<?php

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
