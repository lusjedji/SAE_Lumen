<?php 
include("../modele/utilisateur.php");
error_reporting(E_ALL);
ini_set("display_errors",1);
session_start();
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lumen Lurning Center</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet">
	</head>
	<body>
		<section class="header" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(images/banner2.png);">
			<?php include("header.php");
			if(isset($_GET["deco"])) {
				$_SESSION["user"] = "";
				session_unset();
				session_destroy();
				header("Location:index.php");
			}
			?>
			<div class="text-box">
				<h1>Lumen Learning Center</h1>
				<p> Le Lumen Learning Center, cœur de campus du plateau de Moulon, ouvrira ses portes au printemps 2023. </br>
					Il offrira des espaces, services et contenus pour étudier, innover et partager la connaissance. </br>
					Avec sa très grande amplitude d'ouverture, le Lumen accueillera tous les publics intéressés.
				</p>
				<a href="ouvrages.php" class = "hero-btn">Consulter les ouvrages ...</a>
			</div>
		</section>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	</body>
	<?php include("footer.php"); ?>
</html>