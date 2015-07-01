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
        </div>

        <div class="right">
            <aside class="account-assistance">
                <section class="box-contextual-help ">
                    <h1 class="local-assistance">Local assistance?</h1>
                    <ul class="help-options">
                        <li><a href="mailto:service.nl@g-star.com" class="help-option email-help" target="_blank" onclick="return false;"><em>by email</em> service.nl@g-star.com</a></li>
                        <li><a href="callto:08000200454" class="help-option phone-help" target="_blank"><em>by phone</em>0800-0200454</a></li>
                        <li>From: Mon-Fri 09.00-20.00 | Sat 10.00-14.00</li>
                    </ul>
                </section>
                <section class="box-contextual-help ">
                    <h1 class="delivery-question">Delivery question?</h1>
                    <p class="to-faq">Go To<a href="/en_nl/help-info/frequently-asked-questions.htm" class="faq-option" title="Frequently Asked Questions - Delivery" target="_blank">> Frequently asked questions</a></p>
                </section>
                <section class="box-contextual-help membershipBenefits membership-benefits">   
                    <h1 class="membership-question">G-Star Membership</h1>
                    <ul class="membership-benefits-list">
                        <li class="membership-benefit-shipping"><span class="icon"></span><span class="text">Always free shipping on all orders</span></li>
                        <li class="membership-benefit-offers"><span class="icon"></span><span class="text">Special offers in-store and online</span></li>
                        <li class="membership-benefit-invites"><span class="icon"></span><span class="text">Invitations to special store events</span></li><li class="membership-benefit-previews"><span class="icon">&nbsp;</span><span class="text">Exclusive previews of new collections</span></li>
                        <li class="membership-benefit-newsletter"><span class="icon"></span><span class="text">Newsletter featuring the latest G-Star collections</span></li>
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
