<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//if route has get request 
//and two numbers passed
//call Calculator Controller and add function with $1 and $2 parameters respectedly
$routes->get('/add/(:num)/(:num)', 'Calculator::add/$1/$2');

