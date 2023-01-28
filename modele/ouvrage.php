<?php
	class Ouvrage {
		private $num_ISBN;
		private $titre;
		private $cote;
		private $langue;
		private $resume;
		private $edition;
		private $empruntable;
		private $original;
		private $mot_cle;
		private $id_bibli;
		private $id_to;
		private $image;
		
		public function __construct($num = NULL, $t = NULL, $c = NULL, $lan = NULL, $res = NULL, $edi = NULL, $emp = NULL, $ori = NULL, $mc = NULL, $id_bi = NULL, $id_t = NULL, $img = NULL) {
			if (!is_null($num)) {
				$this->num_ISBN = $num;
				$this->titre = $t;
				$this->cote = $c;
				$this->langue = $lan;
				$this->resume = $res;
				$this->edition = $edi;
				$this->empruntable = $emp;
				$this->original = $ori;
				$motCle = explode(";",strtolower($mc));
				$this->mot_cle = $motCle;
				$this->id_bibli = $id_bi;
				$this->id_to = $id_t;
				$this->image = $img;
			}
		}
		
		//getters
			
		public function getISBN(){
			return $this->num_ISBN;
		}
		
		public function getTitre(){
			return $this->titre;
		}
		
		public function getCote(){
			return $this->cote;
		}
		
		public function getLangue(){
			return $this->langue;
		}
		
		public function getResume(){
         return $this->resume;
		}
		
		public function getEdition(){
         return $this->edition;
		}
		
		public function getEmpruntable(){
         return $this->empruntable;
		}
		
		public function getOrignal(){
         return $this->original;
		}
		
		public function getMotCle(){
         return $this->mot_cle;
		}
		
		public function getIdBibli(){
         return $this->id_bibli;
		}
		
		public function getIdTo(){
         return $this->id_to;
		}
		
		public function getImage(){
         return $this->image;
		}
		
		//setters
		
		public function setISBN($ISBN){
			$this->num_ISBN = $ISBN;
		}
		
		public function setTitre($titre){
			$this->name = $name;
		}
		
		public function setCote($cote){
			$this->cote = $cote;
		}
		
		public function setLangue($langue){
			$this->langue = $langue;
		}
		
		public function setResume($resume){
			$this->resume = $resume;
		}
		
		public function setEdition($edition){
			$this->edition = $edition;
		}
		
		public function setEmpruntable($empruntable){
			$this->empruntable = $empruntable;
		}
		
		public function setOriginal($original){
			$this->original = $original;
		}
		
		public function addMotCle($mot){
			array_push($this->mot_cle, $mot);
		}

		public function removeMotCle($mot) {
			if (in_array($mot,$this->mot_cle)) {
				$this->mot_cle = array_diff($array, $mot);
			}
		}
		
		public function setIdBibli($id_bibli){
			$this->id_bibli = $id_bibli;
		}
				
		public function setIdTO($id_to){
			$this->id_to = $id_to;
		}
		
		public function setImage($image){
			$this->image = $image;
		}
		
		
		//fonction permettant d'ajouter un ouvrage
		public function ajouterUnOuvrage($num = NULL, $t = NULL, $c = NULL, $lan = NULL, $res = NULL, $edi = NULL, $emp = NULL, $ori = NULL, $mc = NULL, $id_bi = NULL, $id_t = NULL){
			if (!is_null($num)) {		
				array_push($mc,$t);
				$requetePreparee = "INSERT INTO Ouvrage VALUES(:tag_num, :tag_t, :tag_c, :tag_lan, :tag_res, :tag_edi, :tag_emp, :tag_ori, :tag_mc, :tag_bi, :tag_t);";
				$req_prep = connexion::pdo()->prepare($requetePreparee);
				
				$valeurs = array(
					"tag_num" => $num,
					"tag_t" => $t,
					"tag_c" => $c,
					"tag_lan" => $lan,
					"tag_res" => $res,
					"tag_edi" => $edi,
					"tag_emp" => $emp,
					"tag_ori" => $ori,
					"tag_mc" => $mc,
					"tag_bi" => $id_bi,
					"tag_t" => $id_t
				);
						
				try {
					$req_prep->execute($valeurs);
					echo "Ouvrage ajouté avec succès";
				}catch (PDOException $e) {
					echo $e->getMessage();
				}
			}
		}
		
		public function supprimerUnOuvrage($num) {
			$requetePreparee = "DELETE FROM Ouvrage WHERE num_ISBN = :tag_i;";
			$req_prep = connexion::pdo()->prepare($requetePreparee);
			
			$valeurs = array(
				"tag_i" => $num
			);
					
			try {
				$req_prep->execute($valeurs);
				echo "Ouvrage supprimer avec succès";
			}catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		
		public function afficher() {
			echo "<h3>".$this->getTitre()."</h3>";
			echo '<img src='.$this->getImage().' height="300px" width="200px">';
		}
			
		public function getOuvrages() {
			$requete = "SELECT * FROM Ouvrage;";
			$resultat = Connexion::pdo()->query($requete);
			$resultat->setFetchmode(PDO::FETCH_CLASS, "Ouvrage");
			return $resultat->fetchAll();
		}
		
		public static function getOuvrage($num) {
			$requete = "SELECT * FROM Ouvrage WHERE num_ISBN = :tag_num;";
			$req_prep = Connexion::pdo()->prepare($requete);
			$valeurs = array("tag_num" => $num);
			try {
				$req_prep->execute($valeurs);
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
			$req_prep->setFetchMode(PDO::FETCH_CLASS, "Ouvrage");
			$r = $req_prep->fetchAll();
			return $r;
		}
	}
?>
