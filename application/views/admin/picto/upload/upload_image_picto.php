<?php

// Constantes
define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . "/media/produit/picto/");    // Repertoire cible
// Tableaux de donnees
$tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
$infosImg = array();

// Variables
$extension = '';
$message = '';
$nomImage = '';
$tableauMessage = '';
$great = 0;

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
if (!empty($_FILES)) {
    for ($i = 0; $i < $_POST["nombre"]; $i++) {
        if (!empty($_FILES["fichier_" . $i]['name'])) {
            $extension = pathinfo($_FILES["fichier_" . $i]['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $tabExt)) {
                $infosImg = getimagesize($_FILES["fichier_" . $i]['tmp_name']);
                if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                    if (isset($_FILES["fichier_" . $i]['error']) && UPLOAD_ERR_OK === $_FILES["fichier_" . $i]['error']) {
                        $nomImage = md5(uniqid()) . '.' . $extension;
                        if (move_uploaded_file($_FILES["fichier_" . $i]['tmp_name'], TARGETIMAGE . $nomImage)) {
                            $great++;
                            $this->picto->setLien("produit/picto/" . $nomImage);
                            $id = $this->picto->addPicto();
                            $tableauMessage[$i] =  array("src".$i => asset_media("produit/picto/" . $nomImage), "id".$i => $id);
                            if($i != 0){
                                $tableauMessage[$i] = array_merge($tableauMessage[$i-1],$tableauMessage[$i]);
                            }
                        } else {
                            $message = '-6';
                        }
                    } else {
                        $message = '-5';
                    }
                } else {
                    $message = '-4';
                }
            } else {
                $message = '-3';
            }
        } else {
            $message = '-2';
        }
    }
} else {
    $message = '-1';
}
$great = array("nombre" => $great);
echo json_encode(array_merge($great,$tableauMessage[$i-1]));
