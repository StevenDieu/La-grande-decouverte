<div class="content fiche_voyage">
    <!-- Slideshow 4 -->
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

    <div style="clear:both"></div>
    <div class="content_fiche_voyage">

        <div class="carnet_user">
            <p>Carnet : <img width="18" src="<?php echo asset_url(''); ?>images/ficheVoyage/visible/locked.png" class="icone-social" alt=""></p>
        </div>
        <div class="share_carnet">
            <p>Partager ce carnet de voyage :
                <a href="#" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" class="icone-social" alt=""></a>
                <a href="#" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" class="icone-social" alt=""></a>
                <a href="#" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" class="icone-social" alt=""></a>
                <a href="#" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-mail.png" class="icone-social" alt=""></a>
            </p>
        </div> 
    </div>
    <div style="clear:both"></div>
    <div class="baniere_description">
        <div class="image_transparente">
            <div class="content_fiche_voyage">
                <div class="image_profile">
                    <div class="bloc_image_profile">
                        <img src="<?php echo asset_url(''); ?>images/utilisateur/01/fabrice-instinct-voyageur.jpg" class="image_profile" alt="Image carnet de voyage"/>
                    </div>
                </div>
                <div class="description_profile">
                    <h1>JOHN DOE</h1>
                    <p>Je m'appelle John Doe, je suis étudiant sur Lille. Les sujets qui m'intéressent sont des plus divers, de la société sud américaine et ses transformations contemporaines aux débats politiques nationaux (France) ou internationaux, en passant par la ...</P>
                </div>
                <div class="clear"></div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
    <br/><br/><br/>
    <div class="content_fiche_voyage">

        <?php
        if ($articles) {
            ?>
            <div class="row blocTraiVerticalePoitiller">
                <div class="col-md-5"></div>
                <div class="col-md-1">
                    <div class="traiVerticalePoitiller"></div>
                </div>
                <div class="col-md-6"></div>
            </div>

            <?php
            foreach ($articles as $article) {
                ?>
                <div class="row blocVoyage">
                    <div class="col-md-5">
                        <div class="textJour">
                            <?php echo $article->titre; ?>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="pointRouge"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="row blockRow">                        
                            <div class="col-md-8">
                                <div class="descriptionJour">
                                    <div class="textDescriptionJourHaut">
                                        <?php echo tronque($article->contenu); ?>
                                    </div>
                                    <div class="textDescriptionJourBas">
                                        <a href="<?php echo base_url('voyage/carnet/article?id=' . $article->id) ?>">Lire la fiche</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">                                    
                                <div class="imgJour">
                                    <img src="<?php echo asset_url(''); ?>images/ficheVoyage/Av-Alameda.jpg" class="image_profile" alt="Image Voyage 1"/> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php
            }
        } else {
            ?>
            Il n'y a pas encore d'article
            <?php
        }
        ?>
    </div>
    <br/><br/><br/>
</div>
