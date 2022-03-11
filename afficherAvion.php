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
$title='Afficher avions à remplir';



?>

<br/><br/>
<h3>Liste des avions</h3>
<a href=accueil.php >Retour</a>
<br/><br/>

<?php
echo '<div class="container table-responsive">';
echo '<table class="table table-striped">';


$reqAfficheAvion="SELECT n_avion, id_piste, nombre_places, type_avion, capacite_chargement, capacite_reservoir, envergure, longueur, hauteur, surface_filaire
FROM avion 
order by n_avion";

$reponse=$pdo->query($reqAfficheAvion);
$data = $reponse->fetchAll(PDO::FETCH_OBJ);  // requete pour recuperer login nom et prenom

echo 
"<tr style=font-weight:bold>
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

foreach ($data as $avion) {
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

<br/><br/>