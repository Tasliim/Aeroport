<!DOCTYPE html>
<html>

<head>
    <title>Ajout nouvel avion</title>
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
        isset(
        $_POST["n_vol"], 
        $_POST["n_avion"], 
        $_POST["id_agentmaint"], 
        $_POST["n_porte"], 
        $_POST["date_depart"], 
        $_POST["date_arrivee"], 
        $_POST["heure_depart"], 
        $_POST["heure_arrivee"], 
        $_POST["ville_depart"],
        $_POST["ville_arrivee"], 
        $_POST["nombre_passagers"], 
        $_POST["n_materiel"], 
        $_POST["nombre_materiel"])
        && !empty($_POST["n_vol"]) 
        && !empty($_POST["n_avion"]) 
        && !empty($_POST["id_agentmaint"]) 
        && !empty($_POST["n_porte"]) 
        && !empty($_POST["date_depart"]) 
        && !empty($_POST["date_arrivee"]) 
        && !empty($_POST["heure_depart"]) 
        && !empty($_POST["heure_arrivee"]) 
        && !empty($_POST["ville_depart"])
        && !empty($_POST["ville_arrivee"]) 
        && !empty($_POST["nombre_passagers"]) 
        && !empty($_POST["n_materiel"])
        && !empty($_POST["nombre_materiel"])
    ){
        // Le formulaire est complet
        // On récupère les données en les protégeants contre les failles XSS
        // On retire toutes balises des attributs où du texte est présent
        $ville_depart=strip_tags($_POST["ville_depart"]);
        $ville_arrivee=strip_tags($_POST["ville_arrivee"]);
        // On déclare les autres valeurs pour simplifié directement 
        $n_vol=$_POST["n_vol"];
        $n_avion=$_POST["n_avion"];
        $id_agentmaint=$_POST["id_agentmaint"];
        $n_porte=$_POST["n_porte"];
        $date_depart=$_POST["date_depart"];
        $date_arrivee=$_POST["date_arrivee"];
        $heure_depart=$_POST["heure_depart"];
        $heure_arrivee=$_POST["heure_arrivee"];
        $ville_depart=$_POST["ville_depart"];
        $ville_arrivee=$_POST["ville_arrivee"];
        $nombre_passagers=$_POST["nombre_passagers"];
        $n_materiel=$_POST["n_materiel"];
        $nombre_materiel=$_POST["nombre_materiel"];


        // A présent on peut se permettre de se connecter à la base de données
        // On se connecte donc à la BDD

require_once "connect.php";

        // On déclare notre requête 
        $sql="INSERT INTO vol 
        VALUES (:n_vol, :n_avion, :id_agentmaint, :n_porte,
                :date_depart, :date_arrivee, :heure_depart, 
                :heure_arrivee, :ville_depart, :ville_arrivee, :nombre_passagers,
                :n_materiel, :nombre_materiel)";

        // On prépare la requête 
        $query=$db->prepare($sql);

        // On injecte les valeurs 
        $query->bindValue(":n_vol", $n_vol);
        $query->bindValue(":n_avion", $n_avion);
        $query->bindValue(":id_agentmaint", $id_agentmaint);
        $query->bindValue(":n_porte", $n_porte);
        $query->bindValue(":date_depart", $date_depart);
        $query->bindValue(":date_arrivee", $date_arrivee);
        $query->bindValue(":heure_depart", $heure_depart);
        $query->bindValue(":heure_arrivee", $heure_arrivee);
        $query->bindValue(":ville_depart", $ville_depart);
        $query->bindValue(":ville_arrivee", $ville_arrivee);
        $query->bindValue(":nombre_passager", $nombre_passager);
        $query->bindValue(":n_materiel", $n_materiel);
        $query->bindValue(":nombre_materiel", $nombre_materiel);


        // On execute la requête 
        if(
            !$query->execute()){
            die("Une erreur est survenue, vérifier que ce numéro de vol n'a pas déjà été ajouté");
        }

        // On récupère le numéro du vol ajouté

        die("Vol ajouté sous le numéro $n_vol");
    }else{
        die("Le formulaire n'a pas été rempli correctement");
    }
}
?>    

    <h3>Ajouter un vol</h3>

        <div class="AjouterVol">
                    <form method="post" action="">
                        <input type="number" name="n_vol" placeholder="n_vol" /><br />
                        <input type="number" name="n_avion" placeholder="n_avion" /><br />
                        <input type="number" name="id_agentmaint" placeholder="id_agentmaint" /><br />
                        <input type="text" name="n_porte" placeholder="n_porte" /><br />
                        Date de départ :<input type="date" name="date_depart" placeholder="date_depart" /><br />
                        Date d'arrivée :<input type="date" name="date_arrivee" placeholder="date_arrivee" /><br />
                        Heure de départ :<input type="time" name="heure_depart" placeholder="heure_depart" /><br />
                        Heure d'arrivée :<input type="time" name="heure_arrive" placeholder="heure_arrive" /><br />
                        <input type="text" name="ville_depart" placeholder="ville_depart" /><br />
                        <input type="text" name="ville_arrivee" placeholder="ville_depart" /><br />
                        <input type="number" name="nombre_passagers" placeholder="nombre_passagers" /><br />
                        <input type="number" name="n_materiel" placeholder="n_materiel" /><br />
                        <input type="number" name="nombre_materiel" placeholder="nombre_materiel" /><br />
                        <input type="submit" value="OK" />
                    </form>
        </div>

</body>

</html>