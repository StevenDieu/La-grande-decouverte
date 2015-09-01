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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="icon" href="<?php echo asset_url(''); ?>images/header/favicon.png" type="image/x-icon"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="<?php echo asset_url(''); ?>librairie/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>


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
        <div class="container">
            <div class="text-center"><img src="<?php echo asset_url(''); ?>images/header/finalogo_blanc.png" /></div>
            <?php echo validation_errors(); ?>
            <?php
            $attributes = array('class' => 'form-signin');
            echo form_open('admin/connexion/login', $attributes);
            ?>
            <p style="color:red;"><?php if(isset($erreur)) echo $erreur; ?></p>
            <input type="text" class="form-control" placeholder="Identifant" id="username" name="username"autofocus>
            <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            <label class="checkbox pull-left">
                <input type="checkbox" value="remember-me"> 
                Se souvenir de moi
            </label>
            <a href="#" class="pull-right help">Besoin d'aide ? </a><span class="clearfix"></span> 
            <?php echo form_close(); ?>
        </div>
    </body> 
</html>