<?php
    include_once "includes/con_database.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pageSondages.css">
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
       
        </nav>

        <main>

<?php
    $liste_sond_term = $conn->query("SELECT * FROM creation WHERE dateFin < now() ORDER BY id_sond DESC");
    ?>

    <!-- Catégorie sondagetermines -->
    <article class="sondTermine">
    <h2>Sondages Terminés : <?php echo $liste_sond_term->rowCount(); ?></h2>
        <section class="titresTermines">
        <?php
            while($sond_term = $liste_sond_term->fetch(PDO::FETCH_ASSOC)){
        
                    $id_sond = $sond_term['id_sond'];
        ?>
            <a href="resultats.php?id=<?php echo $id_sond ?>">   <!-- Redirection vers la page du sondage -->
                <div class="titreTermine">
                    <p> <?php echo $sond_term['question'];?></p>
                                   
                    <p>
                        <?php   
                        echo $sond_term['dateFin'];
                        ?>
                    </p>
                </div>
            </a>
             <?php
            }
            ?>

        </section>
    </article>

    <article class="sondAmis">
        <h2>Sondages des amis</h2>
        <section class="sondages">
            <div class="sondage">
                <div class="sondageTop">
                    <p>Pseudo</p>
                    <p>Temps restant</p>
                </div>
                <div class="sondageTitre">
                    <p>TITRE</p>
                </div>
                <div class="choix">
                    <button>Choix 1</button>
                    <button>Choix 2</button>
                </div>
                
            </div>
        </section>

        <section class="sondages">
            <div class="sondage">
                <div class="sondageTop">
                    <p>Pseudo</p>
                    <p>Temps restant</p>
                </div>
                <div class="sondageTitre">
                    <p>TITRE</p>
                </div>
                <div class="choix">
                    <button>Choix 1</button>
                    <button>Choix 2</button>
                </div>
            </div>
        </section>

        <section class="sondages">
            <div class="sondage">
                <div class="sondageTop">
                    <p>Pseudo</p>
                    <p>Temps restant</p>
                </div>
                <div class="sondageTitre">
                    <p>TITRE</p>
                </div>
                <div class="choix">
                    <button>Choix 1</button>
                    <button>Choix 2</button>
                </div>
            </div>
        </section>
    </article>

    <!-- On defini la requête -->

    <?php
    $liste_sond_cours = $conn->query("SELECT * FROM creation WHERE dateFin > now() ORDER BY id_sond DESC");
    ?>

    <!-- Catégorie sondage en cours -->

    <article class="sondEnCours">
        <h2>Sondages en cours : <?php echo $liste_sond_cours->rowCount(); ?></h2>
        <section class="titresEnCours">

        <?php
            while($sond_en_cours = $liste_sond_cours->fetch(PDO::FETCH_ASSOC)){
                    $id_sond = $sond_en_cours['id_sond'];
        ?>
            <a href="lesondage.php?id=<?php echo $id_sond ?>">   <!-- Redirection vers la page du sondage -->
            
                <div class="titreEnCours">
                    <p> <?php echo $sond_en_cours['question'];?></p>
                                   
                    <p id="tempsRestant<?php echo $id_sond ?>">
                        <?php   
                        // $please = new DateTime($sond_en_cours['dateFin']);
                        // echo $please;
                        // echo $stringDate = $please->format('Y-m-d H:i:s');
                        $dateFin = $sond_en_cours['dateFin'];
                        ?>

                        <script>
                            // Set the date we're counting down to
                            var dateFin = "<?php echo $dateFin ?>";
                            var id_sond = "<?php echo $id_sond ?>";
                            var targetedTag = "tempsRestant"+ id_sond;
                            var countDownDate = new Date(dateFin).getTime();
                            // document.getElementById(targetedTag).innerHTML = countDownDate;

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                              // Get today's date and time
                              var now = new Date().getTime();

                              // Find the distance between now and the count down date
                              var distance = countDownDate - now;

                              // Time calculations for days, hours, minutes and seconds
                              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                              // Display the result in the element with id="targetedTag"
                              document.getElementById(targetedTag).innerHTML = days + "d " + hours + "h "
                              + minutes + "m " + seconds + "s ";

                              // If the count down is finished, write some text
                              if (distance < 0) {
                                clearInterval(x);
                                document.getElementById(targetedTag).innerHTML = "EXPIRED";
                              }
                            }, 1000);
                        </script>
                    </p>
                </div>
            </a>                    

             <?php
            }
            ?>

        </section>
    </article>

</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="chat.js"></script>
</header>
</body>
</html>