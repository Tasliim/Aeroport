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

	<div class="pageE">
		<nav>
			<h2 class="logo"><a class="lien" href="accueil.php"> Saint<span>Exupéry</span></a></h2>
			<a href="accueil.php" class="btnE">Retour</a>
		</nav>

    <div class="boxE">
        <article class ="loginsignup">
        <php
                ?>
			<div class="cardE">

                <div class="se connecter">
				    <div class="tE">Se connecter</div>
			    	<div class="pra">
                        <form method="post" action="login.php">
                            <input class="email" type="text" name="email" placeholder="Adresse e-mail">
                            <input class="passw" type="password" name="passw" placeholder="Mot de passe"><br />
                            <input class="submit" type="submit" name="submit" value="Se connecter !">
                            <br /> <br /> <br />
                            <p class="mdpoublie"> Mot de passe oublié ?</p>
                        </form>
                    </div> <!--pra-->
		    	</div> <!--seconnecter-->
            </div> <!--card-->

			<div class="cardE">
            <div class="creercompte">
				    <div class="tE">Créer un compte</div>
			    	<div class="pra">
                        <form method="post" action="login.php">
                            <input class="email" type="text" name="email" placeholder="Adresse e-mail">
                            <input class="passw" type="password" name="passw" placeholder="Mot de passe"><br />
                            <input class="submit" type="submit" name="submit" value="Valider">
                            <br /> <br /> <br />
                        </form>
                    </div> <!--pra-->
		    	</div> <!--creercompte-->
			</div> <!--card-->
    	</article>
	</div>  <!--box-->
    </div>   <!--page-->


		<!------Contact------>
		<div class="contactE">
			<p>Une question ?</p>
			<a class="button-two" href="#">Contactez-nous ici </a>
		</div>
	
		<!------footer start--------->
		<footer>
		<div class="footerE">
			<p>Saint Exupéry</p>
			<p>Retrouvez nous sur nos réseaux-sociaux</p>
			<div class="social">
				<a href="https://www.facebook.com/aeroportsdelyon"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/lyonaeroports/"><i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/lyonaeroports"><i class="fab fa-twitter"></i></a>
			</div>
			<p class="end">CopyRight By Titi & Tyta </p>
		</div>
		</footer>
	</body>
	
	</html>
