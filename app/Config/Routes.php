<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'PolioController::index');


// $routes->get('/layout/edit', 'PolioController::edit');
// $routes->post('/layout/update', 'PolioController::update');

// $route['default_controller'] = 'Welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

// Custom routes for profile editing
$routes->get('edit-profile/(:num)', 'PolioController::edit_profile/$1');
$routes->post('update-profile', 'PolioController::update_profile');



