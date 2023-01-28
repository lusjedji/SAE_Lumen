<!DOCTYPE html>
<html lang="fr" style="font-size: 16px">
	<head>
		<title>Inscription</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/formulaire.css">
	</head>
	<?php #include("header.php"); ?>
	<body>
		<form action="routeur.php?controleur=ControleurAttente&action=processForm" method="post">
			<h1>Inscription</h1>
			<div class="contenair">
				<label for="nom"><strong>Nom</strong></label>
				<input type="text" placeholder="Votre Nom" name="nom" required>

				<label for="prenom"><strong>Prénom</strong></label>
				<input type="text" placeholder="Votre prenom" name="prenom" required>

				<label for="email"><strong>Email</strong></label>
				<input type="email" placeholder="Votre email" name="email" required>

				<label for="adresse"><strong>Adresse</strong></label>
				<input type="text" placeholder="Votre adresse" name="adresse" required>

				<label for="tel"><strong>Numéro de téléphone</strong></label>
				<input type="tel" placeholder="Votre numéro de téléphone" name="tel" required>

				<label for="dateN"><strong>date de naissance</strong></label>
				<input type="date" placeholder="Votre date de naissance" name="dateN" required>

				<label for="mdp"><strong>Mot de passe</strong></label>
				<input type="password" placeholder="Votre mot de passe" name="mdp" required>

			</div>
			<button type="submit">S'inscrire</button>
			<div class="container">
				<span class="mdp"><a href="connexion.php"> Déjà un compte?</a></span>
			</div>
		</form>
	</body>
	<?php #include("footer.php"); ?>
</html>