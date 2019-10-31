<?php
/**
 * Created by PhpStorm.
 * User: harishuginval
 * Date: 28/10/19
 * Time: 9:45 AM
 */

//require '../src/routes/customers.php';

require 'vendor/autoload.php';

require '../SlimAppRepo/config/db.php';

require '../SlimAppRepo/src/routes/customers.php';

// require 'customers.php';


use Slim\Factory\AppFactory;
use Slim\Middleware\RoutingMiddleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Create app
$app = AppFactory::create();
// Register middleware
$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);
// Register routes
$app->get('/', function (
    Request $request,
    Response $response,
    array $args
): Response {
  //  $name = $request->getAttribute('name');
   // $name = $args['name'] ?? 'world';
    $response->getBody()->write("hello world");
    return $response;
});

$app->get('/second/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("harish");
    return $response;
});

// Run app
$app->run();