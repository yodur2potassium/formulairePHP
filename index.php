<?php
session_start();

if($_SESSION["connected"] == false){
  header("location: login.php");
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
  </head>
  <body>
    <h1>Bienvenue!</h1>
  </body>
</html>
