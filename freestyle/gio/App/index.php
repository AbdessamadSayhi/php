<?php

require_once 'Exception/RouteNotFoundException.php';
require_once 'Router.php';

$router = new App\Router;

$router->register(
'/'
,function(){
echo 'home';
});

$router->register(
'/about'
,function(){
echo 'Abdessamad';
});

echo $router->resolve($_SERVER['REQUEST_URI']);