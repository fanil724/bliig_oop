<?php

namespace Fan724\BlogOpp\controllers;

class PostsController
{
    public function runAction($action)
    {
        $method = "action" . ucfirst($action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "нет такого контроллера";
        }
    }
    public function actionIndex()
    {
        echo "ПОсты";
    }

    public function actionPost()
    {
        echo "ПОсты";
    }
}
