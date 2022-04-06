<?php

    include ("config.php");

    
    //recherche d'utilisateurs dans la base de données
    $rqUser = $mysqli->query("SELECT * FROM users WhERE email ='".$_POST["email"]."' AND password = '".$_POST["pass"]."' LIMIT 1 ");

    //on verifie si on a un resultat

    if($rqUser->num_rows >0){
        //ouverture de session

        $user = $rqUser->fetch_object();

        //echo $user->id;

        $_SESSION["idUser"]= $user->id; //on stock la variable de connexion dans idUser

        header("location:/index.php"); 
        //var_dump($_SESSION);

    }else{
        //erreur de connexion
        header("location:http://membre/index.php?connexion=err");

    }

?>