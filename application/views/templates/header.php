<html>
    <head lang="fr">

        <meta charset="UTF-8"/>  
        <title><?php
            if (isset($titre)) {
                echo $titre . " - ";
            }
            ?>La Grande Decouverte</title>
        <meta name="description" content="<?php
        if (isset($description)) {
            echo $description;
        } else {
            ?><?php } ?>" />
        <meta name="keywords" content="lagrandecouverte,la grande decouverte, agence, Globetrotter voyage chez l’habitant ,voyage aventure ,voyage en immersion,voyage communautaire,voyage unique,voyage atypique,voyage en terre inconnue, tourisme communautaire,séjour atypique"/> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="google" content="notranslate" />
        <meta name="viewport" content="width=device-width"/>
        <meta name="msapplication-TileImage" content="<?php echo asset_url('images/header/favicon.png'); ?>" />
        <meta property="fb:page-id" content="<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
        <link rel="canonical" href="<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
        <link rel="apple-touch-icon" href="<?php echo asset_url('images/header/favicon.png'); ?>" />
        <link rel="icon" href="<?php echo asset_url('images/header/favicon.png'); ?>" type="image/x-icon"/>

        <!-- CSS -->
        <link href="<?php echo asset_url(''); ?>librairie/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo asset_url(''); ?>css/jquery-ui.min.css" type="text/css" rel="stylesheet"/><!-- datepicker -->
        <link href="<?php echo asset_url(''); ?>css/site.css" type="text/css" rel="stylesheet"/>
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
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.min.js" ></script>
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.lazyload.js" ></script>
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>js/site.js" ></script>
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
        <script type="text/javascript">
            var urlAddMailNewsletter = '<?php echo base_url('pages/addNewletter'); ?>';
        </script>
        <header class="navbar navbar-static-top bs-docs-nav " id="top" role="banner">
            <div class="header">
                <div class="navbar-header ">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url() ?>"><img src="<?php echo asset_url(''); ?>images/header/finalogo_blanc.png" class="imageLogo" /></a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <div class="allTextMenu">
                        <a href="<?php echo base_url('/voyages') ?>" class="textMenu">
                            <div>
                                VOYAGES
                            </div>
                        </a>
                        <a href="<?php echo base_url('/carnetsdevoyage') ?>" class="textMenu">
                            <div>
                                CARNETS DE VOYAGES
                            </div>
                        </a>
                        <a href="<?php echo base_url('/actualites') ?>" class="textMenu">
                            <div>
                                ACTUALIT&Eacute;S
                            </div>
                        </a>
                        <a href="<?php echo base_url('/user/verification/login') ?>" class="textMenu cacher">
                            <div>
                                CONNEXION / INSCRIPTION
                            </div>
                        </a>
                    </div>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:void(0)"><img id="popUpConnexion" src="<?php echo asset_url(''); ?>images/header/compte.png" class="imageCompte" /></a></li>
                    </ul>
                </nav>
            </div>
            <div class="content_popup">
                <div class="connexion_popin" style="display:none">
                    <?php if (!$this->session->userdata('logged_in')) { ?>
                        <div class="login">
                            <?php echo form_open('user/verification/login'); ?>
                            <div class="une_row">
                                <p>
                                    <input type="text" name="mail" maxlength="50" class="required" id="mail" placeholder="Mail*">
                                </p>
                            </div>
                            <div class="une_row">
                                <p>
                                    <input type="password" name="mdp" maxlength="50" class="required" id="mdp" placeholder="Mot de passe*">
                                </p>
                            </div>
                            <div class="connexion_footer">
                                <a href="<?php echo base_url('user/account/motDePasseOublie') ?>"><span class="g">Mot de passe oubli&eacute; ?</span></a>
                            </div>
                            <div>
                                <input type="submit" name="submit" class="bblue w100 center" id="popup_input_connexion" value="Se connecter">
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <hr class="connexion_hr"/>
                        <div class="bottom">
                            <?php echo form_open('user/account/inscription'); ?>
                            <div class="une_row">
                                <p>
                                    <input type="text" name="mail" class="required" id="mail" placeholder="Votre mail">
                                </p>
                            </div>
                            <div>
                                <input type="submit" name="submit" class="bblue w100 center" id="popup_login_inscription" value="S'inscrire">
                            </div>
                            </form>
                        </div>

                        <?php
                    } else {
                        ?>
                        <div class="connexion_header">
                            <span>Bienvenue <?php echo $this->session->userdata('logged_in')['prenom']; ?></span>
                        </div>
                        <ul class="menu_popup">
                            <a href="<?php echo base_url('user/account') ?>#comptes" class="menuChamp" data-onglet="comptes">
                                <li>
                                    <span class="icon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    Mon compte
                                </li>
                            </a>
                            <a href="<?php echo base_url('user/account') ?>#voyages" class="menuChamp" data-onglet="voyages">
                                <li>
                                    <span class="icon">
                                        <span class="glyphicon glyphicon-road"></span>
                                    </span>
                                    Mes Voyages
                                </li>
                            </a>
                            <a href="<?php echo base_url('user/account') ?>#carnets" class="menuChamp" data-onglet="carnets">
                                <li>
                                    <span class="icon">
                                        <span class="glyphicon glyphicon-book"></span>
                                    </span>
                                    Mes Carnets
                                </li>
                            </a>
                            <a href="<?php echo base_url('user/account/logout') ?>">
                                <li>
                                    <span class="icon">
                                        <span class="glyphicon glyphicon-off"></span>
                                    </span>
                                    Se déconnecter
                                </li>
                            </a>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </header>
        <div class="chargement">
            <div class="container">
                <div class="gearbox">
                    <div class="overlay"></div>
                    <div class="gear one">
                        <div class="gear-inner">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="gear two">
                        <div class="gear-inner">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="gear three">
                        <div class="gear-inner">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="gear four large">
                        <div class="gear-inner">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
                <span class="chargementHome">Chargement ...</span>
            </div>
        </div>
        <script type="text/javascript">
            $(".chargement").height(window.innerHeight);
        </script>
