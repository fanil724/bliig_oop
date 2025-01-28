<?php

namespace Fan724\BlogOpp\controllers;

use Fan724\BlogOpp\Model\Post;

class ContactController extends Controller
{

    public function actionIndex()
    {
        echo $this->render('contact', []);
    }
}
