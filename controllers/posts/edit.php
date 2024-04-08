<?php 
require "Validator.php";
require "Database.php";
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
        $query = "UPDATE posts SET title = :title, category_id = :category_id WHERE id = :id;";
        $params = [
            ":title" => $_POST["title"],
            ":category_id" => $_POST["category_id"],
            ":id" => $_POST["id"]
        ];
    
        $db->execute($query, $params);
    
        header("Location: /");
        die();
    }
}
$params[":id"] = $_GET["id"];
$query = "SELECT * FROM posts WHERE id = :id";
$post = $db->execute($query, $params)->fetch();

$title = "Edut";
require "views/posts/edit.view.php";