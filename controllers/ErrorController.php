<?php
namespace Controllers;

use Core\Mvc\Controller;

class ErrorController extends Controller {
    public function actionIndex($title = null, $message = null) {
        return $this->render([
            'title'   => $title,
            'message' => $message,
        ]);
    }
}