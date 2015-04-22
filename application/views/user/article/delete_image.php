<?php

$src = $_POST["src"];
$src = str_replace('http://localhost/', "C:/Users/steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/", $src);

if (file_exists($src)) {
    unlink($src);
}