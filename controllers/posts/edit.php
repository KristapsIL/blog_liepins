<?php 

require "Database.php";
$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $query = "UPDATE posts SET title = :title, category_id = :category_id WHERE id = :id;";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"],
        ":id" => $_GET["id"]
    ];

    $db->execute($query, $params);

    header("Location: /");
    die();
}


$title = "Edut";
require "views/posts/edit.view.php";