<?php
require_once "bootstrap/bootstrap.php";

//init request
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/articles', 'get_all_users_handler');
});
