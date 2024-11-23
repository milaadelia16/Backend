<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/Register', 'AuthController::register');
// $routes->setDefaultConstraint('Auth');
$routes->get('/dashboard', 'Dashboard::index');
// $routes->setDefaultConstraint('Auth');
$routes->get('/login', 'AuthController::Login');
$routes->post('/authenticate', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/store', 'AuthController::store');
// $routes->get('/register', 'Auth::register');
// $routes->get('/helloworld', 'Helloworld::index');
// $routes->get('/page', 'page::index');
// $routes->get('/page1', 'page1::index');