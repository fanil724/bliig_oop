<?php

namespace Fan724\BlogOpp\controllers;

class AuthController extends Controller
{
    public function actionLogin()
    {
        echo "login";
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        if ($login == 'admin' && $pass == 'admin') {
            $_SESSION['login'] = 'admin';
            header('Location: /');
            exit();
        }
        header('Location: /');
    }

    public function actionLogout()
    {
        session_destroy();
        header('Location: /');
        exit();
    }
}
