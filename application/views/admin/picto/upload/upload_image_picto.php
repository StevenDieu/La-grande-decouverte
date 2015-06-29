<?php

// Constantes
define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . "/media/produit/picto/");    // Repertoire cible
// Tableaux de donnees
$tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
$infosImg = array();

// Variables
$extension = "";
$nomImage = "";
$tableauMessage = array();
$nbrImage = 0;

$error[1] = $error[2] = $error[3] = $error[4] = $error[5] = $error[6] = true;

if (!empty($_FILES)) {
    for ($i = 0; $i < $_POST["nombre"]; $i++) {
        $message = array();
        if (!empty($_FILES["fichier_" . $i]['name'])) {
            $extension = pathinfo($_FILES["fichier_" . $i]['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), $tabExt)) {
                $infosImg = getimagesize($_FILES["fichier_" . $i]['tmp_name']);
                if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                    if (isset($_FILES["fichier_" . $i]['error']) && UPLOAD_ERR_OK === $_FILES["fichier_" . $i]['error']) {
                        $nomImage = md5(uniqid()) . '.' . $extension;
                        if (move_uploaded_file($_FILES["fichier_" . $i]['tmp_name'], TARGETIMAGE . $nomImage)) {

                            $this->ImagePicto->setLien("produit/picto/" . $nomImage);
                            $id = $this->ImagePicto->addPicto();
                            $message = array("src" . $i => asset_media("produit/picto/" . $nomImage), "id" . $i => $id);
                        } else {
                            if ($error[1] == true) {
                                $message = array("message" . $i => 'Problème lors de l\'upload concernant une image!');
                                $error[1] = false;
                            }
                        }
                    } else {
                        if ($error[2] == true) {
                            $message = array("message" . $i => 'Une erreur interne a empêché l\'uplaod d\une image');
                            $error[2] = false;
                        }
                    }
                } else {
                    if ($error[3] == true) {
                        $message = array("message" . $i => 'Erreur dans les dimensions d\une image !');
                        $error[3] = false;
                    }
                }
            } else {
                if ($error[4] == true) {
                    $message = array("message" . $i => 'Le fichier à uploader n\'est pas une image !');
                    $error[4] = false;
                }
            }
        } else {
            if ($error[5] == true) {
                $message = array("message" . $i => 'L\'extension du fichier est incorrecte !');
                $error[5] = false;
            }
        }
        if (!empty($tableauMessage)) {
            if (!empty($message)) {
                $tableauMessage[$i] = array_merge($tableauMessage[$i - 1], $message);
            } else {
                $tableauMessage[$i] = $tableauMessage[$i - 1];
            }
        } else {
            $tableauMessage[$i] = $message;
        }
        $nbrImage++;
    }
} else {
    $tableauMessage[0] = array("message" . $i => 'Veuillez remplir le formulaire svp !');
}

echo json_encode(array_merge(array("nombre" => $nbrImage), $tableauMessage[$i - 1]));
