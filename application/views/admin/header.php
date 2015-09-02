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


        <!-- CSS -->     
        <link href="<?php echo asset_url('css/admin/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/pages/dashboard.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/main.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/morris-0.4.3.min.css'); ?>" rel="stylesheet">


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <?php
        if (isset($allCss)) {
            foreach ($allCss as $css) {
                ?> 
                <link href="<?php echo asset_url(''); ?>css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet"/>
                <?php
            }
        }
        ?> 


        <?php
        if (isset($librairieCss)) {
            foreach ($librairieCss as $css) {
                ?>
                <link href="<?php echo asset_url(''); ?>librairie/css/<?php echo $css; ?>.css" type="text/css" rel="stylesheet"/>
                <?php
            }
        }
        ?> 

        <!-- JavaScript -->
        <script src="<?php echo asset_url('js/admin/jquery-1.7.2.min.js'); ?>"></script> 
        <script src="<?php echo asset_url('js/admin/morris.js'); ?>"></script> 
        <script src="<?php echo asset_url('js/admin/raphael-2.1.0.min.js'); ?>"></script> 
        <?php
        if (isset($alljs)) {
            foreach ($alljs as $js) {
                ?> 
                <script src="<?php echo asset_url(''); ?>js/<?php echo $js; ?>.js" type="text/javascript"></script>
                <?php
            }
        }
        ?> 
        <script type="text/javascript">
            var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
            var urlLittleSpinneur = '<?php echo asset_url() . "images/ajax-loader.gif"; ?>';
            var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
            var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
        </script>

    </head>
    <body>
        <div class="subsubnavbar">
            <div class="logo_admin">
                <a href="<?php echo base_url(''); ?>admin/dashboard"></a>
            </div>
            <div class="header-right">
                <p class="super">
                    <?php
                    $jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

                    $mois = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

                    $datefr = $jour[date("w")] . " " . date("d") . " " . $mois[date("n")] . " " . date("Y");
                    ?> 
                    Connecté sous <strong><?php echo $this->session->userdata('logged_admin')['username'] ?></strong><span class="separator">|</span><?php echo $datefr; ?><span class="separator">|</span><a href="<?php echo base_url('admin/logout') ?>" class="link-logout">Déconnexion</a>
                </p>
            </div>
        </div>
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li>
                            <a href="<?php echo base_url('admin/dashboard'); ?>">
                                <i class="icon-home"></i>
                                <span>Tableau de bord</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/orders/liste'); ?>">
                                <i class="icon-home"></i>
                                <span>Commandes</span> 
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-road"></i>
                                <span>Voyages</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/carnet_voyages/liste'); ?>">Carnets voyages</a></li>
                                <li><a href="<?php echo base_url('admin/continent/liste'); ?>">Continents</a></li>
                                <li><a href="<?php echo base_url('admin/pictos/liste'); ?>">Pictos</a></li>
                                <li><a href="<?php echo base_url('admin/voyages/liste'); ?>">Voyages</a></li>
                                <li><a href="<?php echo base_url('admin/voyage_home/liste'); ?>">Voyages accueil</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/actualites/liste'); ?>"> 
                                <i class="icon-paper-clip"></i>
                                <span>Actualites</span> 
                            </a> 
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-user"></i>
                                <span>Comptes</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/administrateur/liste'); ?>">Administrateurs</a></li>
                                <li><a href="<?php echo base_url('admin/customer/liste'); ?>">Utilisateurs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/faqs/liste'); ?>"> 
                                <i class="icon-question-sign"></i>
                                <span>FAQ</span> 
                            </a> 
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-user"></i>
                                <span>Cms</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/cmss/liste'); ?>">Gestion des blocs CMS</a></li>
                                <li><a href="<?php echo base_url('admin/pageCMS/liste'); ?>">Gestion des pages CMS</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-envelope"></i>
                                <span>Newsletter</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/newsletters/liste'); ?>">Abonnés à la newsletter</a></li>
                                <li><a href="<?php echo base_url('admin/newsletters/create'); ?>">Envoyé newsletter</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url('admin/commentaires/liste'); ?>"> 
                                <i class="icon-comments"></i>
                                <span>Commentaire</span> 
                            </a> 
                        </li>
                    </ul>
                </div>
                <!-- /container --> 
            </div>
            <!-- /subnavbar-inner --> 
        </div>
        <div class="main">
            <div class="main-inner">