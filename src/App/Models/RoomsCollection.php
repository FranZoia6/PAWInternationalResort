<?php

namespace Paw\App\Models;

use Paw\Core\Model;

use Paw\App\Models\Room;

class RoomsCollection extends Model
{
    public $table = 'room';

    public function getAll(){
        //crear tantas Room como filas de la tabla Rooms
        $rooms = $this->queryBuilder->select($this->table);
        $roomsCollection = [];
        foreach($rooms as $room){
            $newRoom = new Room;
            $newRoom->set($room);
            $roomsCollection[] = $newRoom;

        }
        return $roomsCollection;
    }
}