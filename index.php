<?php
require "functions.php";
require "Database.php";

$config = require ("config.php");

$query = "SELECT * FROM posts";
$params = [];
if(isset($_GET["id"]) && $_GET["id"] !=null){
    $id = trim($_GET["id"]);
    $query .=" WHERE id =:id";
    $params[":id"] = $id;
}
if(isset($_GET["name"]) && $_GET["name"] !=null){
    $name = trim($_GET["name"]);
    $query .=" LEFT JOIN categories ON posts.category_id = categories.id WHERE NAME =:name";
    $params[":name"] = $name;
}
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Main";
require "views/index.view.php";



