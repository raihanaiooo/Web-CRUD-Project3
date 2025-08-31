<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// PHP routes
$routes->get('/php/berurutan', 'PhpController::berurutan');
$routes->get('/php/pemilihan', 'PhpController::pemilihan');
$routes->get('/php/pengulangan', 'PhpController::pengulangan');
$routes->get('/php/tabel-html', 'PhpController::tabelHtml');
$routes->get('/php/tabel-looping', 'PhpController::tabelLooping');



// Mahasiswa routes
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/detail/(:num)', 'Mahasiswa::detail/$1');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/store', 'Mahasiswa::store');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->get('/mahasiswa/search', 'Mahasiswa::search');
