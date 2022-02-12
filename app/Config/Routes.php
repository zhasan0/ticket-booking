<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->get('/search', 'Home::search');

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {
    $routes->get('/dashboard', 'dashboard::index');
    $routes->get('/orders', 'order::index');
    $routes->get('/companies', 'company::index');
    $routes->get('/ticket/origin', 'ticketorigin::index');
    $routes->get('/users', 'user::index');
    $routes->post('booking/(:num)', 'order::booking/$1');
    $routes->post('cancel/(:num)', 'order::cancel/$1');
    $routes->post('approve/(:num)', 'order::approve/$1');
});


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
