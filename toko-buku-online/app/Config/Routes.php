<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::images');

service('auth')->routes($routes);


// Admin
$routes->group('Admin',['filter' => ['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminControler::dashboard');
    $routes->get('daftar-buku', 'AdminControler::Daftarbuku');
    $routes->get('transaksi', 'AdminControler::transaksi');
    $routes->get('pelanggan', 'AdminControler::pelanggan');

});
    



