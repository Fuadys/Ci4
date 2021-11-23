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
//customer//
$routes->get('/customer', 'CustomerController::index');
$routes->get('/customer/tambah', 'CustomerController::tambah');
$routes->post('/customer/tambahcustomer', 'CustomerController::tambahcustomer');
$routes->get('/customer/edit/(:num)', 'CustomerController::editcustomer/$1');
$routes->post('/customer/update/(:num)', 'CustomerController::updatecustomer/$1');
$routes->get('/customer/delete/(:num)', 'CustomerController::deletecustomer/$1');
$routes->get('customer/info', 'CustomerController::info');

//pemesanan//
$routes->get('/pemesanan', 'PemesananController::index');
$routes->get('/pemesanan/tambah', 'PemesananController::tambah');
$routes->post('/pemesanan/tambahpemesanan', 'PemesananController::tambahpemesanan');
$routes->get('/pemesanan/edit/(:num)', 'PemesananController::editpemesanan/$1');
$routes->post('/pemesanan/update/(:num)', 'PemesananController::updatepemesanan/$1');
$routes->get('/pemesanan/delete/(:num)', 'PemesananController::deletepemesanan/$1');

//film//
$routes->get('/film', 'FilmController::index');
$routes->get('/film/tambah', 'FilmController::tambah');
$routes->post('/film/tambahfilm', 'FilmController::tambahfilm');
$routes->get('/film/edit/(:num)', 'FilmController::editfilm/$1');
$routes->post('/film/update/(:num)', 'FilmController::updatefilm/$1');
$routes->get('/film/delete/(:num)', 'FilmController::deletefilm/$1');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
