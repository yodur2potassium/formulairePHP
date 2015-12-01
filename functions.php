<?php
session_start();
$name = $_SESSION["name"];

if($_SESSION["connected"] == false){
  header("location: login.php");
}


 ?>
