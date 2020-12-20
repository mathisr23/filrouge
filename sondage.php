<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sondage.css" />
    <script src="js/main.js"></script>

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
                    <a href="index.php" title="Accueil">Amis</a>
                </li>
                <li>
                    <a href="" title="Creer un sondage">Créer un sondage</a>
                </li>
                <li>
                    <a href="index.php" title="Accueil">Modifier données</a>
                </li>
                <li>
                    <a href="classement.php" title="Classement">Classement</a>
                </li>

            </ul>
            <span><a href="login.php" title="Se déconnecter">Se déconnecter</a></span>

            <span><a href="login.php" title="Inscription">Inscription</a></span>
            <!-- <h1 id="userName"></h1> -->
        </nav>


    <div class="quiz-container">
        <div id="quiz"></div>

        <div class="submit">
            <button id="submit">Submit Quiz</button>
        </div>
        <div id="results"></div>

    </div>

    <script src="js/sondage.js"></script>
</body>

</html>