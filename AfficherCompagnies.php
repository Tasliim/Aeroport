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

	<div class="page">
		<nav>
			<h2 class="logo">Saint<span>Exupéry</span></h2>
			<ul>
				<li><a href="#">Accueil</a></li>
				<li><a href="#">Gestion Avion</a></li>
				<li><a href="#">Gestion Emplacement</a></li>
				<li><a href="#">Gestion Kérosène</a></li>
				<li><a href="#">Contactez-nous</a></li>
			</ul>
			<a href="page_connexion.php" class="btn">Inscrivez-vous</a>
		</nav>

		<div class="content">
			<h4>Bonjour,</h4>
			<h1>prénom <span> nom </span></h1> <!--PHP qui récupere le nom de connexion -->
			<!--	<div class="newsletter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div> -->
		</div>
	</div>

<?php
include 'connexionBD.php';
$title='Afficher compagnies';



?>

<br/><br/>
<h3>Liste des compagnies</h3>
<a href=GestionAvions >Retour</a>
<br/><br/>

<?php
echo '<div class="container table-responsive">';
echo '<table class="table table-striped">';

$reqAfficheCompagnie="SELECT id_compagnie, nom_compagnie, n_siret 
FROM compagnie_aerienne
ORDER BY nom_compagnie";


$reponse=$pdo->query($reqAfficheCompagnie);
$data = $reponse->fetchAll(PDO::FETCH_OBJ);  // requete pour recuperer login nom et prenom

    echo 
    '<tr style=font-weight:bold>
    <td>Code Compagnie</td>
    <td>Nom Compagnie</td>
    <td>num de siret
    </tr>';
    
    foreach ($data as $compagnie) {
    	echo'<tr>';
    	echo '<td>'.$compagnie->id_compagnie.'</td>';
    	echo '<td>'.$compagnie->nom_compagnie.'</td>';
		echo '<td>'.$compagnie->n_siret.'</td>';
    	echo'</tr>';
    }


    echo'</table></div>';

    ?>

    <br/><br/>

    <a href=AjouterCompagnie>Ajouter une Compagnie</a>
    <a href=SupprimerCompagnie>Supprimer une Compagnie</a>
    <br/><br/>
