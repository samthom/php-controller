
<?php

require 'Framework/lib/Core.php'

$request=Requset::createFromGlobals();

$app=new Framework/Core();

$response=$app->handle($request);
$response->send();

?>
