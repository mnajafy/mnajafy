<?php

namespace Core\Type;

use Core\Type\Type;

class SubmitType
{
    protected $name = 'save';
    protected $class = 'btn btn-primary';

    public function setProperty(array $array = null)
    {
        if ($array)
        {
            foreach ($array as $key => $value) {
                if (property_exists($this, $key))
                {
                    $this->$key = $value;
                }
                else
                {
                    throw new Exception("Property { <b>{$key}</b> } Not Found");
                }
            }
        }
    }

    public function show()
    {
        return "<button class='{$this->class}'>{$this->name}</button>";
    }
}

?>