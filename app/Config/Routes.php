<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function(){
    echo "Hallo Mau kemana kamu";
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/user/login', 'pages::index');

$routes->get('/loket', 'loket::index');
$routes->POST('/loket', 'loket::create');
$routes->POST('/loket/edit/(:segment)', 'Loket::edit/$1');
$routes->delete('/loket/(:num)', 'Loket::delete/$1');
$routes->get('/loket', 'loket::save');
    
    $routes->get('/pelayanan', 'pelayanan::index');
    $routes->POST('/pelayanan/edit/(:segment)', 'Pelayanan::edit/$1');
    $routes->delete('/pelayanan/(:num)', 'Pelayanan::delete/$1');
    $routes->POST('/antrian', 'antrian::create');
    $routes->get('/pages/antrian', 'pages::antrian');

$routes->POST('/pages', 'pages:index');
$routes->get('/pages', 'pages::admin');
$routes->POST('/pages', 'pages::daftar');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}