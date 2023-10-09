<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);
$routes->post('auth/jwt', '\App\Controllers\Auth\LoginController::jwtLogin');

$routes->resource('livres');
$routes->resource('livres2', ['filter' => 'jwt', 'controller' => '\App\Controllers\Livres']);
