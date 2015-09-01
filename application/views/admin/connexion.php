<<<<<<< Updated upstream
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
=======
<div class="container">
   <div class="text-center"><img src="<?php echo asset_url(''); ?>images/header/finalogo_blanc.png" /></div>
   <div class="error_backoffice"><?php echo validation_errors(); ?></div>
   <?php 
       $attributes = array('class' => 'form-signin');
       echo form_open('admin/index/login',$attributes); 
  ?>
    <input type="text" class="form-control" placeholder="Identifant" id="username" name="username"autofocus>
        <input type="password" class="form-control" placeholder="Mot de passe" id="password" name="password">
     <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        <label class="checkbox pull-left">
          <input type="checkbox" value="remember-me"> 
          Se souvenir de moi
        </label>
    <a href="#" class="pull-right help">Besoin d'aide ? </a><span class="clearfix"></span> 
      </form>
    </div>

    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #000;
      }

      .error_backoffice{
        color : red;
        text-align: center;
      }

      .form-signin .form-control:active{
        border-color : #000;
      }

      .form-signin .form-control:focus{
        border-color : #000;
      }

      .btn-primary{
        color : #fff;
        background-color: #000;
        border-color : #fff;
      }

      .btn-primary:hover{
        color : #fff;
        opacity : 0.9;
        background-color: #000;
        border-color : #fff;
      }

      .text-center{
        margin-bottom: 50px;
      }
      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        background-color: #f7f7f7;
          -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      }

      .form-signin img{
      margin:0 25% 0 25%;
      }

      .heading{
        font-size:25px;
      }
      .heading-desc{
        font-size:18px;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-left: 15px;
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }

      .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-radius: 0;

      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-radius: 0;
      }
      .help
      {
          color : #000;
          margin-top: 10px;
      }
      .account-creation
      {
          display: block;
          margin-top: 10px;
      }</style>
>>>>>>> Stashed changes
