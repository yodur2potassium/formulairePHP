<?php
session_start();
$remember = false;
$connected = false;
$name = "";

if(isset($_SESSION["name"])){
  $name = $_SESSION["name"];
}
if(isset($_SESSION["connected"])){
  $connected = (bool)$_SESSION["connected"];
}
if(isset($_COOKIE["remember"])){
  $connected = $_COOKIE["remember"];
}
// var_dump($remember,$connected);
// var_dump($_COOKIE["remember"]!= "true", $connected == false);die();
if(!$remember && $connected != "true"){
  header("location: login.php");
}

// var_dump($_COOKIE);
 ?>
