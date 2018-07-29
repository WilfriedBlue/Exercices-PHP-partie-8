<?php
session_start()
?>

<html>

<head>
    <meta charset="utf-8" />
</head>

</html>
<center>
<form method="POST" action="lien1.php">
<fieldset>

   <p>

       <label for="login">Login :</label>
       <input type="text" name="login" id="login" />
       <br><br>
       <label for="mot_de_passe">Mot de passe :</label>
       <input type="password" name="mot_de_passe" id="mot_de_passe" />
       <br><br>     
       <input type="submit" value="Envoyer">
       

   </p>
   </fieldset>
</form>
</center>