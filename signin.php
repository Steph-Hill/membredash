<?php

        include("common/config.php");

        $mysqli->query("INSERT INTO `users` (`id`, `email`, `password`, `dateins`) VALUES (NULL, '".$_POST["email"]."', '".$_POST["pass"]."', CURRENT_TIMESTAMP)")

?>

<a href="index.php">retour</a>