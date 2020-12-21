<?php
    include_once "includes/con_database.inc.php";

    // restriction d'accès : si l'utilisateur n'est pas connecté, on l'empéche de venir sur cette page avec une redirection.
if(empty($_SESSION['membre'])) {
    // si c'est vide ou ça n'existe pas, alors l'utilisateur n'est pas connecté, on le redirige
    header('location:connexion.php');
    
}

    // verification si ajout ou suppression d'amis demandées
    $userConId = $_SESSION['membre']['id_user'];
    
    if(isset($_POST['userdelete'])) {

        $amis_supp = $_POST['userdelete'];

        $get_amis_id = $conn->query("SELECT * FROM membre WHERE pseudo = '$amis_supp'");
        $info_get_amis_id = $get_amis_id->fetch(PDO::FETCH_ASSOC);
        $amis_id=$info_get_amis_id['id_user'];
        $st_update = $conn->prepare("
                  DELETE FROM amis
                  WHERE user_id1 = '$userConId' AND user_id2 = '$amis_id'
                ");
                $st_update->execute();
                header('location:amis.php');
    }

    if(isset($_POST['useradd'])) {

        $amis_ajout = $_POST['useradd'];

        $get_amis_id = $conn->query("SELECT * FROM membre WHERE pseudo = '$amis_ajout'");
        $info_get_amis_id = $get_amis_id->fetch(PDO::FETCH_ASSOC);
        $amis_id=$info_get_amis_id['id_user'];
        $st_update = $conn->prepare("
                  INSERT INTO amis (user_id1, user_id2)
                  VALUES ('$userConId', '$amis_id')
                ");
                $st_update->execute();
                header('location:amis.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/amis.css">
    <title>Document</title>
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
    </header>

    <div class="titre">
        <h2>Amis de <?php echo $_SESSION['membre']['pseudo'];
        ?>
        </h2>
    </div>
    <hr class="firsthr">

    <?php
       $liste_amis = $conn->query("SELECT pseudo FROM membre WHERE id_user IN (SELECT user_id2 FROM amis WHERE user_id1=$userConId)");
        while($info_liste_amis = $liste_amis->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <div class="ajout">
                        <p> 
                            <?php echo $info_liste_amis['pseudo'];?>
                        </p>

                        <h2> 
                        
                        <?php 
        $pseudoAmis = $info_liste_amis['pseudo'];
        $recup_statut_amis = $conn->query("SELECT statut FROM membre WHERE pseudo = '$pseudoAmis'");
        $info_statut_amis = $recup_statut_amis->fetch(PDO::FETCH_ASSOC);

    if($info_statut_amis['statut'] == '1') {
            echo 'Deconnecté';
        }
        else{
            echo "Connecté";
        }
        ?>
                        </h2>
                        <form method="post">
                        <input id="userdelete" name="userdelete" type="hidden" value="<?php echo $info_liste_amis['pseudo']; ?>">
                        <button type="submit" class="btn-supp" name="supprimer_amis" value="Supprimer">Supprimer</button>
    </form>
                    </div>
                    
    <?php
        }
    ?>  

    <div class="titre">
        <h2>Ajouter des amis</h2>
    </div>
<hr class="secondhr">
    <?php
        $liste_non_amis = $conn->query("SELECT pseudo FROM membre WHERE id_user NOT IN (SELECT user_id2 FROM amis WHERE user_id1=$userConId)");
        while($info_liste_non_amis = $liste_non_amis->fetch(PDO::FETCH_ASSOC)){
     ?>
            <div class="ajout">
             <p>
                 <?php echo $info_liste_non_amis['pseudo'];?>
            </p>

            <form method="post">
                <input id="useradd" name="useradd" type="hidden" value="<?php echo $info_liste_non_amis['pseudo'];?>">
                <button type="submit" class="btn-add" name="ajouter_amis" value="Ajouter">Ajouter</button>
            </form>
            
            </div>
    <?php
        }
    ?>  
      
</body>
</html>