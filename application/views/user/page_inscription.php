<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="content">
    <div class="content-inscription">
        <div class="legend">Inscription</div>  
        <?php
            echo form_open('user/verification/inscription');
        ?> 
        <div class="left">
            <span class="mess_required"><?php echo validation_errors(); ?></span>
            <h3>INFORMATION PERSONNELLE</h3>
            <div class="une_row">
                <!--<label for="nom" class="">Nom *</label>-->
                <p>
                    <input type="text" name="nom" maxlength="50" class="required" id="nom" placeholder="Votre nom*">
                </p>
            </div>

            <div class="une_row">
                <!--<label for="prenom" class="">Prenom *</label>-->
                <p>
                    <input type="text" name="prenom" maxlength="50" class="required" id="prenom" placeholder="Votre prenom*">
                </p>
            </div>

            <div class="une_row mail">
                <!--<label for="email" class="">E-mail *</label>-->
                <p>
                    <input type="email" name="email" class="required mail" id="email" placeholder="Votre e-mail*" <?php if (isset($mail)) {
                echo "value='" . $mail . "'";
            } ?>>
                </p>
            </div>

            <div class="une_row mail cmail">
                <!--<label for="cemail" class="">Confirmation E-mail *</label>-->
                <p>
                    <input type="email" name="cemail" class="required cmail" id="cemail" placeholder="Confirmer votre e-mail*">
                </p>
            </div>
            <h3>INFORMATION DE CONNEXION</h3>
            <div class="une_row mdp">
                <!--<label for="mdp" class="">Mot de passe *</label>-->
                <p>
                    <input type="password" name="mdp" maxlength="50" class="required mdp" id="mdp" placeholder="Votre mot de passe*">
                </p>
            </div>

            <div class="une_row mdp cmdp">
                <!--<label for="cmdp" class="">Confirmation mot de passe *</label>-->
                <p>
                    <input type="password" name="cmdp" maxlength="50" class="required cmdp" id="cmdp" placeholder="Confirmer votre mot de passe*">
                </p>
            </div>
            <div class="une_row">
                <span class="floatright">* Champs obligatoires</span>
            </div>
            <div class="clear"></div>
            <div class="une_row">
                <div class="g-recaptcha" data-sitekey="6LdLFAQTAAAAAJkTVuZtdW-Nf3mOQFIvNDQEhHDt"></div>
                <?php if (isset($messageError)) { echo $messageError; } ?>
            </div>
        </div>

        <div class="right">
            <aside class="account-assistance">
                <section class="box-contextual-help ">
                    <div class="image_assistance"></div>
                    <h1 class="local-assistance">Assistance locale ?</h1>
                    <ul class="help-options">
                        <li>
                            <img src="<?php echo asset_url(''); ?>images/mail_assi.png" class="" alt="mail"/> 
                            <a href="mailto:service.nl@g-star.com" class="help-option email-help" target="_blank" onclick="return false;"><em>by email</em>lagrandecouverte@gmail.com</a>
                        </li>
                        <li>
                            <img src="<?php echo asset_url(''); ?>images/tel_assi.png" class="" alt="tel"/> 
                            <a href="callto:08000200454" class="help-option phone-help" target="_blank"><em>by phone</em>06 71 69 85 16</a>
                        </li>
                        <li>Du lundi au vendredi de 9h à 12h30 et de 13h30 à 17h15</li>
                    </ul>
                </section>
                <section class="box-contextual-help ">
                    <h1 class="delivery-question">Questions ?</h1>
                    <p class="to-faq">Vous avez des questions concernant la réservation<a href="<?php echo base_url('/faq/index') ?>" class="faq-option" title="Frequently Asked Questions - Delivery" target="_blank">> Consulter notre FAQ</a></p>
                </section>
                <section class="box-contextual-help membershipBenefits membership-benefits">   
                    <h1 class="membership-question">Membre de la Grande Découverte</h1>
                    <ul class="membership-benefits-list">
                        <li class="membership-benefit-shipping"><span class="icon"></span><span class="text">Explorez le monde grâce à notre sélection de voyage.</span></li>
                        <li class="membership-benefit-offers"><span class="icon"></span><span class="text">Créez vos récits de voyage grâce aux carnets de voyage.</span></li>
                    </ul>
                </section>
            </aside>
        </div>
         <div class="clear"></div>

        <div class="legend"></div>

        <div class="une_row">
            <a href="<?php echo base_url('user/account/connexion') ?>" class="">
                <small>«</small>Connexion
            </a>
            <div class="submit_all_text">
                <input type="submit" name="submit" class="" id="bouton_page_inscription" value="Valider"/>
            </div>
            <div class="clear"></div>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
