<?php
if(dd($_SERVER["REQUEST_METHOD"]) == "POST"){

    $query = "INSERT INTO posts (title, category_id)
     VALUES (:title, :category_id);";
}

$title = "Create";
require "views/posts-create.view.php";
