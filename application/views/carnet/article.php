<div class="content article">
    <div class="content_fiche">

        <?php if ($articles[0]->visible == 1) { ?>
            <div class="callbacks_container slider_principal">
                <?php if ($imagesCarnetVoyages) { ?>
                    <ul class="rslides" id="slider_top">
                        <?php foreach ($imagesCarnetVoyages as $imagesCarnetVoyage) { ?>
                            <li>
                                <img src="<?php echo asset_media($imagesCarnetVoyage->lien); ?>" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="clear"></div>

            <div class="content_article">
                <div>
                    <div class="carnet_user">
                        <p>Créer par <?= $articles[0]->prenom ?> <?= $articles[0]->nom ?>, le <?= $articles[0]->date_creation ?></p>
                    </div>
                    <div class="share_carnet">
                        <p><!--Partager ce carnet de voyage :-->
                            <a href="http://www.facebook.com/share.php?u=<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&title=<?php echo $articles[0]->titre; ?>" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" class="icone-social" alt=""></a>
                            <a href="http://twitter.com/intent/tweet?status=<?php echo $articles[0]->titre; ?>+<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" class="icone-social" alt=""></a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&title=<?php echo $articles[0]->titre; ?>&source=[SOURCE/DOMAIN]" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" class="icone-social" alt=""></a>
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