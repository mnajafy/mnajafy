<?php

namespace Core\Type;

use Core\Type\Type;

class TextType extends Type
{
    public function show()
    {
        $html = "<div class='form-group'>";
        $html .= "<label for='{$this->id}'>{$this->label}</label>";
        $html .= "<input class='{$this->class}' type='{$this->type}' name='{$this->name}' id='{$this->id}' minlength='{$this->minlength}' maxlength='{$this->maxlength}' {$this->value} {$this->disabled} {$this->required}>";
        $html .= $this->msg;
        $html .= "</div>";
        return $html;
    }
}