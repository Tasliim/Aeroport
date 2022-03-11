<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=aeroport', 'root', ''); 


$email = $_POST["email"];
$passw = $_POST["passw"];
$erreur = "Tous les champs se doivent d'être complétés";


if (isset($_POST['submit']) && $email == "druelerwan@icloud.com" && $passw == "un")
{


    header('Location: accueil.html'); 
    exit();
}
else 
{
    echo "$erreur";
}

?>