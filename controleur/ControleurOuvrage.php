<?php

require_once("modele/ouvrage.php");
    class ControleurOuvrage
    {
        

        public static function afficheOuvrages()
		{
			
            
            require_once("vue/header.php");
			
			require_once("vue/ouvrage/ouvrages.php");
           

           include("vue/footer.php");
           
		}

        public static function listeOuvrages()
        {
            $listeOuvrage = Ouvrage::getOuvrages();
            return $listeOuvrage;
        }

        public static function recupOuvrage($id)
        {
            $ouvrage = Ouvrage::getOuvrage($num);
            return $ouvrage;
        }
        
    }
?>