<?php

$bd = 'remplir';
define('DSN', 'mysql:host=localhost;dbname=' . $bd);
try {
    $connexion = new PDO(DSN, 'root', '');
} catch (PDOException $e) {
    echo "erreur de type : " . $e->getMessage() . "<br/>";
    die();
}
?>
