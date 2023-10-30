<?php

//si le bouton envoyer a été cliqué
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //on recupère l'adresse email
    $email = $_POST["email"];
    //on recupère l'objet du message
    $objet = $_POST["objet"];
    //on recupère le message
    $message = $_POST["message"];

    if (empty($email) || empty($objet) || empty($message)) {
        $message = "Veuillez remplir tous les champs.";
    }else{

        $to = "q.vilcoque@gmail.com";
        $headers = "From:" . $email;
        //on envoie le message avec la fonction mail
        if (mail($to, $objet, $message, $headers))
        //si le message a été envoyé, on le confirme
        {
            header('refresh:1; ../index.html');
        }
        //sinon on n'affiche un message d'erreur
        else {
            echo "Une erreur s'est produite";
        }

    }

   
}



?>






