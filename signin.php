<?php

        include ("config.php");

        $mysqli->query("INSERT INTO `users` (`id`, `email`, `password`, `dateins`) VALUES (NULL, '".$_POST["email"]."', '".$_POST["pass"]."', CURRENT_TIMESTAMP)");

      header("location:http://membre" )
?>
<?php

echo "votre inscription est terminé !";

?>




