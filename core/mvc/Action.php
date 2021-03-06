<?php

namespace Core\mvc;

use Exception;
use Core\BaseObject;
use ReflectionMethod;
/**
 * Action
 */
class Action extends BaseObject 
{
    public $id;
    public $actionMethod;
    public $controller;

    public function run($params) 
    {
        $method = new ReflectionMethod($this->controller, $this->actionMethod);
        $args   = [];
        
        foreach ($method->getParameters() as $param) 
        {
            /* @var $param \ReflectionParameter */
            if (isset($params[$param->name])) 
            {
                $args[$param->name] = $params[$param->name];
            }
            else if ($param->isOptional()) 
            {
                $args[$param->name] = $param->getDefaultValue();
            }
            else 
            {
                throw new Exception("Parameter {<b>$param->name</b>} Is Missing");
            }
        }
        return call_user_func_array([$this->controller, $this->actionMethod], $args);
    }
}