<?php
    session_start();
    if(!isset($_SESSION['pseudo']) && !isset($_SESSION['email'])){
        header('Location: login.php');
    }

    echo "Bienvenue ".$_SESSION['pseudo'];