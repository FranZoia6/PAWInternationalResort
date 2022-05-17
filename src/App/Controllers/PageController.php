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
		$titulo = 'index';
		require $this->viewsDir . 'index.view.php';
	}

	public function services() {
		$titulo = 'Servicios';
		require $this->viewsDir . 'servicios.view.php';
	}
	
	public function rooms() {
		$titulo = 'Habitaciones';
		require $this->viewsDir . 'habitaciones.view.php';
	}

	public function reservation() {
		$titulo = 'Reserva';
		require $this->viewsDir . 'reserva.view.php';
	}

	public function contact() {
		$titulo = 'Contacto';
		require $this->viewsDir . 'contacto.view.php';
	}

	public function processReservation() {
		$titulo = 'Reserva';
		$formulario = $_POST;

		require $this->viewsDir . 'confirmacionReserva.view.php';
	}
}