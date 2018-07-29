<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="lien1.php">Lien vers une autre page</a>
<br><br>

<?php
session_start();
$_SESSION["lastname"] = "Artus";
$_SESSION["firstname"] = "Wilfried";
$_SESSION["age"] = 29;


//User agent
echo "User info : " . $_SERVER['HTTP_USER_AGENT'] . "<br></br>";

//Adresse ip
function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}


    // Afficher l'adresse IP
    echo 'Adresse IP du visiteur : '.get_ip() . "<br><br>"; 


//Nom du serveur
echo "Le nom de votre serveur est : " . $_SERVER["SERVER_NAME"] . "<br><br>";

?>
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
</body>
</html>