<html>
    <head lang="fr">
        <meta charset="UTF-8"/>  
        <title>Administration</title>
        <meta name="description" content="remplir" />
        <meta name="keywords" content="remplir"/> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="assets/images/header/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!-- CSS -->        
        <?php
        if (isset($allCss)) {
            foreach ($allCss as $css) {
                ?> 
                <link href="<?php echo asset_url(''); ?>css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet"/>
                <?php
            }
        }
        ?> 
                
        <!-- JavaScript -->
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.min.js" ></script>
        <?php
        if (isset($alljs)) {
            foreach ($alljs as $js) {
                ?> 
                <script src="<?php echo asset_url(''); ?>js/<?php echo $js; ?>.js" type="text/javascript"></script>
                <?php
            }
        }
        ?> 

    </head>
    <body>
    <header>
        <a href="<?php echo base_url('admin/index/dashboard'); ?>">acceuil</a>
    </header>
        
