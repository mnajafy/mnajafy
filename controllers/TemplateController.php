<?php

namespace Controllers;

use Core\Form\Form;
use Core\Framework;
use Model\Category;
use Model\Template;
use Core\Type\TextType;
use Core\Form\Formalpha;
use Core\Mvc\Controller;
use Core\Type\SubmitType;
use Entity\TemplateEntity;

class TemplateController extends Controller 
{
    public function actionIndex($category = null) 
    {
        if ($category == null)
        {
            $category = Framework::$app->request->get('category') == null ? 1 : $request;
        }
        $dataTemplate  = Template::byCategory($category);
        $dataCategory = Category::all();

        return $this->render([
            'dataTemplate'  => $dataTemplate,
            'dataCategory' => $dataCategory,
            'category'      => $category,
        ]);
    }

    public function actionSingle($id) 
    {
        $dataTemplate  = Template::one($id);

        return $this->render([
            'dataTemplate' => $dataTemplate,
        ]);
    }

    public function actionNew() 
    {
        $form = new TemplateEntity();
        $form->add('title', TextType::class, ['label' => 'title', 'name' => 'title']);
        $form->add('content', TextType::class, ['label' => 'content', 'name' => 'content']);
        $form->add('submit', SubmitType::class);
        
        return $this->render([
            'form' => $form,
        ]);
    }

    public function actionEdit($id) 
    { 

        return $this->render();
    }

    public function actionDelete() 
    {

        return $this->render();
    }
}