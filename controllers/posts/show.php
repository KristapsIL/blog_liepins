<?php

require "Database.php";
$config = require ("config.php");

$params[":id"] = $_GET["id"];
$query = "SELECT * FROM posts WHERE id = :id";

$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

$title = "Show";
require "views/posts/show.view.php";