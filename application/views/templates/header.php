<html>
    <head lang="fr">
        <meta charset="UTF-8"/>  
        <title>La Grande Decouverte</title>
        <meta name="description" content="remplir" />
        <meta name="keywords" content="remplir"/> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="images/remplir.ico" type="image/x-icon">

        <!-- CSS -->
        <link href="<?php echo asset_url(''); ?>librairie/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset_url(''); ?>css/site.css" type="text/css" rel="stylesheet"/>
        <?php if (isset($css)) { ?> 
            <link href="<?php echo asset_url(''); ?>css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet"/>
        <?php } ?> 
        <!-- JavaScript -->
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.min.js" ></script>
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>js/site.js" ></script>

    </head>
    <body>
        <header class="navbar navbar-static-top bs-docs-nav " id="top" role="banner">
            <div class="container header">
                <div class="navbar-header ">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#"><img src="<?php echo asset_url(''); ?>img/logo_final.png" class="imageLogo" /></a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">VOYAGES</a><div class="traitHorizontale"></div>
                        </li>
                        <li>
                            <a href="#">CARNETS DE VOYAGES</a><div class="traitHorizontale"></div>
                        </li>
                        <li>
                            <a href="#">ACTUALIT&Eacute;S</a>
                        </li>
                        <li class="cacher">
                            <a href="#">CONNEXION / INSCRIPTION</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="<?php echo asset_url(''); ?>img/compte.png" class="imageCompte" /></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!---------- HEADER --------->	
        <!--        <div class="header">
                    <div class="logo">
                        <a href="#"><img src="<?php echo asset_url(''); ?>img/logo_final.png" width=250px height=100px/></a>
                    </div>
                    <div class="profil">
                        <a href="#"><img src="<?php echo asset_url(''); ?>img/compte.png" width=45px height=45px/></a>
                    </div>
                    <div class="menu">
                        <span><a href="#">VOYAGES</a></span>
                        |
                        <span><a href="#">CARNETS DE VOYAGES</a></span>
                        |
                        <span><a href="#">ACTUALIT&Eacute;S</a></span>
                    </div>
                </div>
                <div class="filAriane">
                    <span>Accueil > </span>
                </div>-->
        <!---------- / HEADER --------->	