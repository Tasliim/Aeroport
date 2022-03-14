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

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="img/picture.jpg">
			<div class="about-text">
				<h2>À propos ! </h2>
				<h5>Aéroport <span>Saint Exupéry Lyon</span></h5>
				<p> <br />
					Totalement interconnecté, Lyon-Saint Exupéry est le point de départ privilégié
					des passagers du quart
					sud-est de la France.
					L'aéroport offre une excellente accessibilité avec son réseau autoroutier, sa gare TGV ainsi que le
					Rhônexpress qui relie le centre-ville de Lyon en moins de 30 minutes. L’ACI, l’association des
					aéroports européens, lui a décerné en 2020 la mention spéciale du prix Best Airport 2020 (cat. 10-20
					millions de passagers) en reconnaissance de ses actions dans la gestion de la crise sanitaire après
					l’avoir remis en 2019 le prix du Meilleur aéroport de l’année dans la catégorie 10-25 millions de
					passagers en termes d’efficacité opérationnelle, de qualité de service et de croissance durable.
					Lyon-Saint Exupéry est l'un des trois aéroports du réseau VINCI Airports à être d'ores et déjà
					neutre en carbone. Il a reçu la certification ACA 3+ de l'ACI en 2017.</p>
				<button type="button">En savoir plus</button>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Planning</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all
						devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Mon compte</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all
						devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all
						devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

		<!------Contact Me------>
		<div class="contact-me">
			<p>Une question ?</p>
			<a class="button-two" href="#">Contactez-nous ici </a>
		</div>
	
		<!------footer start--------->
		<footer>
			<p>Saint Exupéry</p>
			<p>Retrouvez nous sur nos réseaux-sociaux</p>
			<div class="social">
				<a href="https://www.facebook.com/aeroportsdelyon"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/lyonaeroports/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/lyonaeroports"><i class="fab fa-twitter"></i></a>
			</div>
			<p class="end">CopyRight By Titi & Tyta </p>
		</footer>
	</body>
	
	</html>
