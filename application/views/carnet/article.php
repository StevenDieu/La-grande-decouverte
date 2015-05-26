<div class="content article">
    <div class="content_fiche">

        <?php if ($articles[0]->visible == 1) { ?>
            <div class="callbacks_container">
                <ul class="rslides" id="slider_top">
                    <?php foreach ($imagesCarnetVoyage[0] as $images) { ?>
                        <li>
                            <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $images; ?>" alt="">
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="clear"></div>

            <div class="content_article">
                <div>
                    <div class="carnet_user">
                        <p>Créer par John Doe, le 28.01.2014</p>
                    </div>
                    <div class="share_carnet">
                        <p><!--Partager ce carnet de voyage :-->
                            <a href="#" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" class="icone-social" alt=""></a>
                            <a href="#" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" class="icone-social" alt=""></a>
                            <a href="#" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" class="icone-social" alt=""></a>
                        </p>
                    </div> 
                </div>

                <div class="content_article">
                    <h2 class="title"><?php echo $articles[0]->titre; ?></h2>

                    <?php echo $articles[0]->contenu; ?>
                </div>
            </div>

        <?php } else { ?>
            <div class="content_article">
                <br/>
                <h2> En attente de validation </h2>
                <br/>
                <br/>
                Cette article est en attente de validation pour un administrateur, nous sommes désolé de la gêne.
                <br/>
                <br/>
                Le staff
                <br/>
                <br/>
            </div>

        <?php } ?>

    </div>
    <div class="clear"></div>
</div>