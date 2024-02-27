<?php
require "functions.php";

$connection_string = "mysql:host=localhost;dbname=blog_liepins; user=root; password=; charset=utf8mb4";
$pdo = new PDO($connection_string);

$query = $pdo->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<ol>";
foreach($posts as $post){
    echo "<li>".$post["title"]."</li>";
}
echo "</ol>";