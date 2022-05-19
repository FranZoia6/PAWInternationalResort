<?php
namespace Paw\Core;

use Paw\Core\Request;
use Paw\Core\Exceptions\RouteNotFoundException;
use Paw\Core\Exceptions;
use Paw\Core\Traits\Loggable;


class Router {
	use Loggable;

	public array $routes = [
		"GET" => [],
		"POST" => []
	];

	public string $notFound = 'not_found';
	public string $internalError = 'internal_error';

	public function _construct()
	{
		$this->get($this->$notFound , 'ErrorController@notFound');
		$this->get($this->$internalError, 'ErrorController@internalError');
	}
	

	public function loadRoutes($path, $action, $method = 'GET') {
		$this->routes[$method][$path] = $action;
	}

	public function get($path, $accion) {
		$this->loadRoutes($path, $accion, 'GET');
	}

	public function post($path, $accion) {
		$this->loadRoutes($path, $accion, 'POST');
	}

	public function exists($path, $method) {
		return array_key_exists($path, $this->routes[$method]);
	}

	public function getController($path, $http_method) {
		// seria equivalente a hacer esto en js --> const [controlador, metodo] = this.routes(path).split('@');
		if (!$this->exists($path, $http_method)){
			throw new RouteNotFoundException ("No existe Ruta para ese Path");
		}
		return explode('@', $this->routes[$http_method][$path]);
	}

	public function call($controller, $method)
	{
		$nombreControlador = "Paw\\App\\Controllers\\{$controller}";
		$instanciaControlador = new $nombreControlador;
		$instanciaControlador->$method();
	}

	public function direct(Request $request) {
		try{
			list ($path, $http_method) = $request -> route();
			list($controller, $method) = $this->getController($path, $http_method);
			$this-> logger
				->info(
					"Status Code: 200",
					[
						"Path"=>$path,
						"Method"=>$http_method,

					]
				);

		} catch(RouteNotFoundException $e){
			list($controller, $method) = $this->getController($this->notFound, "GET");

			$this-> logger
			->debug(
				"Status Code: 404 - Route Not Found",
				[
					"Error"=>$e,
				]
			);

		} catch (Exception $e){
			list($controller, $method) = $this->getController($this->internalError, "GET");
			print_r($controller);
			die();
			$this-> logger
			->error(
				"Status Code: 500 - Internal Server Error",
				[
					"Error"=>$e,
				]
			);
		}finally{
			$this->call($controller, $method);
		}
	}
}