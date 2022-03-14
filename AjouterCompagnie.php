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

<br />
<?php
// On traite le formulaire directement dans la page 
if(!empty($_POST)){
    // POST n'est pas vide, alors on vérifie que toutes les données sont bien présentes 
    if(
        isset($_POST["id_compagnie"],
        $_POST["nom_compagnie"], 
        $_POST["n_siret"])
        && !empty($_POST["id_compagnie"]) 
        && !empty($_POST["nom_compagnie"]) 
        && !empty($_POST["n_siret"])
    ){
        // Le formulaire est complet
        // On récupère les données en les protégeants contre les failles XSS
        // On retire toutes balises du nom_compagnie 
        $nom_compagnie=strip_tags($_POST["nom_compagnie"]);
        // On déclare les autres valeurs pour simplifié directement 
        $id_compagnie=$_POST["id_compagnie"];
        $n_siret=$_POST["n_siret"];
        
        // A présent on peut se permettre de se connecter à la base de données
        // On se connecte donc à la BDD

require_once "connect.php";

        // On déclare notre requête 
        $sql="INSERT INTO compagnie_aerienne
        VALUES (:id_compagnie, :nom_compagnie, :n_siret)";

        // On prépare la requête 
        $query=$db->prepare($sql);

        // On injecte les valeurs 
        $query->bindValue(":id_compagnie", $id_compagnie);
        $query->bindValue(":nom_compagnie", $nom_compagnie);
        $query->bindValue(":n_siret", $n_siret);

        // On execute la requête 
        if(
            !$query->execute()){
            die("Une erreur est survenue");
        }

        // On récupère l'ID de la compagnie ajoutée 

        echo "Compagnie aérienne ajoutée sous l'id compagnie $id_compagnie";
    }else{
        die("Le formulaire n'a pas été rempli correctement");
    }
}
?>    

    <h3>Ajouter une compagnie</h3>

        <div class="AjouterCA">
                    <form method="post" action="">
                        <input type="number" name="id_compagnie" placeholder="id_compagnie" /><br />
                        <input type="text" name="nom_compagnie" placeholder="nom_compagnie" /><br />
                        <input type="number" name="n_siret" placeholder="n_siret" /><br />
                        <input type="submit" value="OK" />
                    </form>
        </div>
        <br /><br />

    <a href=SupprimerCompagnie.php>Supprimer une nouvelle compagnie aérienne</a>
    <a href=AfficherCompagnie.php>Afficher les compagnies aériennes existantes</a>
    <br/><br/>
</body>

</html>