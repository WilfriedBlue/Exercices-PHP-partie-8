  <?php 

session_start();

echo $_SESSION["lastname"] . " " . $_SESSION["firstname"] . " " . $_SESSION["age"] . " ans. <br><br>";

if (isset ($_POST['submit'])){
   
setcookie("login", $_POST["login"], time()+10000);
setcookie("mot_de_passe", $_POST["mot_de_passe"], time()+10000);

echo $_COOKIE["login"]. " " . $_COOKIE["mot_de_passe"];      
};

?>


<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" text="text/css" ; </head>
</head>

</html>
<body>

</body>

<p>Pour modif les cookies, <a href="lien2.php">cliquez ici</a></p>