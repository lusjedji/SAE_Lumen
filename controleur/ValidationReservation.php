
<?php
    // affichage du tableau
	session_start();
	include("../modele/exemplaire.php");
	include("../modele/ouvrage.php");
	include("../modele/reservation.php");
	
	$s =$_SESSION['login'];
	require_once("../config/connexion.php");
	Connexion::connect();

    foreach($tab_u as $u) {
		  $exemp = $u->getExemplaire();
		  $l = $u->getLogin();
		  $ISBN = Exemplaire::getOuvrage($exemp);
		  $num = $ISBN[0]->getISBN();
		  $ovrg = Ouvrage::getOuvrage($num);
		  $o = $ovrg[0];
		  $text = "ValidationReservation.php";
		  echo " l'exemplaire numero $exemp est reserve par l'utilisateur $l "; 
		  echo "<a href=$text> Valider </a>";
	}
		  
		 
    
  ?>
  

