<?php

require_once 'Exception/RouteNotFoundException.php';
require_once 'Router.php';
require_once '../App/App/Classes/About.php';
require_once '../App/App/Classes/Home.php';
require_once '../App/App/Classes/Posts.php';


$router = new App\Router;

$router
    ->register('/home', [App\Classes\Home::class, 'index'])
    ->register('/about', [App\Classes\About::class, 'index'])
    ->register('/posts', [App\Classes\Posts::class, 'index'])
    ->register('/posts/create', [App\Classes\Posts::class, 'create']);

echo $router->resolve($_SERVER['REQUEST_URI']);