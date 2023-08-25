<?php

$message = ''; // Variable pour stocker les messages de succès ou d'erreur

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$email = $_POST['email'];
	$subject = $_POST['objet'];
	$messageBody = $_POST['message'];

	// Validation rapide (vous pouvez ajouter plus de vérifications)
	if (empty($email) || empty($objet) || empty($messageBody)) {
		$message = "Veuillez remplir tous les champs.";
	} else {
		// Adresse email où vous souhaitez recevoir les messages
		$to = 'q.vilcoque@gmail.com';
		$headers = 'From: $email';

		if (mail($to, $objet, $messageBody, $headers)) {
			$message = "Message envoyé avec succès !";
		} else {
			$message = "Erreur lors de l'envoi du message.";
		}
	}
}

header('refresh:3; ../index.html');

?>
