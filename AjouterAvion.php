<!DOCTYPE html>
<html>

<head>
    <title>Ajout compagnie aérienne</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="page1">
        <nav>
            <h2 class="logo">Saint<span>Exupéry</span></h2>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="#">Gestion Avion</a></li>
                <li><a href="#">Gestion Emplacement</a></li>
                <li><a href="#">Gestion Kérosène</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
            <a href="#" class="btn">Inscrivez-vous</a>
        </nav>
    </div>


<?php
// On traite le formulaire directement dans la page 
if(!empty($_POST)){
    // POST n'est pas vide, alors on vérifie que toutes les données sont bien présentes 
    if(
        isset($_POST["n_avion"], $_POST["id_piste"], $_POST["nombre_places"], $_POST["type_avion"], 
        $_POST["capacite_chargement"], $_POST["capacite_reservoir"], 
        $_POST["envergure"], $_POST["longueur"], $_POST["hauteur"])
        && !empty($_POST["n_avion"]) && !empty($_POST["id_piste"]) && !empty($_POST["nombre_places"]) 
        && !empty($_POST["type_avion"]) && !empty($_POST["capacite_chargement"]) && !empty($_POST["capacite_reservoir"]) 
        && !empty($_POST["envergure"]) && !empty($_POST["longueur"]) && !empty($_POST["hauteur"])
    ){
        // Le formulaire est complet
        // On déclare les autres valeurs pour simplifié directement 
        // On retire toutes balises du type_avion
        $type_avion=strip_tags($_POST["type_avion"]);
        // On déclare les autres valeurs pour simplifié directement 
        $n_avion=$_POST["n_avion"];
        $id_piste=$_POST["id_piste"];
        $nombre_places=$_POST["nombre_places"];
        $type_avion=$_POST["type_avion"];
        $capacite_chargement=$_POST["capacite_chargement"];
        $capacite_reservoir=$_POST["capacite_reservoir"];
        $envergure=$_POST["envergure"];
        $longueur=$_POST["longueur"];
        $hauteur=$_POST["hauteur"];

        // A présent on peut se permettre de se connecter à la base de données
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

        $sql="INSERT INTO avion 
        VALUES (:n_avion, :id_piste, :nombre_places, :type_avion,
                :capacite_chargement, :capacite_reservoir, :envergure, 
                :longueur, :hauteur)";

        // On prépare la requête 
        $query=$db->prepare($sql);

        // On injecte les valeurs 
        $query->bindValue(":n_avion", $n_avion);
        $query->bindValue(":id_piste", $id_piste);
        $query->bindValue(":nombre_places", $nombre_places);
        $query->bindValue(":type_avion", $type_avion);
        $query->bindValue(":capacite_chargement", $capacite_chargement);
        $query->bindValue(":capacite_reservoir", $capacite_reservoir);
        $query->bindValue(":envergure", $envergure);
        $query->bindValue(":longueur", $longueur);
        $query->bindValue(":hauteur", $hauteur);

        // On execute la requête 
        if(
            !$query->execute()){
            die("Une erreur est survenue");
        }

        // On récupère l'ID de la compagnie ajoutée 

        die("Avion ajouté sous le numéro $n_avion");
    }else{
        die("Le formulaire n'a pas été rempli correctement");
    }
}
?>    

    <h3>Ajouter un avion</h3>

        <div class="AjouterAvi">
                    <form method="post" action="">
                        <input type="number" name="n_avion" placeholder="n_avion" /><br />
                        <input type="number" name="id_piste" placeholder="id_piste" /><br />
                        <input type="number" name="nombre_places" placeholder="nombre_places" /><br />
                        <input type="text" name="type_avion" placeholder="type_avion" /><br />
                        <input type="number" name="capacite_chargement" placeholder="capacite_chargement" /><br />
                        <input type="number" name="capacite_reservoir" placeholder="capacite_reservoir" /><br />
                        <input type="number" name="envergure" placeholder="envergure" /><br />
                        <input type="number" name="longueur" placeholder="longueur" /><br />
                        <input type="number" name="hauteur" placeholder="hauteur" /><br />
                        <input type="submit" value="OK" />
                    </form>
        </div>

</body>

</html>