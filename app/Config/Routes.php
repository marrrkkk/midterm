<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::homepage');
$routes->post('/displayData', 'Home::displayData'); // Using POST for form submission security
