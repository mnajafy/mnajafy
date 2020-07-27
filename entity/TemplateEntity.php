<?php

namespace Entity;

use Exception;
use Core\Entity\Entity;

class TemplateEntity
{
    public $id;
    public $title;
    public $content;
    public $img;
    public $category_id;
    public $created_at;
    public $submit;
    public $error = null;

    public function add($property, $classNmae, $array = null)
    {
        if (property_exists($this, $property))
        {
            $class = new $classNmae();
            $class->setProperty($array);
            $this->$property = $class->show($array);
        }
        else
        {
            throw new Exception("Property { <b>{$property}</b> } Not Found");
        }
    }
}