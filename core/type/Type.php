<?php

namespace Core\Type;

use Exception;
use Core\Framework;

class Type
{
    protected $label;
    protected $name;
    protected $id;
    protected $type = 'text';
    protected $class = 'form-control';
    protected $value;
    protected $placeholder;
    protected $minlength;
    protected $maxlength;
    protected $required = 'required';
    protected $disabled;
    protected $msg;

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

        if (!$this->value)
        {
            $this->value = Framework::$app->request->post($this->name);
        }
    }
}