<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \MagnoKsm\App;
$app->setRenderer(new \MagnoKsm\Render\PHPRender());

$app->get('/hello/{name}', function ($params) {
    return "<h1>{$params[1]}</h1>";
});
$app->get('/home/{name}', 'MagnoKsm\Controllers\HomeController@index');
$app->run();