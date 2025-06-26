<?php
require 'vendor/autoload.php';
require 'vendor/altorouter/altorouter/AltoRouter.php';


$router = new AltoRouter();
$router->setBasePath('/mangatheque');

$router->map('GET','/','ControllerPage#homePage','homepage');

$match = $router->match();

if(is_array($match)){
    list($controller, $action) = explode("#", $match['target']);
    $objet = new $controller();

    if (is_callable(array($objet, $action))) {
     call_user_func_array(array($objet, $action), $match['params']);   
    }else {
        http_response_code(404);
    }
}
