<?php

namespace Fan724\BlogOpp\controllers;

use Fan724\BlogOpp\Model\Post;
use Fan724\BlogOpp\Model\User;


class PostsController extends Controller
{

    public function actionIndex()
    {
        $posts = Post::getAll();
        $message = $_SESSION['message'] ?? null;
        $count = $_COOKIE['count'] ?? 0;
        $_SESSION['message'] = null;
        echo $this->render('posts/index', [
            'posts' => $posts,
            'message' => $message,
            'count' => $count
        ]);
    }

    public function actionSave()
    {
        $title = $_POST['title'];
        $text = $_POST['text'];
        $_SESSION['message'] = null;


        if (empty($title)) {
            $_SESSION['message'] = "title пустой";
            header('Location: \post');
            exit;
        }

        $post = new Post($title, $text);
        $post->save();
        $_SESSION['message'] = "пост добавлен";
        header('Location: /posts');
    }

    public function actionDelete()
    {
        if (!User::isAdmin()) {
            $_SESSION['message'] = "Вы не админ!";
            header('Location: /posts');
            exit();
        }

        $id = $_GET['id'];
        $post = Post::getOne($id);
        $post->delete();
        $_SESSION['message'] = "Пост удален";
        header('Location: /posts');
    }

    public function actionShow()
    {
        $id = (int)$_GET['id'];
        $post = Post::getOne($id);

        echo $this->render('posts/post', [
            'post' => $post
        ]);
    }
}
