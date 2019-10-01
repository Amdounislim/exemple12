<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'vs_atelier-11');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if (!$link) {
        echo "Erreur de connexion avec la base de données";
        exit;
    }

?>