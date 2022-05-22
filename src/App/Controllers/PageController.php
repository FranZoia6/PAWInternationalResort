<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class PageController extends Controller 
{

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