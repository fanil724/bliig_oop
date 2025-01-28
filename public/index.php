<?php
session_start();
include __DIR__ . "/../vendor/autoload.php";

use Fan724\BlogOpp\Core\Render;

$controllerName = $_GET['c'] ?? 'posts';
$actionName = $_GET['a'] ?? 'index';
$controllerClass = "Fan724\\BlogOpp\\controllers\\" . ucfirst($controllerName) . "Controller";

try {
    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new Render());
        $controller->runAction($actionName);
        $count = $_COOKIE['count'] ?? 0;
        $count += 1;
        setcookie("count", $count, time() + 3600, '/');
    } else {
        throw new Exception("нет такого контролера");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
