<?php

function retireAccent($str) {
    $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); 
    $str = preg_replace('#&[^;]+;#', '', $str);
    return $str;
}
