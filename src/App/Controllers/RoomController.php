<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;
use Paw\App\Models\RoomsCollection;

class RoomController extends Controller
{
    public ?string $modelName = RoomsCollection::class;

    public function index()
    {
        $titulo = "Habitaciones";
        $rooms = $this->model->getAll();
        require $this->viewsDir . 'rooms.index.view.php';

    }

    public function get()
    {

    }

    public function edit()
    {

    }

    public function set()
    {

    }
}