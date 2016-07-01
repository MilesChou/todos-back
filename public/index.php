<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

# DB Configurations
$dbhost = 'database';
$dbname = 'default';
$dbuser = 'root';
$dbpass = 'password';

RedBeanPHP\Facade::setup("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// Configurations
$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new Slim\App($config);

$app->get('/tasks', function (Request $request, Response $response, $args) {
    $taskService = new Todos\Service\Task();
    $tasks = $taskService->getList();

    return $response->withJson($tasks, 200);
});

$app->get('/tasks/{id}', function (Request $request, Response $response, $args) {
    $taskService = new Todos\Service\Task();
    $task = $taskService->find($args['id']);

    return $response->withJson($task, 200);
});

$app->post('/tasks', function (Request $request, Response $response, $args) {
    $taskService = new Todos\Service\Task();
    $data = $request->getParsedBody();

    $taskService->create($data);

    return $response;
});

$app->put('/tasks/{id}', function (Request $request, Response $response, $args) {
    $taskService = new Todos\Service\Task();
    $data = $request->getParsedBody();

    $taskService->update($args['id'], $data);

    return $response;
});

$app->delete('/tasks/{id}', function (Request $request, Response $response, $args) {
    $taskService = new Todos\Service\Task();
    $taskService->remove($args['id']);

    return $response;
});

$app->get('/', function (Request $request, Response $response) {
    $setting = $this->get('settings');
    var_dump($setting);
    $response->getBody()->write("Hello World!");
    return $response;
});

$app->run();
