<?php

class Reservation {
	protected $login;
	protected $exemplaire;
	
	
	
	
	// getter
	public function getLogin() {return $this->login;}
	public function getExemplaire() {return $this->exemplaire;}

	// setter
	public function setLogin($i) {$this->login = $i;}
	public function setExemplaire($m) {$this->exemplaire = $m;}


	// constructeur polyvalent d'un objet Voiture
	public function __construct($i = NULL, $m = NULL) {
		if (!is_null($i)) {
			$this->login = $i;
			$this->exemplaire = $m;
		}
	}
	
	
	//fonction Reserver un livre
	public function reserverLivre($l,$e) {
		$requetePreparee = "INSERT INTO Reservassion VALUES(:tag_l, :tag_e);";
		$req_prep = connexion::pdo()->prepare($requetePreparee);
				
		$valeurs = array(
			"tag_l" => $l,
			"tag_e" => $e);		
		try {
			$req_prep->execute($valeurs);
			echo "OuvrageReserver";
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}
	
	
	
	// fonction Retourner les Reservations
	public function getAllReservation($l){
		$requetePreparee = "Select * from Reservassion where login = :tag_l  ;";
		$req_prep = connexion::pdo()->prepare($requetePreparee);
				
		$valeurs = array(
			"tag_l" => $l);		
		try {
			$req_prep->execute($valeurs);
			echo "Trouve !!";
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
		$req_prep->setFetchmode(PDO::FETCH_CLASS,'Utilisateur');
        $tableau = $req_prep->fetchAll();
		return $tableau;
	}
	
	
	
	//fonction valider reservation
	public function validerReservation($l,$e) {
		$requetePreparee = "DELETE FROM Reservation where login = :tag_l and code_barre = :tag_e);";
		$req_prep = connexion::pdo()->prepare($requetePreparee);
				
		$valeurs = array(
			"tag_l" => $l,
			"tag_e" => $e);	
		try {
			$req_prep->execute($valeurs);
			echo "OuvrageReserver";
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
		include("emprunt.php");
		Emprunt::empruntLivre($l,$e);
	}
	
	
	
}