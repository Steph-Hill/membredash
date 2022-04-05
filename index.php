<?php
//connexion a ma base de donnée
    include("common/config.php");
    include ("common/form.class.php");
// une classe qui va gérer la forme
    $formConnexion = new FormHtml() ;

    $formInscription = new FormHtml() ;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>

    <header>

        <h1>Virtual dash</h1>

    </header>

    
    <section class="connexion">

       <?php 

        $formConnexion->title = "Connexion";

        $formConnexion->bouton = "Je me connecte !";

        $formConnexion->actionText = "login.php";

       echo $formConnexion->afficheForm(); ?>    

    </section><!-- End connexion -->


    <section class="inscription">


            <?php 

            $formInscription->title = "Inscription";

            $formInscription->bouton = "Je m'inscris !";

            $formInscription->actionText = "signin.php";
            
            echo $formInscription->afficheForm(); ?>

    </section><!-- End inscription -->



    <section class="dash">

        <h2>Dash</h2>

    </section><!-- End Dash -->


    <footer>

        <h3>

            <?php

                echo date("Y");

            ?>

        </h3>

    </footer>
</body>
</html>