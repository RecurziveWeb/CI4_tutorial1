<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//if you get a reqest of mthod get
//and it contain /hello in url
//look at Helloworld controller
//and execute index function
$routes->get('/hello', 'Helloworld::index');
