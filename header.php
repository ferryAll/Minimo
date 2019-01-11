<?php?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimo</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>

  <body> 
    
  <div class="grid-container">
  <img src="assets/images/logo_minimo.png"><img/>
  <ul class="dropdown menu" data-dropdown-menu>
  <li><a href="Accueil.php">Accueil</a></li>
  <li>
    <a href="Article.php">Articles</a>
    <ul class="menu">
      <li><a href="#">Lifestyle</a></li>
      <li><a href="#">Photos</a></li>
      <li><a href="#">Musique</a></li>
      <li><a href="#">Visites</a></li>
      <!-- ... -->
    </ul>
  </li>
  <li>
    <a href="#"> Déjà Membre? </a>
      <ul class="menu">
        <li><a href="#">Connexion</a></li>
        <li><a href="#">Inscription</a></li>
      </ul>
  </li>

    
  <img class="main_image" src="assets/images/01_image_principale.png"><img/>
  


<?php
 $mysqli = new mysqli('localhost','root','','minimo');
 
if ($mysqli->connect_errno) {
  // la connexion a échoué
  echo "Connexion échouée... Un problème de configuration?";

  // Ne faites jamais ça en production, mais pour l'exemple ici on va afficher les erreurs
  echo "Error: Connexion échouée, l'erreur est: : \n";
  echo "Errno: " . $mysqli->connect_errno . "\n";
  echo "Error: " . $mysqli->connect_error . "\n";
  
  exit;
}
?>