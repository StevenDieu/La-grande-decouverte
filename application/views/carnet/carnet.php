<div class="content fiche_voyage">
    <!-- Slideshow 4 -->
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
    <div style="clear:both"></div>
    <div class="content_fiche_voyage">

        <div class="carnet_user">
            <p><!--Carnet : --><img width="18" src="<?php
                if ($carnetVoyage[0]->prive == 0) {
                    echo asset_url('') . "images/ficheVoyage/visible/unlocked.png";
                } else {
                    echo asset_url('') . "images/ficheVoyage/visible/locked.png";
                }
                ?>" class="icone-social" alt=""></p>
        </div>
        <div class="share_carnet">
            <p><!--Partager ce carnet de voyage :-->
                <a href="http://www.facebook.com/share.php?u=<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>&title=<?= $carnetVoyage[0]->titre ?>" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" class="icone-social" alt=""></a>
                <a href="http://twitter.com/intent/tweet?status=<?= $carnetVoyage[0]->titre ?> + <?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" class="icone-social" alt=""></a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>&title=<?= $carnetVoyage[0]->titre ?>&source=[SOURCE/DOMAIN]" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" class="icone-social" alt=""></a>
                <a href="https://plus.google.com/share?url=<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-google.png" class="icone-social" alt=""></a>
            </p>
        </div> 
    </div>
    <div style="clear:both"></div>
    <div class="baniere_description">
        <div class="image_transparente">
            <div class="content_fiche_voyage">
                <div class="image_profile">
                    <div class="bloc_image_profile">
                        <?php if ($user[0]->lien_image == null) { ?>
                            <img src="<?php echo asset_url('images/utilisateur/photoProfil/profile-photo.jpg'); ?>" class="image_profile" alt="Image carnet de voyage"/>
                        <?php } else { ?>
                            <img src="<?php echo asset_url('images/utilisateur/photoProfil/') . $user[0]->lien_image; ?>" class="image_profile" alt="Image carnet de voyage"/>
                        <?php } ?>
                    </div>
                </div>
                <div class="description_profile">
                    <h1><?php echo $user[0]->prenom . ' ' . $user[0]->nom ?></h1>
                    <?php if ($user[0]->description == "") { ?>
                        <p>Pas encore de description</P>
                    <?php } else { ?>
                        <p><?php echo tronque($user[0]->description, 350); ?></P>
                    <?php } ?>
                </div>
                <div class="clear"></div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
    <br/><br/><br/>
    <div class="content_fiche_voyage">

        <?php
        if ($carnetVoyage[0]->prive == 1 && $carnetVoyage[0]->token !== $_GET["token"]) { ?>
            <div class="content_fiche_voyage">
                <h2> --- Carnet privé --- </h2>
                <br/>
                Ce carnet est privé vous ne pouvez le visualiser.
                <br/>
                <br/>
                Le staff
                <br/>
                <br/>
            </div>
        <?php }else if ($articles) {
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
            <div class="content_fiche_voyage">
                <h2> --- Aucun article --- </h2>
                <br/>
                L'utilisateur n'a pas encore rempli un article soyez patient !
                <br/>
                <br/>
                Le staff
                <br/>
                <br/>
            </div>
            
            <?php
        }
        ?>
    </div>
    <br/><br/><br/>
</div>
