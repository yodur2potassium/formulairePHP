<?php
session_start();
var_dump($_POST);

$login ="";
$password ="";
$_SESSION["connected"] = false;

if(isset($_POST) && !empty($_POST)){
  $login = strtolower(htmlentities($_POST["login"]));
  $password = htmlentities($_POST["password"]);
}
if($_POST["remember"] === "true"){
  setcookie("remember","true",time()+30*24*3600);
}

if($login === "imie" && $password === "123456"){
  $_SESSION["connected"] = true;
  $_SESSION["name"] = $login;
  header("location: index.php");

} else{
  $_SESSION["loginErrors"] = "Mauvais Login/Pass.";
  header("location: login.php");
}


// var_dump($login,$password);
var_dump($_SESSION);
var_dump($_COOKIE);
