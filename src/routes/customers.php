<?php
/**
 * Created by PhpStorm.
 * User: harishuginval
 * Date: 28/10/19
 * Time: 9:45 AM
 */

//require '../src/routes/customers.php';

use Slim\Factory\AppFactory;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Create app
$app = AppFactory::create();
// Register middleware
$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->get('/what/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("harish");
    return $response;
});



// Run app