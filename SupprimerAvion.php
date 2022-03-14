<!DOCTYPE html>
<html>

<head>
    <title>Supprimer une compagnie aérienne</title>
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
        isset($_POST["n_avion"])
        && !empty($_POST["n_avion"])
    ){
        // Le formulaire est complet
        // On déclare les autres valeurs pour simplifié directement 
        $n_avion=$_POST["n_avion"];
        
// A présent on peut se permettre de se connecter à la base de données
require_once "connect.php";

        // On écrit la requête 
        $sql=("DELETE FROM avion 
        WHERE n_avion = :n_avion");

        // On prépare la requête 
        $query=$db->prepare($sql);

        // On injecte les valeurs 
        $query->bindValue(":n_avion", $n_avion);

        // On execute la requête 
        if(
            !$query->execute()){
            die("Une erreur est survenue");
        }

        // On récupère l'ID de la compagnie ajoutée 

        echo "L'avion $n_avion a bien été supprimée";
    }else{
        die("Le formulaire n'a pas été rempli correctement");
    }
}
?>    

    <h3>Supprimer un avion existant</h3>

        <div class="SupprimerAvi">
                    <form method="post" action="">
                        <input type="number" name="n_avion" placeholder="n_avion" /><br />
                        <input type="submit" value="OK" />
                    </form>
        </div>

        <br /><br />

    <a href=AjouterVol.php>Ajouter un nouveau vol</a>
    <a href=AfficherVol.php>Afficher les vols existants</a>
    <br/><br/>

</body>

</html>