<?php
	
	require_once("modele/utilisateur.php");
	class ControleurConnexion{
		public static function connexionUtilisateur()
		{
			require_once("vue/header.php");
			
			require_once("vue/connexion/connecter.php");

            include("vue/footer.php");
		}

        public static function processForm()
        {
           /* if (isset($_POST["login"]) && isset($_POST["mdp"])){
                $l = $_POST["login"];
                $m = $_POST["mdp"];
                //include("modele/utilisateur.php");
                //require_once("../config/connexion.php");
                //Connexion::connect();
                $rep = Utilisateur::seConnecte($l,$m);
            
                if(isset($rep[0])) {
                    $_SESSION['user']=$rep[0];
                    $_SESSION['login']=$rep[0]->getLogin();
                    if($rep[0]->getId_cat());
                        header('Location:vue/index.php');
                }
                else
                    header("Location:connecter.php?error=1");
            }
            
            else
                header("Location:connecter.php");*/

                if (isset($_POST["login"]) && isset($_POST["mdp"])){
                    $l = $_POST["login"];
                    $m = $_POST["mdp"];
                    include("../modele/utilisateur.php");
                    require_once("../config/connexion.php");
                    Connexion::connect();
                    $rep = Utilisateur::connect($l,$m);
                
                    if(isset($rep[0])) {
                        $_SESSION['user']=$rep[0];
                        $_SESSION['login']=$rep[0]->getLogin();
                        header('Location:index.php');
                    }
                    else {
                        session_destroy();
                        header("Location:connecter.php?error=1");
                    }
                }
                
                session_destroy();
                header("Location:connecter.php");
        }
	
	}
	
	
?>