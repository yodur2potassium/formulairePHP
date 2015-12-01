<?php
session_start();
 if (isset($_SESSION["loginErrors"])){
  echo $_SESSION["loginErrors"];
  unset($_SESSION["loginErrors"]);
}
// var_dump($_SESSION);
// var_dump($_COOKIE);

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
       <label for="">Se souvenir de  mewah <input type="checkbox" name="remember" value="true"></label>
       <input type="submit" name="valid" value="OK">
       </fieldset>
     </form>
     <a href="destroy.php">Detruire la session</a>
 </html>
   </body>
