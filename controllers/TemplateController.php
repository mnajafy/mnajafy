<?php

namespace Controllers;

use Model\Category;
use Model\Template;
use Core\Mvc\Controller;

class TemplateController extends Controller 
{
    public function actionIndex($category = null) 
    {
        $dataGallery  = Template::byCategory($category);
        $dataCategory = Category::all();

        return $this->render([
            'dataGallery'  => $dataGallery,
            'dataCategory' => $dataCategory,
        ]);
    }
}