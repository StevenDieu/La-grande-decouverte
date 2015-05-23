<?php

$allowedExts = array("gif", "jpeg", "jpg", "png");

$temp = explode(".", $_FILES["file"]["name"]);

$extension = end($temp);

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

if ((($mime == "image/gif") || ($mime == "image/jpeg") || ($mime == "image/pjpeg") || ($mime == "image/x-png") || ($mime == "image/png")) && in_array($extension, $allowedExts)) {
    // Generate new random name.
    $name = sha1(microtime()) . "." . $extension;

    // Save file in the uploads folder.
    move_uploaded_file($_FILES["file"]["tmp_name"], getcwd() . "/media/carnet/article/" . $name);
    
    // Generate response.
    $response = new StdClass;
    $response->link = base_url('/media/carnet/article') . "/" .$name;
    echo stripslashes(json_encode($response));
}
