<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css" />
    <title></title>
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
</header>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>LOGIN</h3>
            <i class="fas fa-user-circle"></i>

            <fieldset>
                <input placeholder="Username" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input type="password" placeholder="Password" required>
            </fieldset>

            <fieldset>
                <button type="submit" id="contact-submit">Login</button>
            </fieldset>

        </form>
    </div>
</body>

</html>