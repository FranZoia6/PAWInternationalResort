<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Exception;
use Paw\Core\Exceptions\InvalidValueFormatException;

class Room extends Model
{
    public $table = 'room';

    public $fields = [
        "description" => null,
        "name" => null,
        "price"=> null,
        "visible"=> null,

    ];

    public function setDescription(string $description)
    {
        if(strlen($description) > 300){
            throw new InvalidValueFormatException("La descripcion no debe superar los 300 caracteres");
        }
        $this ->fields["description"] = $description;
    }

    public function setName(string $name)
    {
        if(strlen($name) > 30){
            throw new InvalidValueFormatException("El nombre  no debe superar los 30 caracteres");
        }
        $this ->fields["name"] = $name;
    }

    public function setPrice(string $price)
    {
        $this ->fields["price"] = $price;
    }

    public function setVisible(string $visible)
    {
        $this ->fields["visible"] = $visible;
    }

    public function set(array $values)
    {
        foreach(array_keys($this->fields)as $field){
            continue;
        }
        $method = "set" . ucfirst($field);
        $this-> $method($values[$field]);
    }
}