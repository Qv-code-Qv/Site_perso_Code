<?php

header('refresh:3; ../index.html');

if (isset($_POST['message'])) {
	$retour = mail('q.vilcoque@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], '' . "\r\n" . 'Reply-to: ' . $_POST['email']);
	if($retour)
		echo '<p>Votre message a bien été envoyé.</p>';
}

?>
