<!DOCTYPE html>
<html lang="fr" style="font-size: 16px">
	<head>
		<title>Connexion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../css/cont.css">
	</head>
	<?php #include("header.php");
	error_reporting(E_ALL);
	ini_set("display_errors",1);
			//include("header.php");
			if (isset($_SESSION["user"]))
				header("Location:index.php");
			else {
				$accueil = "none";
				$ouvrages = "none";
			}?>
	<body>
		<main class="formConnexion">
			<form action="routeur.php?controleur=ControleurConnexion&action=processForm" method="post">
				<h1>Connexion</h1>
				<div>
					<label for="login"><strong>Identifiant</strong></label>
				</div>
				<div>
					<input type="text" placeholder="Votre identifiant" name="login" required>
				</div>
				<div>
					<label for="mdp"><strong>Mot de passe</strong></label>
				</div>
				<div>
					<input type="password" placeholder="Mot de passe" name="mdp" autocomplete="off" required>
				</div>
				
				<?php
				if (isset($_GET["error"])) {
					$error = $_GET["error"];
					if($error == 1)
						echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
				}
				?>
				
				<div>
				<button type="submit">Se connecter</button>
				</div>
				<div class="container">
					<span><a href="#"> Mot de passe oublié?</a>
					<a href="inscription.php"> Pas encore inscrit?</a></span>
				</div>
			</form>
		</main>
	</body>
	<?php #include("footer.php"); ?>
</html>