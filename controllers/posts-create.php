<?php
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST" ){

    $errors = [];

    if(trim($_POST["title"]) == null){
        $errors["title"] = "Title can not be empty";
    }
    if(strlen($_POST["title"]) > 255){
        $errors["title"] = "Title can not be longer than 255 chars";
    }
    if($_POST["category_id"] > 3 || $_POST["category_id"] < 1){
        $errors["category_id"] = "category is invalid";
    }

    if(empty($errors)){
        $query = "INSERT INTO posts (title, category_id)
        VALUES (:title, :category_id);";
       
       $params = [
           ":title" => $_POST["title"],
           ":category_id" => $_POST["category_id"]
       ];
       $db->execute($query, $params);
   
       header("Location: /");
       die();
    }

}

$title = "Create";
require "views/posts-create.view.php";
// &&  &&  && strlen($_POST["title"]) <= 255