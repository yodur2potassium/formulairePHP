<?php
session_start();
 if (isset($_SESSION["loginErrors"])){
  echo $_SESSION["loginErrors"];
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <form class="" action="process.php" method="post">
       <fieldset><legend>Authentification</legend>
       <label for="">Identifiant : <input type="text" name="login" value=""></label></br>
       <label for="">Mot de passe : <input type="password" name="password" value=""></label></br>
       <input type="submit" name="valid" value="OK">
       </fieldset>
     </form>
     <!-- <a href="destroy.php">Detruire la session</a> -->
 </html>
   </body>
