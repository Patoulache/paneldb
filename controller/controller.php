<?php

    require_once ("./modele/codb.php");

    $db = new connexion();
    $db->connect();
    
    require_once ("./vue/accueil.php");

?>