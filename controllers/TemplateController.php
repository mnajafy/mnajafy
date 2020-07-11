<?php

namespace Controllers;

use Model\Category;
use Model\Template;
use Core\Mvc\Controller;

class TemplateController extends Controller 
{
    public function actionIndex() 
    {
        $dataGallery  = Template::byCategory();
        $dataCategory = Category::all();

        return $this->render([
            'dataGallery'  => $dataGallery,
            'dataCategory' => $dataCategory,
        ]);
    }
}