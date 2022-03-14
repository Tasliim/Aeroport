<!DOCTYPE html>
<html>

<head>
	<title>Aéroport Saint Exupéry</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
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

	<div class="pageAfA">
		<nav>
		<h2 class="logo"><a class="lien" href="accueil.php"> Saint<span>Exupéry</span></a></h2>
			<a href="page_connexion_agent.php" class="btnAfA">Inscrivez-vous</a>
		</nav>

    <div class="box">
			<div class="card">
			<?php 
				// On va chercher les avions dans la BDD 
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

			</div>

			<div class="card">
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
			</div>

			<div class="card">
			<br /><br />
			<a href=AjouterAvion.php>Ajouter un nouvel avion</a>
			<a href=SupprimerAvion.php>Supprimer un avion existant</a>
			<br/><br/>
			</div>
	</div>
			</div>

		<!------Contact------>
		<div class="contactAfA">
			<p>Une question ?</p>
			<a class="button-two" href="#">Contactez-nous ici </a>
		</div>
	
		<!------footer start--------->
		<footer>
		<div class="footer1">
			<p>Saint Exupéry</p>
			<p>Retrouvez nous sur nos réseaux-sociaux</p>
			<div class="social1">
				<a href="https://www.facebook.com/aeroportsdelyon"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/lyonaeroports/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/lyonaeroports"><i class="fab fa-twitter"></i></a>
			</div>
			<p class="end1">CopyRight By Titi & Tyta </p>
		</div>	
	
		<!------Contact------>
		<div class="contactAfA">
			<p>Une question ?</p>
			<a class="button-two" href="#">Contactez-nous ici </a>
		</div>
	
		<!------footer start--------->
		<footer>
		<div class="footerAfA">
			<p>Saint Exupéry</p>
			<p>Retrouvez nous sur nos réseaux-sociaux</p>
			<div class="socialAfA">
				<a href="https://www.facebook.com/aeroportsdelyon"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/lyonaeroports/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/lyonaeroports"><i class="fab fa-twitter"></i></a>
			</div>
			<p class="endAfA">CopyRight By Titi & Tyta </p>
		</div>
		</footer>
	</body>
	
	</html>

