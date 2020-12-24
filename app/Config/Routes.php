<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// Product
$routes->get('/admin', 'Product::index');
$routes->get('/admin/product', 'Product::index');
$routes->get('/admin/product/viewtable', 'Product::viewtable');
$routes->get('/admin/product/viewadd', 'Product::viewadd');
$routes->post('/admin/product/createProduct', 'Product::createProduct');
$routes->post('/admin/product/viewedit', 'Product::viewedit');
$routes->post('/admin/product/updateProduct', 'Product::updateProduct');
$routes->post('/admin/product/deleteProduct', 'Product::deleteProduct');
// account Admin
$routes->get('/admin/account/admin', 'AccountAdmin::index');
$routes->get('/admin/account/admin/viewtable', 'AccountAdmin::viewtable');
$routes->get('/admin/account/admin/viewadd', 'AccountAdmin::viewadd');
// account User
$routes->get('/admin/account/user', 'Admin::index');
// Order
$routes->get('/admin/order', 'Order::index');


/**
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
