<?php

$host ="localhost";

$username = "root";

$password = "";

$database = "million";

$mysqli = @new mysqli($host, $username, $password, $database);


    if ($mysqli->connect_errno) {
        
        /* Use your preferred error logging method here */
        echo("site en maintenance"); 
        
        exit(); //j'arrete l'execution du programme

        //error_log('Connection error: ' . $mysqli->connect_errno);
    
    }

?>