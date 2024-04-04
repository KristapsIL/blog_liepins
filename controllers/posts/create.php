<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST" ){

    $errors = [];

    if(!Validator::string($_POST["title"], min: 1,maxlen: 255) ){
        $errors["title"] = "Title can not be empty or longer than the max lenght";
    }
    if(!Validator::number($_POST["category_id"], min: 1, maxlen: 3)){
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
require "views/posts/create.view.php";