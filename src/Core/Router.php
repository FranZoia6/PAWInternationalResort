<?php
namespace Paw\Core;

use Paw\Core\Exceptions\RouteNotFoundException;

class Router {
	public array $routes = [
		"GET" => [],
		"POST" => []
	];

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
		return explode('@', $this->routes[$http_method][$path]);
	}

	public function direct($path, $http_method = 'GET') {
		if (!$this->exists($path, $http_method)) {
			throw new RouteNotFoundException("No existe ruta para este path");
		}

		
		list($controlador, $metodo) = $this->getController($path, $http_method);

		$nombreControlador = "Paw\\App\\Controllers\\${controlador}";
		$instanciaControlador = new $nombreControlador;
		$instanciaControlador->$metodo();
	}
}