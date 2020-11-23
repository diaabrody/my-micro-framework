<?php
require_once "bootstrap/bootstrap.php";
//init request
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();


//handle routes
$dispatcher = require('app/Config/routes.php');
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
        $handler     = $route[1];
        $vars = $route[2];
        // controller
        var_dump($handler);die;
        // ... call $handler with $vars
        break;
}

