<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Register');
$routes->get('/', 'Home::index', ['filter' => 'guestFilter']);
$routes->get('/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/register', 'Register::register', ['filter' => 'guestFilter']);
 
$routes->get('/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/login', 'Login::authenticate', ['filter' => 'guestFilter']);
 
$routes->get('/logout', 'Login::logout', ['filter' => 'authFilter']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authFilter']);

$routes->group('admin', static function($routes) {
    $routes->group('', [], static function($routes){
        $routes->view('example-page', 'example-page');
    });
    $routes->group('', [], static function($routes){
        $routes->view('example-auth', 'example-auth');
    });

    $routes->group('', ['filter'=>'cifilter:auth' ], static function($routes){
        $routes->get('profile-page', 'example-auth');
    });
});
