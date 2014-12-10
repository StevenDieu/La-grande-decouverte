<html>
    <head lang="fr">
        <meta charset="UTF-8"/>  
        <title>remplir</title>
        <meta name="description" content="remplir" />
        <meta name="keywords" content="remplir"/> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="google" content="notranslate" />

        <!-- CSS -->
        <link href="<?php echo $point; ?>librairie/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo $point; ?>css/site.css" type="text/css" rel="stylesheet"/>
        
        <!-- JavaScript -->
        <script type="text/javascript" src = "<?php echo $point; ?>librairie/js/jquery.min.js" ></script>
        <script type="text/javascript" src = "<?php echo $point; ?>librairie/js/jquery-ui.min.js" ></script>
        <script type="text/javascript" src = "<?php echo $point; ?>js/site.js" ></script>

        <?php
        if (empty($_SESSION)) {
            session_start();
        }
//        include $point . 'php/bd/connexionBD.php';
        include $point . 'librairie/php/phpmailer/class.phpmailer.php';
        include $point . 'php/function/function.php';
        ?>

    </head>
    <body ng-app>