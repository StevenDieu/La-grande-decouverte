<?php
define('TARGETIMAGE', str_replace('\\', '/', getcwd()) . '/media/'. $pictos[0]->lien);    // Repertoire cible
if (file_exists(TARGETIMAGE)) {
    unlink(TARGETIMAGE);
}