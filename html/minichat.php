<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>proglife-quentin</title>
    <link href="../src/css/bootstrap.min.css" rel="stylesheet">
    <link href="../src/css/tuto.css" rel="stylesheet">
  </head>
<body>
  <header id="top">
    <a href="../index.html"><img class="img-responsive" id="banniere" src="../src/img/banniere2.jpg"  alt="banniere"></img></a>
  </header>
<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-default" id="couleurnav">
      <div class="container-fluid">
        <!-- Ici se trouve le "Hamburger button" -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Ici il s'agit du bouton permettant de faire défiler le menu lorsqu'il est réglé pour les mobiles-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--Début de la barre de navigation -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" id="couleur">
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="Projets.html">Projets</a></li>
            <!--<li><a href="TP.html">TP</a></li>
            <li><a href="SP.html">Situations Professionnelles</a></li>
            <li><a href="Veille.html">Veille Technologique</a></li>
            <li><a href="TC.html">Tableau de compétences</a></li>-->
            <li><a href="perso.html">Personnel</a></li>
            <li><a href="contact.html">Contact</a></li>
            <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
            <li class="active"><a href="minichat.php">Chat<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
 <div class="row">
  <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <form id="FormChat" action="minichat_post.php" method="post">
      <label for="pseudo">pseudo</label> <input type="text" name="pseudo" id="pseudo">
      <label for="message">message</label> <input type="text" name="message" id="message">

      <input type="submit" value="Envoyer">

    </form>
   </div>
  </div>
</div>

<?php
// connexion bdd
try
{
  $bdd = new PDO('mysql:host=localhost; dbname=test;charset=utf8', 'root', '');
}

catch(Exception $e){
  die('Erreur :'.$e->getMessage());
}

// recuperation des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toute les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch()) {
  echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> :'. htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
  </body>

</html>
