<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
//$routes->setDefaultController('Home');
//$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

$routes->get('/', 'IndexController::index');
$routes->post('Signin', 'IndexController::signin');
$routes->get('Logout', 'IndexController::logout');

$routes->get('Usuarios', 'UsuariosController::index');
$routes->group('apiUsuario', function ($routes) {
    $routes->get('getAll', 'UsuariosController::getAll');
    $routes->post('new', 'UsuariosController::new');
    $routes->get('show/(:num)', 'UsuariosController::show/$1');
    $routes->post('update', 'UsuariosController::update');
    $routes->post('actDes', 'UsuariosController::actDes');
});

$routes->get('Servicios', 'ServiciosController::index');
$routes->group('apiServicios', function ($routes) {
    $routes->get('getAll', 'ServiciosController::getAll');
    $routes->post('new', 'ServiciosController::new');
    $routes->get('show/(:num)', 'ServiciosController::show/$1');
    $routes->post('update', 'ServiciosController::update');
    $routes->post('actDes', 'ServiciosController::actDes');
    $routes->get('getSell', 'ServiciosController::getSell');
});

$routes->get('Ventas', 'VentasController::index');
$routes->group('apiVentas', function ($routes) {
    $routes->post('new', 'VentasController::new');
    $routes->post('insert', 'VentasController::insertarServicios');
});

$routes->get('Ticket', 'ReportesController::viewTicket');
$routes->get('CorteCaja', 'ReportesController::viewCorteCaja');
$routes->get('ReporteMensual', 'ReportesController::viewReporteMensual');

$routes->group('apiReportes', function ($routes) {
    $routes->post('buscarTicket', 'ReportesController::buscarTicket');
    $routes->post('buscarCorte', 'ReportesController::getCorte');
    $routes->post('buscarReporte', 'ReportesController::getReporte');
});

$routes->get('Dashboard','DashboardController::index');
$routes->group('apiDashboard', function ($routes) {
    $routes->get('getUsers', 'DashboardController::getUsers');
    $routes->get('getServicios', 'DashboardController::getServicios');
    $routes->get('getVentas', 'DashboardController::getVentas');
    $routes->get('getIngresos', 'DashboardController::getIngresos');
    $routes->get('getTop10', 'DashboardController::getTop10');
    $routes->post('getVentasMes', 'DashboardController::getVentasMes');
});

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
