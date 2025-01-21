<?php

include "vendor/autoload.php";
use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Model\Post;
use Fan724\BlogOpp\Model\User;
use Fan724\BlogOpp\Core\DBSQL;
use Fan724\BlogOpp\Model\Role;
use Fan724\BlogOpp\Model\Comment;
use Fan724\BlogOpp\Model\Category;


$dbSql = new DBSQL("users.db");
echo $dbSql->select("users")->where("id", 5)->where("name", "petr")->get();
$db = new Db();
$post = new Post($db);
$user = new User($db);
$role = new Role($db);
$comment = new Comment($db);
$cat = new Category($db);

//Db->table('users')->where('name', '2')->get();

print_r($user->getOne(5));
print_r($post->getAll());

print_r($role->getAll());
print_r($comment->getAll());
print_r($cat->getAll());




/*
//AR CRUD над одной записью в бд через ооп

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