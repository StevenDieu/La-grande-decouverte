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
        <link rel="icon" href="assets/images/header/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

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
                
        <!-- JavaScript -->
        <script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/jquery.min.js" ></script>
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
        <header class="navbar navbar-static-top bs-docs-nav " id="top" role="banner">
            <div class="header">
                <div class="navbar-header ">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url('pages') ?>"><img src="<?php echo asset_url(''); ?>images/header/finalogo_blanc.png" class="imageLogo" /></a>
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
                        <li><a class="last" href="#"><img src="<?php echo asset_url(''); ?>images/header/compte.png" class="imageCompte" /></a></li>
                    </ul>
                </nav>
            </div>
            <div class="content_popup">
                <div class="connexion_popin" style="display:none">
                    <?php  if(!$this->session->userdata('logged_in')){ ?>
                    <div class="connexion_header">
                        <span>Connexion</span>
                    </div>
                    <div class="connexion_form login">
                        <?php echo form_open('user/verifIdentification/verifLogin'); ?>
                            <div class="une_row">
                                <p>
                                    <input type="text" name="user" maxlength="50" class="required" id="user" placeholder="Nom d'utilisateur*">
                                </p>
                            </div>
                            <div class="une_row">
                                <p>
                                    <input type="password" name="mdp" maxlength="50" class="required" id="mdp" placeholder="Mot de passe*">
                                </p>
                            </div>

                            <div class="submit_all_text">
                                <input type="submit" name="submit" class="" id="popup_input_connexion" value="Se connecter">
                            </div>
                        </form>
                    </div>
                    <hr class="connexion_hr g"/><span class="ou">OU</span><hr class="connexion_hr d"/>
                    <div class="connexion_form bottom">
                        <?php echo form_open('user/account/inscription'); ?>
                            <div class="une_row">
                                <p>
                                    <input type="text" name="mail" class="required" id="mail" placeholder="Votre mail">
                                </p>
                            </div>
                             <div class="submit_all_text">
                                <input type="submit" name="submit" class="" id="popup_login_inscription" value="S'inscrire">
                            </div>
                        </form>
                    </div>
                    <div class="connexion_footer">
                        <a href="#"><span class="d">Mot de passe oubli&eacute; ?</span></a>
                    </div>
                    <?php }else{
                        $session_data = $this->session->userdata('logged_in');
                        $user_name = $session_data['user']; ?>
                            <div class="connexion_header">
                                <span>Bienvenue <?php echo $user_name ?></span>
                            </div>
                            <ul class="menu_popup">
                                <li><a href="<?php echo base_url('user/account') ?>">- Mon compte</a></li>
                                <li><a href="<?php echo base_url('user/account/logout') ?>">- Se déconnecter</a></li>
                            <ul>
                            <div class="connexion_footer">
                            </div>
                    <?php } ?>
                </div>
            </div>
        </header>
