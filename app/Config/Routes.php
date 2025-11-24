<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/laporan', 'Laporan::index');
$routes->get('/laporan/create', 'Laporan::create');
$routes->post('/laporan/store', 'Laporan::store');
$routes->get('/laporan/edit/(:num)', 'Laporan::edit/$1');
$routes->post('/laporan/update/(:num)', 'Laporan::update/$1');
$routes->get('/laporan/delete/(:num)', 'Laporan::delete/$1');