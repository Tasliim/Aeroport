<?php
        // On se connecte donc à la BDD

        // ------------------------- CONSTANTES -------------------

        // Constantes d'environnement
        include 'paramBD.php';


        //DSN de connexion
        $dsn='mysql:host='.$host.';port=3306 ; dbname='.$dbname; 

        // On va se connecter à la base 
        try  {

            // On instancie le PDO 
         $db=new PDO($dsn, $user, $password);

         // On veut que les données s'envoient en UTF8
         $db->exec("SET NAMES utf8");

            // On définit le mot de fetchall par défaut 
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

            }catch(PDOException $e){
             die("Erreur : ".$e->getMessage());
            }

        // ------------------------- CONSTANTES -------------------
?>