<?php
session_start();
$url = explode("/", $_SERVER['REQUEST_URI']);


if ($url[1] == index) {
    $content = file_get_contents("index.php");

} else if ($url[1] == about) {
    $content = file_get_contents("about.php");
} else if ($url[1] == cart) {
    require_once("cart.php");
} 
