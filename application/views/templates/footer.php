<footer id="footer" >
    <div class="row blockFooter_1">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="footer" class="row">
                <div class="col-md-4 trait bas"></div>
                <div class="col-md-4 tailleTitreContact"><h2 class="titre">CONTACTEZ NOUS</h2></div>
                <div class="col-md-4 trait bas"></div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_2">
        <div class="col-md-1"></div>
        <div class="col-md-10 au">
            au
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_3">
        <div class="col-md-1"></div>
        <div class="col-md-10 numerosFooter">
            06 71 69 85 16
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_4">
        <div class="col-md-1"></div>
        <div class="col-md-10 explicationFooter">
            du lundi au vendredi<br/>
            de 9h à 12h30 et de 13h30 à 17h15<br/>
            Email : lagrandecouverte@gmail.com<br/>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 "></div>
            <div class="col-md-4 trait"></div>
            <div class="col-md-4 "></div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_6">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 ">
                <div class="blockFooter_6_1">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titre">INSCRIVEZ-VOUS POUR NOTRE NEWSLETTER</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 textFooter newsletter">
                            <p>Restez à jour avec nos voyages, nos carnets de voyage, nos aventures et des invitations à des événements spéciaux.</p>
                            <p>Vous pouvez vous retirer à tout moment.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php if($this->session->flashdata('result_newsletter') != ''){ ?>
                                <span><?php echo $this->session->flashdata('result_newsletter'); ?></span>
                            <?php } ?>
                            <?php echo validation_errors(); ?>
                            <?php if (isset($error)) echo $error; ?>
                            <?php echo form_open('pages/addNewletter'); ?>
                            <input name="mail" id="mail" type="text" class="form-control inputButtonNewsletter" placeholder="votre e-mail"/>
                            <input type="submit" class="buttonNewsletter" value="OK" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blockFooter_6_2">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titre">RESTEZ CONNECTÉ AVEC LA GRANDE DECOUVERTE</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 textFooter blocPicReseau">
                            <a href="https://www.facebook.com/pages/La-grande-decouverte/1611626992384420?skip_nax_wizard=true&ref_type=bookmark" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" alt=""></a>
                            <a href="https://plus.google.com/u/1/112230737464101123366/about" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-google.png" alt=""></a>
                            <a href="https://www.linkedin.com/profile/view?id=425624292&authType=NAME_SEARCH&authToken=hr5H&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2Cidx%3A1-1-1%2CtarId%3A1432713582902%2Ctas%3Ala%20grande%20decouverte" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" alt=""></a>
                            <a href="https://www.tumblr.com/blog/lagrandedecouverte" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-tumblr.png" alt=""></a>
                            <a href="https://twitter.com/LGD_officiel" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCiVobuSJjj6Rc0YtdWwMcyw" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-youtube.png" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="blockFooter_6_3">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="titre">EN SAVOIR PLUS SUR LA GRANDE DECOUVERTE</h3>
                        </div>

                    </div>
                    <div class="row textFooter">
                        <ul>
                            <li><a href="<?php echo base_url('/pages/qui_sommes_nous') ?>" target="_blank">Qui sommes-nous ?</a></li>
                            <li><a href="<?php echo base_url('/pages/presse') ?>" target="_blank">Espace presse</a></li>
                            <li><a href="<?php echo base_url('/contact/index') ?>">Nous contacter</a></li>
                            <li><a href="<?php echo base_url('/pages/nous_rejoindre') ?>" target="_blank">Nous rejoindre</a></li>
                            <li><a href="<?php echo base_url('/pages/mentionsLegales') ?>" target="_blank">Mentions légales</a></li>
                            <li><a href="<?php echo base_url('/pages/cgv') ?>" target="_blank">CGV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_7">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 "></div>
            <div class="col-md-4 trait"></div>
            <div class="col-md-4 "></div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row blockFooter_7">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="menuBas">
                <span><a href="<?php echo base_url('/pages/mentionsLegales') ?>">Mentions légales</a></span>
                &nbsp; . &nbsp;
                <span><a href="<?php echo base_url('/faq/index') ?>">FAQ</a></span>
                &nbsp; . &nbsp;
                <span><a href="<?php echo base_url('/pages/cgv') ?>">Conditions générales de vente</a></span>
                &nbsp; . &nbsp;
                <span><a href="#">Conditions générales d'utilisation du site </a></span>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

</footer>

<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/responsiveslides.min.js" ></script>
<script type="text/javascript" src = "<?php echo asset_url(''); ?>js/jquery-ui.min.js" ></script>   

<?php
if (isset($librairieJs)) {
    foreach ($librairieJs as $js) {
        ?>
        <script src="<?php echo asset_url(''); ?>librairie/js/<?php echo $js; ?>.js" type="text/javascript"></script>
        <?php
    }
}

if (isset($map)) {
    ?>
    <script type="text/javascript">
        $(function ($) {
            $('#map-continents').cssMap({
                'size': sizeForMap,
            });

        });
    </script>
    <?php
}
?> 
<script type="text/javascript" src = "<?php echo asset_url(''); ?>librairie/js/bootstrap.min.js" ></script>   
</body> 
</html>
