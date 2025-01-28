<?php

namespace Fan724\BlogOpp\controllers;

use  Fan724\BlogOpp\Interfaces\IRender;
use  Fan724\BlogOpp\Model\User;


abstract class Controller
{
    protected IRender $render;

    public function __construct(IRender $render)
    {
        $this->render = $render;
    }

    public function runAction($action)
    {
        $method = "action" . ucfirst($action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404 нет такого Action";
        }
    }

    public function render($template, $params = []): string
    {
        return $this->renderTemplate('layouts/main', [
            'menu' => $this->renderTemplate('menu', [
                'user' => User::getName()
            ]),
            'content' => $this->renderTemplate($template, $params)
        ]);
    }

    public function renderTemplate($template, $params = [])
    {
        return $this->render->renderTemplate($template, $params);
    }
}
