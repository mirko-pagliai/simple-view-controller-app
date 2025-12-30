<?php
declare(strict_types=1);

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

use App\Controller\HomeController;

$routes = new RouteCollection();
$routes->add('home', new Route(path: '/', defaults: [
    '_controller' => [HomeController::class, 'index'],
]));

return $routes;
