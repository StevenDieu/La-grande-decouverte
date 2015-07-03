<?php

define('TARGET', str_replace('\\', '/', getcwd()) . "/assets/images/utilisateur/photoProfil/");    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier

$tabExt = array('jpg', 'gif', 'png', 'jpeg');    // Extensions autorisees
$infosImg = array();

$extension = '';
$message = '';
$nomImage = '';

if (!empty($_POST)) {
    // On verifie si le champ est rempli
    if (!empty($_FILES['fichier']['name'])) {
        // Recuperation de l'extension du fichier
        $extension = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

        // On verifie l'extension du fichier
        if (in_array(strtolower($extension), $tabExt)) {
            // On recupere les dimensions du fichier
            $infosImg = getimagesize($_FILES['fichier']['tmp_name']);

            // On verifie le type de l'image
            if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                // On verifie les dimensions et taille de l'image
                // Parcours du tableau d'erreurs
                if (isset($_FILES['fichier']['error']) && UPLOAD_ERR_OK === $_FILES['fichier']['error']) {
                    // On renomme le fichier
                    $nomImage = md5(uniqid()) . '.' . $extension;

                    // Si c'est OK, on teste l'upload
                    $file_tmp = $_FILES['fichier']['tmp_name'];
                    $dest_file = TARGET . $nomImage;
                    if (resize_image($file_tmp, $dest_file, $_POST)) {
                        $this->user->setId($this->session->userdata('logged_in')["id"]);
                        $this->user->setLien_image($nomImage);

                        if ($this->user->setImageProfil()) {
                            $message = $nomImage;
                        }
                    }
                } else {
                    $message = '0';
                }
            } else {
                $message = '0';
            }
        } else {
            $message = '0';
        }
    } else {
        $message = '0';
    }
} else {
    $message = '0';
}
echo $message;

function getExtension($size, $my_img) {
    switch ($size["mime"]) {
        case "image/jpeg":
            return imagecreatefromjpeg($my_img);
        case "image/gif":
            return imagecreatefromgif($my_img);
        case "image/png":
            return imagecreatefrompng($my_img);
        default:
            return false;
    }
}

function resize_image($my_img, $folder, $post) {
    $size = getimagesize($my_img);
    $src_im = getExtension($size, $my_img);

    if ($src_im != false) {
        $x = ($post['x'] * $size[0] ) / $post["widht"];
        $y = ($post['y'] * $size[1] ) / $post["height"];
        $w = ($post['w'] * $size[0] ) / $post["widht"];
        $h = ($post['h'] * $size[1] ) / $post["height"];

        $dst_im = imagecreatetruecolor($w, $h);
        imagecopyresampled($dst_im, $src_im, 0, 0, $x, $y, $w, $h, $w, $h);
        if (imagejpeg($dst_im, $folder)) {
            imagedestroy($dst_im);
            imagedestroy($src_im);
            return true;
        }
        imagedestroy($dst_im);
        imagedestroy($src_im);
        return false;
    }
}
