<?php

include "vendor/autoload.php";

use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Model\Post;
use Fan724\BlogOpp\Model\User;
use Fan724\BlogOpp\Core\DBSQL;
use Fan724\BlogOpp\Model\Role;
use Fan724\BlogOpp\Model\Comment;
use Fan724\BlogOpp\Model\Category;


$category = new Category("Бизнес");
$category = $category->insert();
print_r($category);
$post = new Post("курс", "доллра опять превысел 100 рублей", $category->id);
print_r($post);
$post->insert();


/*$dbSql = new DBSQL("users.db");
echo $dbSql->select("users")->where("id", 5)->where("name", "petr")->get();
*/

/*$post = new Post();
print_r($post->getAll());
$cat = new Category();
print_r($cat->getAll());
//Db->table('users')->where('name', '2')->get();
$user = new User();
$role = new Role();
$comment = new Comment();
print_r($user->getOne(5));


print_r($role->getAll());
print_r($comment->getAll());


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