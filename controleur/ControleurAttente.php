<?php

require_once("modele/Attente.php");
    class ControleurAttente
    {
        public static function lireAttente()
		{
			$att = Attente::getAllAttentes();
            return $att;
		}

        public static function preInscriptionUtilisateur()
		{
			
            
            require_once("vue/header.php");
			
			require_once("vue/attente/inscription.php");
           // ControleurAttente::
           //ControleurAttente::processForm();
           include("vue/footer.php");
           
		}

        public static function processForm()
        {
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $dateN = $_POST['dateN'];
            $mdp = $_POST['mdp'];

            Attente::preInscription($nom,$prenom,$email,$adresse,$tel,$dateN,$mdp);
           header('Location: vue/attente/wait.php');

            
        }

        public static function estInscritAttente($n,$p,$mdp)
        {
            Attente::estInscrit($n,$p,$mdp);
        }
        
    }
?>