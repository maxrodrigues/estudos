<?php

use Maxrodrigues\Usermanagement\App\Http\Controller\UsersController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

//$App->get('/', function (Request $request, Response $response, $args) {
//    $response->getBody()->write("Hello world!");
//    return $response;
//});

$app->get('/', [UsersController::class, 'index']);

$app->run();