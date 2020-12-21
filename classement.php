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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="css/classement.css" />
      <link rel="stylesheet" href="css/style.css" />
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/f24d07b4e2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Projet Fil Rouge</title>
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
                    <a href="modification.php" title="Accueil">Modifier données</a>
                </li>
                <li>
                    <a href="classement.php" title="Classement">Classement</a>
                </li>

            </ul>
            <span><a href="deconnexion.php" title="Se déconnecter">Se déconnecter</a></span>

            <span><a href="inscription.php" title="Inscription">Inscription</a></span>
    
        </nav>
</header>


  
    <section id="classement">
    <h2>CLASSEMENT</h2>
        <ul>
            <li class="number1">
                <span class="nombre">1er</span>
                <span class="nom">Mathis</span>
                <span class="points">45 points</span>
                <span class="icone"><i class="fas fa-trophy"></i></span>
            </li>
            <li class="number2">
                <span class="nombre">2e</span>
                <span class="nom">Robert</span>
                <span class="points">40 points</span>
                <span class="icone"><i class="fas fa-medal"></i></span>
            </li>
            <li class="number3">
                <span class="nombre">3e</span>
                <span class="nom">Michel</span>
                <span class="points">30 points</span>
                <span class="icone"><i class="fas fa-medal"></i></span>
            </li>
            <li class="number4">
                <span class="nombre">4e</span>
                <span class="nom">Martin</span>
                <span class="points">28 points</span>
                <span class="icone"><i class="fas fa-shield-alt"></i></span>
            </li>
            <li class="number5">
                <span class="nombre">5e</span>
                <span class="nom">Benjamin</span>
                <span class="points">20 points</span>
                <span class="icone"><i class="fas fa-shield-alt"></i></span>
            </li>
        </ul>
    </section>
</body>

</html>