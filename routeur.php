<?php
    session_start();
	require_once("config/connexion.php");
	
	Connexion::connect(); 
	$controleur  = "ControleurIndex";
	$action = "lireIndex";
	//$tableauControleurs = ["ControleurAttente", "ControleurUtilisateur", "ControleurReservation"];
	//$actionParDefaut = array(
	//"ControleurAttente" => "lireVoitures",
	//"ControleurUtilisateur" => "lireUtilisateurs"
	//);
	
	if($_GET["controleur"])
		$controleur= $_GET["controleur"];
	require_once("controleur/$controleur.php");
	//$class_methods = get_class_methods("$controleur");
	if ($_GET["action"])
		$action = $_GET["action"];
	//else
		//$action = $actionParDefaut[$controleur];
	
	$controleur::$action();
	
?>