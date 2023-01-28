
<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

session_start();

if (isset($_POST["login"]) && isset($_POST["mdp"])){
	$l = $_POST["login"];
	$m = $_POST["mdp"];
	include("../modele/utilisateur.php");
	require_once("../config/connexion.php");
	Connexion::connect();
	$rep = Utilisateur::seConnecte($l,$m);

	if(isset($rep[0])) {
		$_SESSION['user']=$rep[0];
		$_SESSION['login']=$rep[0]->getLogin();
		if($rep[0]->getId_cat());
			header('Location:index.php');
	}
	else
		header("Location:connecter.php?error=1");
}

else
	header("Location:connecter.php");


?>