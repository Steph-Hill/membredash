<section class="dash">

<?php 

$formNews->title = "Ajouter";

$formNews->bouton = "Ajouter mon actualité !";

$formNews->actionText = "news.php";

echo $formNews->afficheForm(); ?>

</section><!-- End Dash -->

<a href="logout.php">Deconnexion</a>

<?php

    $rqUser = $mysqli->query("SELECT * FROM  users WHERE id=".$_SESSION["idUser"]);

    $user = $rqUser->fetch_object();

    echo $user->email;


?>