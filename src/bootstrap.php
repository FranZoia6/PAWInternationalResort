<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Paw\Core\Router;

// Manjeador de logs
$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));

// Manejador de errores
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Declarando el Router
$router = new Router;
$router->get('/', 'PageController@index');
$router->get('/services', 'PageController@services');
$router->get('/contact', 'PageController@contact');
$router->get('/rooms', 'PageController@rooms');
$router->get('/reservation', 'PageController@reservation');
$router->post('/processReservation', 'PageController@processReservation');
$router->get('not_found', 'ErrorController@notFound');
$router->get('internal_error', 'ErrorController@internalError');
