<?php
define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . '/media/'. $_POST["lien"]);    // Repertoire cible
if (file_exists(TARGETIMAGE)) {
    unlink(TARGETIMAGE);
}