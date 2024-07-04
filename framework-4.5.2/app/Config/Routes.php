<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Notice::index');
$routes->get('/writePage', 'Notice::fowardWrite');
$routes->get('/detailPage', 'Notice::fowardDetail');
