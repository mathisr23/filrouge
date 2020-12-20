<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:deconnexion.php');
    
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Fil rouge test</title>
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



        <!-- FIRST SECTION -->
        <section id="firstSection">
            <div class="texte">

                <h1>Défiez vos amis deviendra<br>plus fun avec des paris !</h1>
                <p>Défiez vos amis sur une thématique au choix ! Choisissez un gage, le perdant doit réaliser le gage sélectionné par le gagnant.</p>
                <a href="">Ajouter des amis</a>
            </div>

            <div class="img">
                <img src="img/bet.jpg">
            </div>
        </section>
        <div class="arrow">
            <a href=""><img src="img/down-arrow.png"></a>
        </div>
    </header>

    <!-- 2E SECTION -->

    <main>
        <section id="secondSection">
            <h1>Un pari, un gage et c'est parti !</h1>
            <hr>
            <p>Séries, divertissement, sports... Choissisez parmi nos nombreuses thématiques pour lancer des défis entre vous ! Vous démarrez avec 100 points à répartir stratégiquement sur les différents sondages. Le lendemain, découvrez vos résultats et
                le nombre de points que vous avez accumulez !</p>
        </section>



        <div class="bouton">
            <a href="">Défier vos amis gratuitement !</a>
        </div>
    </main>

    <!-- 3E SECTION -->

    <section id="thirdSection">
        <h1>Découvrez les paris du jour !</h1>
        <hr>
        <p>Ici, vous pouvez découvrir les thématiques du moment et commencer dès maintenant à parier !<br>Vous pouvez aussi choisir le thème de votre choix.</p>
    </section>

    <article>
        <section id="pari1">
            
            <img src="img/foot1.jpg">
            <h1>Football</h1>
            <p>Coupe du monde</p>
        </section>

        <section id="pari2">
            <img src="img/foot1.jpg">
            <h1>Lorem Ipsum</h1>
            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
        </section>

        <section id="pari3">
            <img src="img/foot1.jpg">
            <h1>Lorem Ipsum</h1>
            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
        </section>
    </article>

    <div class="bouton2">
        <a href="">Découvrir nos sondages</a>
    </div>

    <!-- 4E SECTION -->
    <section id="bigFourthSection">

        <section id="fourthSection">
            <h1>Envie de créer des paris personnalisés ?</h1>
            <hr>
        </section>

        <article class="s4article">
            <section id="s4left">

                <h2>Personnaliser vos paris !<span class="new">Nouveau !</span></h2>
                <p>Grande nouveauté de cette version, nous proposons à tous de créer des paris personnalisés. Voici les fonctionnalités ajoutées.</p>
                <p> *pour profiter de ces nouveautés, votre inscription au site est nécéssaire </p>
            </section>


            <section id="s4right">

                <span class="numbers">1</span>
                <p>Création d’un pari à partir de toutes les questions déjà existantes</p>

                <span class="numbers">2</span>
                <p>Création de questions personnalisées, qui seront partagées dans la bibliothèque commune</p>

                <span class="numbers">3</span>
                <p>Soumettez votre pari pour le faire vérifier et le faire apparaitre dans les paris du jour !</p>

            </section>

        </article>

        <div class="bouton3">
            <a href="">S'inscrire et profiter de toutes les fonctionnalités</a>
        </div>

    </section>

    <!-- FOOTER -->

    <!-- <footer>
        <a href="" title="Retour a l'accueil">
            <img src="Fil rouge - Intégration-assets/BETSCAPE-footer.png" alt="Betscape">
        </a>
        <section id="listefooter">
            <div class="colonne1">
                <p>Découvrir</p>
                <p>Thèmes du jour</p>
                <p>F.A.Q</p>
                <p>Blog</p>
            </div>

            <div class="colonne2">
                <p>Mentions Légales</p>
                <p>Politique de confidentialité</p>
            </div>

            <div class="rs">
                <img src="Fil rouge - Intégration-assets/Facebook.png">
                <img src="Fil rouge - Intégration-assets/Twitter.png">
                <img src="Fil rouge - Intégration-assets/Instagram.png">
                <img src="Fil rouge - Intégration-assets/Pintrest.png">
                <img src="Fil rouge - Intégration-assets/Tumblr.png">
            </div>
        </section>

        <hr>

        <div class="fin">
            <p>Cette maquette a été réalisé par Alexis Sensei</p>
            <p>Elle est une réponse a un défi de Nicolas d’interpréter en temps limité ma vision du fil rouge.</p>
            <p>Certains éléments de la maquette ne sont pas UX ou UI friendly, mais servent à maitriser l’exercice pédagogique de l’intégration de maquette.</p>
        </div>
    </footer> -->

</body>

</html>