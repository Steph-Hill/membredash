<?php
//connexion a ma base de donnée
    include ("config.php");
    include ("common/form.class.php");
    include ("common/formNews.class.php");

// une classe qui va gérer la forme
    $formConnexion = new FormHtml() ;

    $formInscription = new FormHtml() ;

    $formNews = new FormNewsHtml() ;
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

    <?php  

            if(isset($_SESSION["idUser"])){

                
                include ("pages/secure/dash.php");


            }else{

                include ("pages/connexion.php"); 
    
    
                include ("pages/inscription.php");


            }
            
            
            
            ?>

    <footer>

        <h3>

            <?php

                echo date("Y");

            ?>

        </h3>

    </footer>
</body>
</html>