<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="CSS/inscription.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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
            <span><a href="deconnexion.php" title="Se déconnecter">Se connecter</a></span>

            <span><a href="inscription.php" title="Inscription">Inscription</a></span>
            <!-- <h1 id="userName"></h1> -->
        </nav>
    </header>



    <?php 
    include_once "includes/con_database.inc.php"; // les outils php pour le bon fonctionnement de ce site (ouverture de session, connexion à la BDD ...)

   ?>
        <section>
        <form method="POST" action="includes/register.inc.php" class="formulaire_connexion">
                <!-- <?php 
                        echo 'POST : <br>';
                        echo '<pre>'; print_r($_POST); echo '</pre>';
                        echo 'SESSION : <br>';
                        echo '<pre>'; print_r($_SESSION); echo '</pre>';
                        echo '<hr>';
                    ?>-->
                
                <br>
                <hr>
                <label for="mail">Adresse Mail</label><br>
                <input type="mail" name="mail" class="form_connexion" id="mail" required><br><br>

                <label for="pseudo">Pseudo</label><br>
                <input type="text" name="pseudo" class="form_connexion" id="pseudo" required><br><br>

                <label for="mdp">Mot de passe</label><br>
                <input type="text" name="mdp" class="form_connexion" id="mdp" required><br><br>

                <br>

                <button type="submit" name="Valider" class="form_connexion_submit" id="connexion"> Se connecter </button>

            </form>
        </section>
    </body>

</html>