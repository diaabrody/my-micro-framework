<?php

use DI\ContainerBuilder;

require "./vendor/autoload.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$containerBuilder= new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . "/config.php");
$container = $containerBuilder->build();
return $container;