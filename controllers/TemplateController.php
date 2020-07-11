<?php

namespace Controllers;

use Model\Category;
use Model\Template;
use Core\Mvc\Controller;
use Core\Request\Request;

class TemplateController extends Controller 
{
    public function actionIndex($category = null) 
    {
        $dataGallery  = Template::byCategory($category);
        $dataCategory = Category::all();
        $request = new Request();

        return $this->render([
            'dataGallery'  => $dataGallery,
            'dataCategory' => $dataCategory,
            'request'      => $request,
        ]);
    }
}