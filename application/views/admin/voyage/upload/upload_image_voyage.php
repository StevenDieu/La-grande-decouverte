<?php

// Constantes
define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . "/media/produit/" . $_POST["lien"] . "/");    // Repertoire cible
// Tableaux de donnees
$tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
$infosImg = array();

// Variables
$extension = '';
$message = '';
$nomImage = '';

/* * **********************************************************
 * Creation du repertoire cible si inexistant
 * *********************************************************** */
if (!is_dir(TARGETIMAGE)) {
    if (!mkdir(TARGETIMAGE, 0755)) {
        $message = '-1';
    }
}

/* * **********************************************************
 * Script d'upload
 * *********************************************************** */
if (!empty($_POST)) {
    if (!empty($_FILES['fichier']['name'])) {
        $extension = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
        if (in_array(strtolower($extension), $tabExt)) {
            $infosImg = getimagesize($_FILES['fichier']['tmp_name']);
            if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                if (isset($_FILES['fichier']['error']) && UPLOAD_ERR_OK === $_FILES['fichier']['error']) {
                    $nomImage = $_POST["titre"] . "~~~~" . md5(uniqid()) . '.' . $extension;
                    if (move_uploaded_file($_FILES['fichier']['tmp_name'], TARGETIMAGE . $nomImage)) {
                        $tableauMessage = array("src" => asset_media("produit/" . $_POST["lien"]."/". $nomImage) ,
                                                "lien" => "produit/" . $_POST["lien"]."/". $nomImage);
                        $message = json_encode($tableauMessage);
                    } else {
                        $message = '-1';
                    }
                } else {
                    $message = '-1';
                }
            } else {
                $message = '-1';
            }
        } else {
            $message = '-1';
        }
    } else {
        $message = '-1';
    }
} else {
    $message = '-1';
}
echo $message;