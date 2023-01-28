<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['dateN']) && isset($_POST['mdp'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $adresse = $_POST['adresse'];
  $tel = $_POST['tel'];
  $dateN = $_POST['dateN'];
  $mdp = $_POST['mdp'];

  Attente::preInscription($n,$p,$m,$a,$t,$d,$mdp);
  //require_once("../config/connexion.php");
  //Connexion::connect();
 // require_once("../controleur/ControleurAttente.php");
  
 // ControleurAttente::preInscriptionUtilisateur($nom,$prenom,$email,$adresse,$tel,$dateN,$mdp);
  // Redirection vers la page d'attente de validation
  header('Location: wait.php');
}

?>