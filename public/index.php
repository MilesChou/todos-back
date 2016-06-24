<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/tasks', function (Request $request, Response $response, $args) {
    return $response;
});

$app->get('/tasks/{id}', function (Request $request, Response $response, $args) {
    return $response;
});

$app->post('/tasks', function (Request $request, Response $response, $args) {
    return $response;
});

$app->put('/tasks/{id}', function (Request $request, Response $response, $args) {
    return $response;
});

$app->delete('/tasks/{id}', function (Request $request, Response $response, $args) {
    return $response;
});

$app->get('/', function (Request $request, Response $response) {
    $setting = $this->get('settings');
    var_dump($setting);
    $response->getBody()->write("Hello World!");
    return $response;
});

$app->run();
