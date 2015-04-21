<?php

// Get src.
$src = $_POST["src"];
$src = str_replace('http://localhost/', "C:/Users/steven/Dropbox/EasyPHP-DevServer-14.1VC9/data/localweb/", $src);
// Check if file exists.
if (file_exists($src)) {
    // Delete file.
    unlink($src);
}