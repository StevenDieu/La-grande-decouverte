<?php
  if( isset($_POST['var']) && !empty($_POST['var']) ) {
    $retour = $_POST['var'];
  } else {
    $retour = 'Une erreur est survenue.';
  }
  echo $retour;
?>