<?php

function asset_url($url = "") {
    if ($url !== "") {
        return base_url() . 'assets/' . $url;
    }
    return base_url() . 'assets/';
}

function tronque($str, $nb = 800) {
    if (strlen($str) > $nb) {
        $str = substr($str, 0, $nb);
        $position_espace = strrpos($str, " ");
        $texte = substr($str, 0, $position_espace);
        $str = $str . "...";
    }
    $str = strip_tags($str);
    return $str; //on retourne la variable modifiée
}

function view() {
    return base_url() . '/';
}

function asset_isset($tab, $tabTexte) {
    $flag = true;
    $texte_error = array();
    for ($i = 0; $i < sizeof($tab); $i++) {
        if (!isset($tab[$i]) || empty($tab[$i])) {
            $flag = false;
            array_push($texte_error, $tabTexte[$i]);
        }
    }
    $result = array("flag" => $flag, "error" => $texte_error);

    return $result;
}

function nombre_caratere($tab, $tabTexte, $nombreARetirer) {
    $flag = true;
    $texte_error = array();
    for ($i = 0; $i < sizeof($tab) - $nombreARetirer; $i++) {
        if (sizeof($tab[$i]) >= 6 && sizeof($tab[$i]) <= 50) {
            $flag = false;
            array_push($texte_error, $tabTexte[$i]);
        }
    }
    $result = array("flag" => $flag, "error" => $texte_error);

    return $result;
}
