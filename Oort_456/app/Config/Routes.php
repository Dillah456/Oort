<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Service', 'Service::index');
$routes->get('/About', 'Home::about_me');
$routes->get('/cv_ummi', 'Home::curiculum_vitae');
$routes->get('/cv', 'CvController::index');
$routes->get('/Dashboard', 'Dashboard::index');
$routes->post('/diphda/save', 'Formalhault::save');

