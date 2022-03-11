<!DOCTYPE html>
<html>

<head>
    <title>Aéroport Saint Exupéry</title>
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
    <!----hero Section start---->

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

        <div class="content">
            <h4>Bonjour,</h4>
            <h1>prénom <span> nom </span></h1>
            <!--PHP qui récupere le nom de connexion -->
            <!--	<div class="newsletter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div> -->
        </div>
    </div>


    <!-----service section start----------->
    <div class="service">
        <div class="title">
            <h2>Ajouter Avion</h2>
        </div>
        <article class="ajouteravion">
            <php ?>
                <div class="ajout">
                    <form method="post" action="">
                        <input type="number" name="id_compagnie" placeholder="id_compagnie" /><br />
                        <input type="text" name="nom_compagnie" placeholder="nom_compagnie" /><br />
                        <input type="number" name="n_siret" placeholder="n_siret" /><br />
                        <input type="submit" value="OK" />
                    </form>

<?php
include 'connexionBD.php';
$title='Afficher avions à remplir';

if(isset($_POST['id_compagnie']) AND isset($_POST['nom_compagnie']) AND isset($ _POST['n_siret']))
{
$requete = $bdd->prepare("INSERT INTO compagnie_aerienne (id_compagnie, nom_compagnie, n_siret)
VALUES (?, ?, ?)");

$requete->execute(array($_POST['id_compagnie'], $_POST['nom_compagnie'], $_POST['n_siret']));

?>
<?php
}
?>

</body>

</html>