<?php

use MagnoKsm\Router\Router;
use MagnoKsm\DI\Resolver;
use MagnoKsm\Render\PHPRender;

require __DIR__ . '/vendor/autoload.php';

$path = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path, $request_method);

$router->get('/hello', function() {
    return 'Magno';
});

$result = $router->run();

$data = (new Resolver())->method($result['callback'], [
    'params' => $result['params']
]);