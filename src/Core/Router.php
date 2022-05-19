<?php
namespace Paw\Core;

use Paw\Core\Request;
use Paw\Core\Exceptions;
use Paw\Core\Exceptions\RouteNotFoundException;

class Router {
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
		if (!$this->exists($path, $http_method)) {
			throw new RouteNotFoundException("No existe ruta para este path");
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
			$this->call($controller, $method);
		}catch(RouteNotFoundException $e){
			list($controller, $method) = $this->getController($this->notFound, "GET");
			$this->call($controller, $method);

		}catch (Exeption $e){

			list($controller, $method) = $this->getController($this->internalError, "GET");
			$this->call($controller, $method);
		}
	}
}