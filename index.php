<?php

// get container
 $container= require_once "bootstrap/bootstrap.php";
//init request
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();


//handle routes
$dispatcher = require('App/Config/routes.php');
$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);



switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $route[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller= $route[1];
        $args = $route[2];
        $container->call($controller , $args);
        break;
}


