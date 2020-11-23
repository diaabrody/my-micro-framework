<?php

// get container
 $container= require_once "bootstrap/bootstrap.php";
//init request
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();


//handle routes
$dispatcher = require('routes/web.php');
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$route = $dispatcher->dispatch($httpMethod,$uri);
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


