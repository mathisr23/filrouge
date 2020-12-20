<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:connexion.php');
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/creation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Création d'un sondage</title>
</head>
<body>

     <!-- HEADER -->
     <header>
        <nav>

            <ul>
                <li>
                    <a href="index.php" title="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="amis.php" title="Amis">Amis</a>
                </li>
                <li>
                    <a href="pageSondages.php" title="Sondages">Sondages</a>
                </li>
                <li>
                    <a href="creation.php" title="Creer un sondage">Créer un sondage</a>
                </li>
                <li>
                    <a href="modification.php" title="Modifier données">Modifier données</a>
                </li>
                <li>
                    <a href="classement.php" title="Classement">Classement</a>
                </li>

            </ul>
            <span><a href="deconnexion.php" title="Se déconnecter">Se déconnecter</a></span>

            <span><a href="inscription.php" title="Inscription">Inscription</a></span>
            <!-- <h1 id="userName"></h1> -->
        </nav>
    </header>


    <h1>Créez votre propre sondage !</h1>

<div class="box">

  <div class="form">
  
    <form method="POST" action="includes/config.inc.php" class="formulaire">
        
      <input type="text" name="question" id="question" placeholder="Votre question : "/>
      <input type="text" name="choixUn" id="choiUn" placeholder="Choix 1"/>
      <input type="text" name="choixDeux" id="choixDeux" placeholder="Choix 2"/>
      <input type="time" name="timeLeft" id="timeLeft" placeholder="Temps limite (en minute)" min="1" max="">
     
      <input type="submit" name="enregistrement" class="form_send_sond"></input>
      
    </form>
  </div>
</div>
</body>
</html>