<?php

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Endpoint /uma-api
$app->get('/uma-api', function (Request $request, Response $response) {
    $data = ["message" => "Uma API (Application Programming Interface) é um conjunto de regras que permite a comunicação entre sistemas diferentes."];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json');
});

// Endpoint /codigos
$app->get('/codigos', function (Request $request, Response $response) {
    $data = ["message" => "Os códigos de status HTTP são usados para indicar o resultado de uma requisição, como 200 (OK), 404 (Not Found) e 500 (Internal Server Error)."];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json');
});

// Endpoint /erro
$app->get('/erro', function (Request $request, Response $response) {
    $data = ["error" => "Não encontrado"];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
});

$app->run();
