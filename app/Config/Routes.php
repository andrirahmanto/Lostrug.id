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

// guest
$routes->get('/', 'User::index');
$routes->get('/catalogue', 'User::catalogue');
$routes->post('/login', 'Auth::loginGoogle');
$routes->get('/logout', 'Auth::userLogout');
$routes->get('/admin/login', 'Auth::index');
$routes->post('/admin/sendLogin', 'Auth::sendLogin');
$routes->get('/admin/logout', 'Auth::adminLogout');
$routes->post('/order/viewmodaldetail', 'User::viewmodaldetail');

// user
$routes->group('', ['filter' => 'userfilter'], function ($routes) {
	//myorder
	$routes->get('/myorder', 'User::myorder');
	$routes->get('/myorder/viewtable', 'User::viewtable');
	$routes->post('/myorder/cancelorder', 'User::cancelorder');
	$routes->post('/myorder/detailorder', 'User::detailorder');
	$routes->post('/myorder/viewmodalpay', 'User::viewmodalpay');
	$routes->post('/myorder/uploadimagepay', 'User::uploadimagepay');
	// order
	$routes->post('/order/nextorder', 'User::nextorder');
	$routes->post('/order/createOrder', 'User::createOrder');
});

//admin
$routes->group('', ['filter' => 'adminfilter'], function ($routes) {
	// Order
	$routes->get('/admin', 'Order::index');
	$routes->get('/admin/order', 'Order::index');
	$routes->get('/admin/order/viewdataadmin', 'Order::viewdataadmin');
	$routes->get('/admin/order/viewtable', 'Order::viewtable');
	$routes->get('/admin/order/viewadd', 'Order::viewadd');
	$routes->post('/admin/order/createOrder', 'Order::createOrder');
	$routes->post('/admin/order/viewedit', 'Order::viewedit');
	$routes->post('/admin/order/updateOrder', 'Order::updateOrder');
	$routes->post('/admin/order/deleteOrder', 'Order::deleteOrder');
	// Product	
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
	$routes->post('/admin/account/admin/createAdmin', 'AccountAdmin::createAdmin');
	$routes->post('/admin/account/admin/viewedit', 'AccountAdmin::viewedit');
	$routes->post('/admin/account/admin/updateAdmin', 'AccountAdmin::updateAdmin');
	$routes->post('/admin/account/admin/deleteAdmin', 'AccountAdmin::deleteAdmin');
	// account User
	$routes->get('/admin/account/user', 'AccountUser::index');
	$routes->get('/admin/account/user/viewtable', 'AccountUser::viewtable');
	$routes->post('/admin/account/user/deleteUser', 'AccountUser::deleteUser');
});




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
