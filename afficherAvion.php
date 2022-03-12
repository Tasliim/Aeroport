<!DOCTYPE html>
<html>

<head>
	<title>Afficher avion</title>
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
// On va cherchdr les avions dans la BDD 
// On se connecte donc à la BDD
require_once "connect.php";

// On écrit la requête 
$sql="SELECT * FROM avion ORDER BY n_avion ASC";

// On execute la requête directement car pas de paramètres extérieurs qui vient s'ajouter 
$query=$db->query($sql);

// On récupère les données 
$avion=$query->fetchall();
?>

<h1>Liste des avions</h1>
<a href=accueil.php >Retour</a>
<br/><br/>


<?php
echo '<div class="container table-responsive">';
echo '<table class="table table-striped">';

echo 
"<tr>
<td>Numéro avion</td>
<td>id piste</td>
<td>Nombres places</td>
<td>Type de l'avion</td>
<td>Capacité de chargement</td>
<td>Capacité de réservoir</td>
<td>Envergure</td>
<td>Longueur</td>
<td>Hauteur</td>
</tr>";

// Après un fetchall il y a une boucle, on utilise donc une boucle for each
foreach ($avion as $avion) {
	echo '<tr>';
	echo '<td>'.$avion->n_avion.'</td>';
	echo '<td>'.$avion->id_piste.'</td>';
	echo '<td>'.$avion->nombre_places.'</td>';
	echo '<td>'.$avion->type_avion.'</td>';
	echo '<td>'.$avion->capacite_chargement.'</td>'; 
	echo '<td>'.$avion->capacite_reservoir.'</td>'; 
	echo '<td>'.$avion->envergure.'</td>';
	echo '<td>'.$avion->longueur.'</td>'; 
	echo '<td>'.$avion->hauteur.'</td>'; 
}

echo'</table></div>';
?>

<br /><br />

<a href=AjouterAvion.php>Ajouter un nouvel avion</a>
<a href=SupprimerAvion.php>Supprimer un avion existant</a>
<br/><br/>