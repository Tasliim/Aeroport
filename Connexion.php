<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style.css" />
    <title>Connexion</title>
</head>

<body>
    <div class="colonnedroite">
        <header>
            <ul class="menu">
                <li class="bvn">BIENVENUE</li>
                <li>Rechercher</li>
                <li><a href="Connexion.php">Authentification</a></li>
                <li><a href="https://www.google.fr/">FR</a>/<a href="https://www.google.com/">ENG</a></li>
            </ul>
        </header>

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


    <div class="colonnegauche">
        <img class="logo" src="Photos/logo.png">
        <ul class="menug">
            <li class="acc"><a href="Accueil.php">Accueil</a></li><br />
            <li><a href="GestionAvion.php">Gestion Avion</a></li><br />
            <li><a href="GestionEmplacement.php">Gestion Emplacement</a></li><br />
            <li><a href="GestionKerozene.php">Gestion Kérozène</a></li><br />
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>

    <img class="vincilogo" src="Photos/vincilogo.png">

    <footer>
        <ul class="menufooter">
            <li>Accessibilités</li>
            <li>Conditions générales de ventes</li>
            <li>Mentions légales</li>
            <li>Données personnelles</li>
            <li>Cookies</li>
            <li>Gestion des Cookies</li>
            <li>Guide des redevances</li>
            <li>Règlement parking</li>

        </ul>
    </footer>

</body>

</html>