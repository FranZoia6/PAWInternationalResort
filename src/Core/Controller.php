<?php 

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;

class Controller 
{
	public string $viewsDir;
	public ?string $modelName = null;

	public function __construct() 
	{
		global $connection,$log; //Variables globales creadas en bootstrao.php

		$this->viewsDir = __DIR__ . "/../App/views/";

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
			],
			
			[
				"href" => "/roomsTest",
				"name" => "Rooms Test"
			],
		];

		if(!is_null($this->modelName)){
			$qb = new QueryBuilder($connection,$log);
			$model = new $this->modelName;
			$model->setQueryBuilder($qb);
			$this->setModel($model);
		}

	}
	public function setModel(Model $model)
	{
		$this->model = $model;
	}
}