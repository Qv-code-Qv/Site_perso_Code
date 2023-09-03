<?php

$destinataire = "q.vilcoque@gmail.com";
$sujet = $_POST['objet'];
$message = $_POST['message'];
$headers = 'From: $email';
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Utilisation de la fonction mail() pour envoyer l'e-mail
$mail_envoye = mail($destinataire, $sujet, $message, $headers);

// Vérification si l'e-mail a été envoyé avec succès
if ($mail_envoye) {
    echo "L'e-mail a été envoyé avec succès.";
} else {
    echo "L'envoi de l'e-mail a échoué.";
}

header('refresh:3; ../index.html');

?>
