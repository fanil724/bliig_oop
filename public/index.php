<?php

include __DIR__ . "/../vendor/autoload.php";

use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Model\Post;
use Fan724\BlogOpp\Model\User;
use Fan724\BlogOpp\Core\DBSQL;
use Fan724\BlogOpp\Model\Role;
use Fan724\BlogOpp\Model\Comment;
use Fan724\BlogOpp\Model\Category;
use Fan724\BlogOpp\controllers\PostsController;



$post = Post::getOne(96);
$post->title = "тустовый";
$post->text = "проверка";

$post->id_category = 4;
$post->save();
die();
$controllerName = $_GET['c'] ?? 'posts';
$actionName = $_GET['a'] ?? 'index';
$controllerClass = "Fan724\\BlogOpp\\controllers\\" . ucfirst($controllerName) . "Controller";


if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
}


/*$category = Category::getOne(3);
print_r($category);*/
/*$category = new Category("Бизнес");
$category = $category->insert();
print_r($category);
$post = new Post("курс", "доллра опять превысел 100 рублей", $category->id);
print_r($post);
$post->insert();
*///AR CRUD над одной записью в бд через ооп
/*
// C create
$post = new Post("post");
$post->insert();

//R read
$post=Post::getPost($id);

// U update
$post->title="new";
$post->update();

//D delete

$post->delete();
*/