<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

if($url ==  "/about"){
    require "controllers/about.php";
}
if($url ==  "/index" || $url ==  "/"){
    require "controllers/index.php";
}
if($url ==  "/story"){
    require "controllers/story.php";
}