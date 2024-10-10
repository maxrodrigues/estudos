<?php declare(strict_types=1);


use Maxrodrigues\Usermanagement\Controller\UsersController;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

require '../config/bootstrap.php';

$app = AppFactory::create();

//$app->get('/', function (Request $request, Response $response, $args) {
//    $response->getBody()->write("Hello world!");
//    return $response;
//});

$app->get('/', [UsersController::class, 'index']);
$app->post('/', [UsersController::class, 'store']);
$app->put('/{id}', [UsersController::class, 'update']);
$app->delete('/{id}', [UsersController::class, 'destroy']);

$app->run();
