<!DOCTYPE html>
<html>

<head>
	<title>Afficher compagnies aériennes</title>
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
				<li><a href=accueil.php>Accueil</a></li>
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
// On va cherchdr les compagnies aériennes dans la BDD 
// On se connecte donc à la BDD
require_once "connect.php";

// On écrit la requête 
$sql="SELECT * FROM compagnie_aerienne ORDER BY id_compagnie ASC";

// On execute la requête directement car pas de paramètres extérieurs qui viennent s'ajouter 
$query=$db->query($sql);

// On récupère les données 
$compagnie_aerienne=$query->fetchall();
?>

<h1>Liste des compagnies aériennes</h1>
<a href=accueil.php >Retour</a>
<br/><br/>


<?php
echo '<div class="container table-responsive">';
echo '<table class="table table-striped">';

echo 
'<tr style=font-weight:bold>
<td>id</td>
<td>Nom de la compagnie aérienne</td>
<td>Code de la compagnie aérienne</td>
<td>Numéro de siret<td>
</tr>';

// Après un fetchall il y a une boucle, on utilise donc une boucle for each
foreach ($compagnie_aerienne as $compagnie_aerienne) {
    echo'<tr>';
    echo '<td>'.$compagnie_aerienne->id_compagnie.'</td>';
    echo '<td>'.$compagnie_aerienne->nom_compagnie.'</td>';
	echo '<td>'.$compagnie_aerienne->code_compagnie.'</td>';
    echo '<td>'.$compagnie_aerienne->n_siret.'</td>';
    echo'</tr>';
}

echo'</table></div>';
?>


<br /><br />

<a href=AjouterCompagnie.php>Ajouter une nouvelle compagnie aérienne</a>
<a href=SupprimerCompagnie.php>Supprimer une compagnie aérienne existante</a>
<br/><br/>