<?php

namespace Controllers;

use Core\Mvc\Controller;

class HomeController extends Controller 
{
    public $layout = 'main';
    
    public function actionIndex() 
    {
        
        return $this->render();
    }
}