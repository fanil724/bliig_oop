<?php

namespace Fan724\BlogOpp\controllers;

use Fan724\BlogOpp\Model\Post;

class ServicesController
{
    public function runAction($action)
    {
        $method = "action" . ucfirst($action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404 нет такого Action";
        }
    }
    public function actionIndex()
    {
        echo $this->renderTemplate('services');
    }

    public function renderTemplate($template): string
    {
        ob_clean();
        include '../src/views/' . $template . ".php";
        return ob_get_clean();
    }
}
