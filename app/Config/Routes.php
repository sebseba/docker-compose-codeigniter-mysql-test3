<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/todos', 'TodosController::add');
$routes->get('/todos', 'TodosController::listAll');
$routes->get('/runmigration', 'MigrationController::migrate');
