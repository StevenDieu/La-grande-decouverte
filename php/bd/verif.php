<?php

session_start();
if (isset($_POST["login"]) && isset($_POST["mdp"])) {
    if (!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        if ($_POST["login"] == "remplir" && crypt($_POST["mdp"], CRYPT_MD5) == 'remplir') {
            sleep(1);
            $_SESSION['connect'] = 1;
            header('Location: index.php');
        } else {
            header('Location: connexion.php');
        }
    } else {
        header('Location: connexion.php');
    }
} else {
    header('Location: connexion.php');
}



