<div class="content article">
    <div class="content_fiche">


        <div class="callbacks_container">
            <ul class="rslides" id="slider_top">
                <li>
                    <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/1.jpg" alt="">
                    <p class="caption">This is a caption</p>
                </li>
                <li>
                    <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/2.jpg" alt="">
                    <p class="caption">This is another caption</p>
                </li>
                <li>
                    <img src="<?php echo asset_url(''); ?>images/ficheproduit/slidertop/3.jpg" alt="">
                    <p class="caption">The third caption</p>
                </li>
            </ul>
        </div>
        <div class="clear"></div>

        <div class="content_article">
            <div>
                <div class="carnet_user">
                    <p>Créer par John Doe, le 28.01.2014</p>
                </div>
                <div class="share_carnet">
                    <p>Partager ce carnet de voyage :
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
    </div>
    <div class="clear"></div>
</div>
