<?php
require "functions.php";
require "Database.php";
$config = require ("config.php");

$query = "SELECT * FROM posts";
$params = [];
if(isset($_GET["id"]) && $_GET["id"] !=null){
    $id = $_GET["id"];
    $query .=" WHERE id =:id";
    $params = [":id" => $id];
}
if(isset($_GET["name"]) && $_GET["name"] !=null){
    $name = $_GET["name"];
    $query .=" LEFT JOIN categories ON posts.category_id = categories.id WHERE NAME =:name";
    $params = [":name" => $name];
}
$db = new Database($config);
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

echo "<form>";
echo "<input name='id'/>";
echo "<button >Submit</button>";
echo "</form>";

echo "<p>categories</p>";
echo "<form>";
echo "<input name='name'/>";
echo "<button >Submit</button>";
echo "</form>";

echo "<h1> POSTS </h1>";
echo "<ul>";
foreach($posts as $post){
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";





