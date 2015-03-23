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
                    <div class="allTextMenu">
                        <a href="#" class="textMenu">
                            <div>
                                VOYAGES
                            </div>
                        </a>
                        <a href="#" class="textMenu">
                            <div>
                                CARNETS DE VOYAGES
                            </div>
                        </a>
                        <a href="#" class="textMenu">
                            <div>
                                ACTUALIT&Eacute;S
                            </div>
                        </a>
                        <a href="#" class="textMenu cacher">
                            <div>
                                CONNEXION / INSCRIPTION
                            </div>
                        </a>
                    </div>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="last" href="#"><img src="<?php echo asset_url(''); ?>img/compte.png" class="imageCompte" /></a></li>
                    </ul>
                </nav>
            </div>
        </header>