<!DOCTYPE html>
<html>

<head>
	<title>Afficher vol</title>
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
// On va chercher les vols dans la BDD 
// On se connecte donc à la BDD
require_once "connect.php";

// On écrit la requête 
$sql="SELECT * FROM vol ORDER BY n_vol ASC";

// On execute la requête directement car pas de paramètres extérieurs qui vient s'ajouter 
$query=$db->query($sql);

// On récupère les données 
$vol=$query->fetchall();
?>

<h1>Liste des vols</h1>
<a href=accueil.php >Retour</a>
<br/><br/>


<?php
echo '<div class="container table-responsive">';
echo '<table class="table table-striped">';

echo 
"<tr>
<td>Numéro vol</td>
<td>Numéro avion</td>
<td>id agent de maintenance</td>
<td>Numéro de porte</td>
<td>Date de départ</td>
<td>Date d'arrivée</td>
<td>Heure de départ</td>
<td>Heure d'arrivée</td>
<td>Ville de départ</td>
<td>Ville d'arrivée</td>
<td>Nombre de passagers</td>
<td>Numéro matériel</td>
<td>Nombre de matériel</td>
</tr>";

// Après un fetchall il y a une boucle, on utilise donc une boucle for each
foreach ($vol as $vol) {
	echo '<tr>';
	echo '<td>'.$vol->n_vol.'</td>';
	echo '<td>'.$vol->n_avion.'</td>';
	echo '<td>'.$vol->id_agentmaint.'</td>';
	echo '<td>'.$vol->n_porte.'</td>';
	echo '<td>'.$vol->date_depart.'</td>'; 
	echo '<td>'.$vol->date_arrivee.'</td>'; 
	echo '<td>'.$vol->heure_depart.'</td>';
	echo '<td>'.$vol->heure_arrivee.'</td>'; 
	echo '<td>'.$vol->ville_depart.'</td>'; 
    echo '<td>'.$vol->ville_arrivee.'</td>'; 
    echo '<td>'.$vol->nombre_passagers.'</td>'; 
    echo '<td>'.$vol->n_materiel.'</td>'; 
    echo '<td>'.$vol->nombre_materiel.'</td>'; 
}

echo'</table></div>';
?>

<br /><br />

<a href=AjouterVol.php>Ajouter un nouveau vol</a>
<a href=SupprimerVol.php>Supprimer un vol existant</a>
<br/><br/>