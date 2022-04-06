<?php

        include ("config.php");

        $mysqli->query("INSERT INTO `news` (`id`, `idUser`, `actu`, `dateins`) VALUES (NULL, '".$_SESSION["idUser"]."', '".$_POST["actu"]."', CURRENT_TIMESTAMP)");

    header("location:http://membre" )
?>




