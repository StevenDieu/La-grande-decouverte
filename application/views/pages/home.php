<!---------- CONTENT ------- -->	
<div class="content content-home">
    <div class="displayMapSize">
        <div class="divLeTireurTop">
            <svg class="blurpMenuRetour" width="192" height="61" viewBox="0 0 160.7 61.5" >
            <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
            </path>
            </svg>
            <div class="btn--top_textRetour"> 
                <span class="btn__arrow btn__arrow--top"></span> 
                <span class="btn__arrow btn__arrow--bottom"></span> 
            </div> 
        </div>
    </div>

    <div class="callbacks_container slider_principal">
        <?php if ($voyages) { ?>
            <ul class="rslides" id="slider_top">
                <?php foreach ($voyages as $voyage) { ?>
                    <li>
                        <img src="<?php echo asset_media($voyage->lien); ?>" alt="">
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div class="displayMapSize">
        <div class="map">
            <div id="map-continents">
                <ul class="continents">

                    <?php
                    foreach ($continents as $continent) {
                        if ($continent->tag == "AFRIQUE") {
                            ?>
                            <li class="c1"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Afrique</a></li>
                            <?php
                        } else if ($continent->tag == "ASIE") {
                            ?>
                            <li class="c2"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Asie</a></li>
                            <?php
                        } else if ($continent->tag == "OCEANIE") {
                            ?>
                            <li class="c3"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Océanie</a></li>
                            <?php
                        } else if ($continent->tag == "EUROPE") {
                            ?>
                            <li class="c4"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Europe</a></li>
                            <?php
                        } else if ($continent->tag == "AMERIQUE_DU_NORD") {
                            ?>
                            <li class="c5"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Amerique du nord</a></li>
                            <?php
                        } else if ($continent->tag == "AMERIQUE_DU_SUD") {
                            ?>
                            <li class="c6"><a href="<?php echo base_url('/voyage/carnet/voyage?continent=') . $continent->id ?>">Amerique du sud</a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="divLeTireurBottom">
                <svg class="blurpMenu" width="192" height="61" viewBox="0 0 160.7 61.5" >
                <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
                </path>
                </svg>
                <div class="btn--top_text"> 
                    <span class="btn__arrow btn__arrow--top"></span> 
                    <span class="btn__arrow btn__arrow--bottom"></span> 
                </div>
            </div>
        </div>
    </div>


    <div class="clear"></div>

    <div class="contenu_home">
        <?php if ($this->session->flashdata('result_newsletter') > 0) { ?>
            <div class="messageAlerteCarnet center">
                <div class="alertType"><div class="alert alert-success fade in limiteMessage">
                        <strong>Succés !</strong> Vous êtes bien inscrit à la newsletter.</div></div>
            </div>
            <br/><br/>
        <?php } ?>
        <div class="voyages">
            <h2>Nos voyages en cours</h2>
            <p class="soush">Soyez au courant de nos dernières nouveautés grâce aux actualités.</p>
            <div class="bloc-voyage">
                <div class="liste_voyages">
                    <?php
                    $i = 0;
                    $id = 0;
                    foreach ($voyages as $v) {
                        if ($id != $v->vId) {
                            $i++;
                            if ($i % 2) {
                                echo '<div class="voyage gauche">';
                            } else {
                                ?>
                                <div class="voyage droite">
                                    <?php
                                }
                                ?>

                                <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->vId; ?>">
                                    <div class="bloc_image">
                                        <img src="<?php echo base_url(''); ?>media/<?php echo $v->lien; ?>" alt="<?php echo $v->nom; ?>" title="<?php echo $v->nom; ?>" />
                                    </div>
                                    <div class="rotate_description">
                                        <div class="bloc_description">
                                            <div class="titre"><?php echo $v->titre; ?></div>
                                            <div class="description"><?php echo tronque($v->phrase_accroche, 300); ?></div>
                                            <div class="voir_plus">Plus d'info ></div>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <div class="separateur_article"></div>
                            <?php
                            $id = $v->vId;
                        }
                    }
                    ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <?php if (!empty($carnetVoyages)) { ?>
            <div class="carnet_voyages">
                <h2>Nos récents carnets</h2>
                <div class="liste_carnet">
                    <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">



                        <?php
                        for ($i = 0; $i < count($carnetVoyages); $i++) {
                            if ($i == 0) {
                                carnet_long($carnetVoyages, $i);
                            }
                            if ($i == 1 && (count($carnetVoyages) - 1) == 1) {
                                carnet_long($carnetVoyages, $i);
                            }

                            if ($i > 0 && (count($carnetVoyages) - 1) >= 2) {
                                carnet_court($carnetVoyages, $i);
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="cms_image">
            <?php if($image_cms[0]): ?>
                <img src="<?php echo base_url(''); ?>media/home/cms/<?php echo $image_cms[0]->image; ?>" alt="<?php echo $image_cms[0]->label; ?>" title="<?php echo $image_cms[0]->label; ?>" />
                <div class='text'>
                    <p class="titre"><?php echo $image_cms[0]->label; ?></p>
                    <?php echo $image_cms[0]->value; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="actualites">
            <h2>Nos actualités</h2>
            <p class="soush">Soyez au courant de nos dernières nouveautés grâce aux actualités.</p>
                <div class="actu_home">
                    <ul>
                    <?php if($actualites): ?>
                        <?php $i = 1; ?>
                        <?php foreach ($actualites as $actualite): ?>
                            <li class="uneActu act<?php echo $i ?>">
                                <div class="filtre"></div>

                                <div class="date"><?php echo $actualite->date; ?></div>

                                <div class="description desc<?php echo $i ?>">
                                    <p class="titre"><?php echo $actualite->titre; ?></p>
                                    <p class="description"><?php echo $actualite->description; ?></p>
                                    <a href="<?php echo base_url('/actualite/index') ?>">Voir toutes l'actualité</a>
                                </div>
                                
                                <ul id="slider<?php echo $i ?>">
                                    <li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img1 . '" alt="' . $actualite->img1 . '"'; ?></li>
                                    <?php if ($actualite->img2): ?><li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img2 . '" alt="' . $actualite->img2 . '"'; ?></li><?php endif; ?>
                                    <?php if ($actualite->img3): ?><li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img3 . '" alt="' . $actualite->img3 . '"'; ?></li><?php endif; ?>
                                </ul>
                                
                                <script type="text/javascript">
                                    initialiseResponsiveSilide('#slider<?php echo $i ?>');
                                </script>

                            </li>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        pas d'actualité
                    <?php endif; ?>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
</div>
<!---------- CONTENT ------- -->	
