<?php

use MagnoKsm\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$path = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path, $request_method);

$router->get('/hello', function() {
    return 'Magno';
});

$result = $router->run();
var_dump($result['callback']());