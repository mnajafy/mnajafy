<?php

namespace Controllers;

use Core\Controller\Controller;

class HomeController extends Controller 
{
    public $layout = 'main';
    
    public function actionIndex() 
    {

        return $this->render();
    }

    public function actionHome() 
    {

        echo 'hello world !';
    }
}