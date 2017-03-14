<?php

header('refresh:3; ../index.html');

/* Email du destinataire */
$To  = "q.vilcoque@gmail.com";

/* Récupération */
$Subject  = $_POST['objet'];
$message = $_POST['message'];
$header = 'From:' . ($_POST['email']) . "\r\n" .
'Reply-To:' . ($_POST['email']) . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$From  = VerifierAdresseMail($_POST["email"]);

if ( $Subject == "" ) {
  echo "Veuillez indiquer un objet.";
  $erreur = true;
}

echo "<br>";

if ( $message == "" ) {
  echo "Veuillez indiquer un message.";
  $erreur = true;
}

//Vérification du mail
function VerifierAdresseMail($From)
{
  //Adresse mail trop longue (254 octets max)
  if(strlen($From)>254)
  {
    echo 'Votre adresse est trop longue.';
	echo "</br>";

  }

	  $nonASCII ='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  	$nonASCII ='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  	$nonASCII ='ũūŭůűųŵŷźżztșțΐάέήίΰαβγδεζηθικλμνξοπρςστυφ';
  	$nonASCII ='χψωϊϋόύώабвгдежзийклмнопрстуфхцчшщъыьэюяt';
 	  $nonASCII ='ἀἁἂἃἄἅἆἇἐἑἒἓἔἕἠἡἢἣἤἥἦἧἰἱἲἳἴἵἶἷὀὁὂὃὄὅὐὑὒὓὔ';
  	$nonASCII ='ὕὖὗὠὡὢὣὤὥὦὧὰάὲέὴήὶίὸόὺύὼώᾀᾁᾂᾃᾄᾅᾆᾇᾐᾑᾒᾓᾔᾕᾖᾗ';
  	$nonASCII ='ᾠᾡᾢᾣᾤᾥᾦᾧᾰᾱᾲᾳᾴᾶᾷῂῃῄῆῇῐῑῒΐῖῗῠῡῢΰῤῥῦῧῲῳῴῶῷ';

	$syntaxe = "#^[[:alnum:][:punct:]]{1,64}@[[:alnum:]-.$nonASCII]{2,253}\.[[:alpha:].]{2,6}$#";

	if(preg_match($syntaxe, $From))
	{
		echo "</br>";
	}
	else
	{
		echo "Email invalide";
		echo "</br>";
	}
}

/* Envoi du mail */

  mail( $To, $Subject, $message, $header);
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo 'Message envoyé !';


  exit();

?>
