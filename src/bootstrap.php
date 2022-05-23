<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use  Dotenv\Dotenv;

use Paw\Core\Request;
use Paw\Core\Router;
use Paw\Core\Config;
use Paw\Core\Database\ConnectionBuilder;


$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv-> load();

$config = new Config;

// Manjeador de logs
$log = new Logger('mvc-app');
$handler = new StreamHandler($config->get("LOG_PATH"));
$handler -> setLevel($config->get('LOG_LEVEL'));
$log->pushHandler($handler);

$connectionBuilder = new ConnectionBuilder;
$connectionBuilder-> setLogger($log);
$connection = $connectionBuilder->make($config);

// Manejador de errores
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$request = new Request;

// Declarando el Router
$router = new Router;
$router->setLogger($log);
$router->get('/', 'PageController@index');
$router->get('/services', 'PageController@services');
$router->get('/contact', 'PageController@contact');
$router->get('/rooms', 'PageController@rooms');
$router->get('/reservation', 'PageController@reservation');
$router->post('/processReservation', 'PageController@processReservation');
$router->get('/roomsTest', 'RoomController@index');
$router->get('/roomTest', 'RoomController@get');
$router->get('/roomTest/edit', 'RoomController@edit');
$router->post('/roomTest/edit', 'RoomController@set');