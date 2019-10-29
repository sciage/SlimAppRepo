<?php
/**
 * Created by PhpStorm.
 * User: harishuginval
 * Date: 28/10/19
 * Time: 9:45 AM
 */

require 'vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Middleware\RoutingMiddleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

// Create app
$app = AppFactory::create();
// Register middleware
$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);
// Register routes
$app->get('/[{name}]', function (
    ServerRequestInterface $request,
    ResponseInterface $response,
    array $args
): ResponseInterface {
    $name = $args['name'] ?? 'world';
    $response->getBody()->write("hello $name");
    return $response;
});
// Run app
$app->run();