<?php

namespace Core\Form;

use Core\Framework;
use Core\BaseObject;

class Form extends BaseObject 
{
    public function created($name, $value, $small = null)
    {
        return "<div class='form-group'>{$this->getLabel($name)}{$value}{$this->small($small)}</div>";
    }

    public function getLabel($name)
    {
        return "<label for='{$name}'>" . ucfirst($name) . "</label>";
    }

    public function attr($attr)
    {
        foreach ($attr as $key => $value) 
        {
            $result[] = "{$key}='{$value}'";
        }
        return implode(' ', $result);
    }

    public function small($array = null)
    {
        if ($array != null)
        {
            $result = [];
            foreach ($array as $key => $msg) {
                $result[$key] = "<small class='form-small'>{$msg}</small>";
            }
            return implode('', $result);
        }
    }

    public function isEmpty($name, $msgErr = null)
    {
        if ($msgErr)
        {
            if (!empty(Framework::$app->request->post()) AND empty(Framework::$app->request->post($name)))
            {
                return "<small class='form-small text-danger'><span class='badge badge-error'>Error</span> {$msgErr}</small>";
            }
        }
        return null;
        
    }

    public function input($name, array $attr1 = null, $isEmptyMsg = null, $small = null)
    {
        $attr2 = [
            'type' => 'text',
            'class' => 'form-control',
            'name' => $name,
            'id' => $name,
            'placeholder' => $name,
            'value' => Framework::$app->request->post($name),
        ];
        $attr = $attr1 ? array_merge($attr2, $attr1) : $attr2;
        $result = "<input {$this->attr($attr)}>{$this->isEmpty($name, $isEmptyMsg)}";
        return $this->created($name, $result, $small);
    }

    public function file($name, array $attr1 = null, $isEmptyMsg = null, $small = null)
    {
        $attr2 = [
            'type' => 'file',
            'class' => 'form-control-file',
            'name' => $name,
            'id' => $name,
        ];
        $attr = $attr1 ? array_merge($attr2, $attr1) : $attr2;
        $result = "<input {$this->attr($attr)}>{$this->isEmpty($name, $isEmptyMsg)}";
        return $this->created($name, $result, $small);
    }

    public function select($name, array $attr1 = null, $isEmptyMsg = null, $small = null, $options = null)
    {
        $attr2 = [
            'type' => 'file',
            'class' => 'form-control',
            'name' => $name,
            'id' => $name,
        ];
        
        $attr = $attr1 ? array_merge($attr2, $attr1) : $attr2;
        $result = "<select {$this->attr($attr)}>{$this->option($options)}</select>{$this->isEmpty($name, $isEmptyMsg)}";
        return $this->created($name, $result, $small);
    }

    public function option($options)
    {
        $optionAll = [];
        foreach ($options as $key => $value) {
            $optionAll[] = "<option value='{$key}'>{$value}</option>";
        }
        return implode('', $optionAll);
    }

    public function textarea($name, array $attr1 = null, $isEmpty = null, $small = null)
    {
        $attr2 = [
            'class' => 'form-control',
            'name' => $name,
            'id' => $name,
            'placeholder' => $name,
            'row' => 3,
        ];
        $attr = $attr1 ? array_merge($attr2, $attr1) : $attr2;
        $result = "<textarea {$this->attr($attr)}>" . Framework::$app->request->post($name) . "</textarea>" . $this->isEmpty($name, $isEmpty);
        return $this->created($name, $result, $small);
    }

    public function submit($name = null)
    {
        return '<button class="btn btn-primary" type="submit">'.($name ? $name : "Valider").'</button>';
    }
}