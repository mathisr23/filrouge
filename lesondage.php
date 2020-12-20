<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:connexion.php');
    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header style="padding-bottom: 30px;">
        <nav>
            <div class="menu">

                <a href="index.php">Accueil</a>
                <a href="amis.php">Amis</a>
                <a href="creation.php">Créer un sondage</a>
                <a href="modification.php">Modifier données</a>
                <a href="deconnexion.php">Deconnexion</a>
                <a href="inscription.php">Inscription</a>

            </div>
        </nav>
    </header>
    <h2>Sondage en Cours</h2>
    <section class="sondages">
        <div class="sondage">
            <div class="sondageTop">
                <p></p>
                <p>Temps restant</p>
            </div>
            <div class="sondageTitre">
                <?php 
                            
                                
                            $id_sond = $_GET['id'];
                            // $verif_id = "";

                            //     if ($verif_id !== $id_sond ){
                            //         print_r ('ouiii sondage');
                            //     }else{
                            //         echo 'Aucun sondage';
                            //         print_r ('Aucun sondage');
                            //     }

                            $sondage = $conn->query("SELECT * FROM creation WHERE id_sond = $id_sond");

                            while($infos_sondage = $sondage->fetch(PDO::FETCH_ASSOC)){
                            ?>
                <div>
                    <p> <?php echo $infos_sondage['question'];?> </p>
                </div>


            </div>
            <div class="choix">
                <button name="choixUn"> <?php echo $infos_sondage['choixUn'];?> </button>
                <button name="choixDeux"> <?php echo $infos_sondage['choixDeux'];?></button>
            </div>
            <?php
                            }
                        
                        
                        ?>

            <div class="commentaires">
                <div class="scroll">

                    <!-- LE CHAT -->

                    <div id="messages">

                        <?php
                                
                                $liste_messages = $conn->query("SELECT * FROM messages  ORDER BY sendAt"); //recuperation les messages et leurs infos dans la table

                                //boucle pour afficher les messages
                                while($msg = $liste_messages->fetch(PDO::FETCH_ASSOC)){
                                ?>
                        <div>
                            <!--On affiiche les éléments du message 1 par 1 -->
                            <p> <?php echo $msg['user'];?>&nbsp|&nbsp</p>
                            <p><?php echo $msg['content'];?></p>
                            <p> | <?php echo $msg['sendAt'];?></p>
                        </div>
                        <?php
                                }
                                ?>
                    </div>
                </div>
                <div class="comm">
                    <p><?php  echo $_SESSION['membre']['pseudo']; ?></p>
                    <form name="tchat">
                        <input type="text" id="" required>
                        <button id="send" method="POST" onclick="submitForm()">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>