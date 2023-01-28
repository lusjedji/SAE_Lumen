<?php
include("modele/reservation.php");
class ControleurReservation {

  // la méthode de récupération et d'affichage de tous les utilisateurs
    public static function lireReservations() {
		include("../modele/reservation.php");
		include("../config/connexion.php");
		//$_SESSION[]
		$tab_u = Reservation::getAllReservation($l);
		return $tab_u;
	}
		
  }
  
?>