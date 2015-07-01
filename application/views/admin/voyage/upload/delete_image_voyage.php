<?php

define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . '/media/' . $_POST["lien"]);
if (file_exists(TARGETIMAGE)) {
    echo "image supprimer";
    unlink(TARGETIMAGE);
} else {
    echo "image pas supprimer";
}