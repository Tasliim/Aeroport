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
			<h1>prénom <span> nom </span></h1> <!--PHP qui récupere le nom de connexion -->
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
		<h2>Services</h2>
	</div>
	<article class="loginsignup">
            <php
            
            ?>
            <div class="seconnecter">
                <p> Se connecter </p>
                <form method="post" action="login.php">
                    <input class="email" type="text" name="email" placeholder="Adresse e-mail">
                    <input class="passw" type="password" name="passw" placeholder="Mot de passe"><br />
                    <input class="submit" type="submit" name="submit" value="Se connecter !">
                    <br /> <br /> <br />
                    <p class="mdpoublie"> Mot de passe oublié ?</p>
                </form>
            </div>
            <div class="creercompte">
                <p class="ccompte"> Créer un compte </P>
                <form method="post" action="signup.php">
                    <input class="email" type="text" name="email" placeholder="Adresse e-mail">
                    <input class="identifiant" type="text" name="identifiant" placeholder="Identifiant">
                    <input class="passw" type="password" name="passw" placeholder="Mot de passe"><br />
                    <input class="submit" type="submit" name="submit">
                    <br /> <br />
                    Mot de passe oublié ? 
            </div>
        </article>
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
