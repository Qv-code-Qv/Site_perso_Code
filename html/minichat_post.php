<?php

//connexion bdd
try {

  $bdd=new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','');


}
catch (Exception $e) {
  die('Erreur : '.$e->getMessage());

}

//Insertion du message a l'aide d'une requête préparé
$req=$bdd->prepare('INSERT INTO utilisateur(pseudo,message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

//Redirection du visiteur vers la page du minichat
header('Location: minichat.php');






 ?>
