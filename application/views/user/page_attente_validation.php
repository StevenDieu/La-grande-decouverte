<script type="text/javascript">
    var urlSendMail = "<?php echo base_url('user/verification/return_confirmation_user_mail') ?>"
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlSucces = '<?php echo base_url('pages/messageSucces'); ?>';
</script>

<div class="content" style="display: block; visibility: visible;">
    <div class="content-inscription">
        <div class="legend">Votre compte est en attente de validation</div>  
        <form method="post" accept-charset="utf-8"> 
            <div class="left">
                <span class="mess_required"></span>
                <h3>INFORMATION PERSONNELLE</h3>
                <br/><br/>

                &nbsp;&nbsp;&nbsp;&nbsp;<label for="nom" class="">Votre email :</label> &nbsp;&nbsp;&nbsp;
                <?php
                if (isset($mail)) {
                    echo $mail;
                }
                ?>
                <i></i>

                <div class="clear"></div>
                <br/>
                <?php if (isset($mail)) { ?>
                    <h3>INFORMATION COMPLEMENTAIRE</h3>
                    <br/><br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<label for="nom" class="">Nous venons de <b>vous envoyez un mail</b>,vérifiez votre boite e-mail pour valider votre compte.</label><br/><br/>

                    &nbsp;&nbsp;&nbsp;&nbsp;<label for="nom" class="">Vous n'avez pas reçu de mail ?</label><br/><br/><br/>

                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="bblue sendMail" value="Renvoyer le mail">
                    <br/><br/>
                    <div class="alertType">
                    </div>

                    <div class="clear"></div>
                <?php } ?>
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
                </div>
                <div class="clear"></div>
            </div>
        </form>    
    </div>
</div>
