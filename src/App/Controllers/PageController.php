<?php

namespace Paw\App\Controllers;

class PageController {
	public string $viewsDir;

	public function __construct() {
		$this->viewsDir = __DIR__ . "/../views/";

		$this->menu = [
			[
				"href" => "/",
				"name" => "Home"
			],
			[
				"href" => "/rooms",
				"name" => "Habitaciones"
			],
			[
				"href" => "/reservation",
				"name" => "Reserva"
			],
			[
				"href" => "/services",
				"name" => "Servicios"
			],
			[
				"href" => "/contact",
				"name" => "Contacto"
			]
		];
	}

	public function index() {
		require $this->viewsDir . 'index.view.php';
	}

	public function services() {
		require $this->viewsDir . 'servicios.view.php';
	}
	
	public function rooms() {
		require $this->viewsDir . 'habitaciones.view.php';
	}

	public function reservation() {
		require $this->viewsDir . 'reserva.view.php';
	}

	public function contact() {
		require $this->viewsDir . 'contacto.view.php';
	}

	public function processReservation() {
		$formulario = $_POST;

		require $this->viewsDir . 'confirmacionReserva.view.php';
	}
}