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

        <link rel="icon" href="assets/images/header/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">


        <!-- CSS -->     
        <link href="<?php echo asset_url('css/admin/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/font-awesome.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo asset_url('css/admin/pages/dashboard.css'); ?>" rel="stylesheet">
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
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li>
                            <a href="<?php echo base_url('admin/index/dashboard'); ?>">
                                <i class="icon-home"></i>
                                <span>Accueil</span> 
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-road"></i>
                                <span>Voyages</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/voyages/liste'); ?>">Voyages</a></li>
                                <li><a href="<?php echo base_url('admin/carnet_voyages/edit'); ?>">Carnets voyages</a></li>
                                <li><a href="<?php echo base_url('admin/continent/add'); ?>">Continents</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/newsletters/liste'); ?>">
                                <i class="icon-envelope"></i>
                                <span>Newsletters</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/actualites/add'); ?>"> 
                                <i class="icon-paper-clip"></i>
                                <span>Actualites</span> 
                                <b class="caret"></b>
                            </a> 
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-user"></i>
                                <span>Comptes</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/administrateur/add'); ?>">Administrateurs</a></li>
                                <li><a href="<?php echo base_url('admin/customer/liste'); ?>">Utilisateurs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/faqs/liste'); ?>"> 
                                <i class="icon-question-sign"></i>
                                <span>FAQ</span> 
                                <b class="caret"></b>
                            </a> 
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
                                <i class="icon-user"></i>
                                <span>Cms</span> 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('admin/cmss/index'); ?>">Gestion des textes CMS</a></li>
                                <li><a href="<?php echo base_url('admin/index/dashboard'); ?>">Gestion des pages CMS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/index/logout') ?>"> 
                                <i class="icon-power-off"></i>
                                <span>Déconnexion</span> 
                                <b class="caret"></b>
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