<?php

namespace Core\Entity;

class Entity
{
    public $error = null;

    public function add($property, $classNmae, $array = null)
    {
        if (property_exists($this, $property))
        {
            $this->$property = new $classNmae($array);
        }
    }
}