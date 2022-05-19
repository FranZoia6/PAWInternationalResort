<?php

require __DIR__ . '/../src/bootstrap.php';

//use Paw\Core\Exceptions\RouteNotFoundException;

$router-> direct($request);

/*$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$log->info("Petición a: {$method} {$path}");*/

/*try {
	$router->direct($request);
} catch (RouteNotFoundException $e) {
	$router->direct("not_found");
	$log->info("Status Code: 404 - Route not found", ["Path" => $path]);
} catch (Exception $e) {
	$router->direct('internal_error');
	$log->error("Status Code: 500 - Internal Error", ["Error" => $e]);
}
*/