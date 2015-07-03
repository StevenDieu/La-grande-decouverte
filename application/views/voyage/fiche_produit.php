<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
//<?php echo $voyage[0]->lattitude; ?>, lng: <?php echo $voyage[0]->longitude; ?>},
    function initialize() {
        var myLatlng = new google.maps.LatLng(<?php echo $voyage[0]->lattitude; ?>, <?php echo $voyage[0]->longitude; ?>);
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            center: myLatlng,
        };
        map = new google.maps.Map(document.getElementById('carte'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>

<div class="fiche_produit">
    <!-- Slideshow 4 -->
    <div class="callbacks_container slider_principal">
        <ul class="rslides" id="slider_top">
            <?php
            foreach ($images as $image) {
                if ($image->emplacement == "image_slider") {
                    ?>
                    <li>
                        <img src="<?php echo asset_media($image->lien); ?>" alt="<?php echo asset_media($image->nom); ?>">
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
        <div class="texte_slide">
            <div class="titre"><?php echo $voyage[0]->titre; ?></div>
            <div class="trait"></div>
            <div class="date"><?php echo $voyageInfo[0]->date_depart; ?> - <?php echo $voyageInfo[0]->date_arrivee; ?> </div>
        </div>
    </div>

    <div style="clear:both"></div>

    <div class="fil_arianne_conteneur">
        <div class="fil_arianne">
            <ul class="breadcrumbs">
                <li class="acceuil"><a href="/">Accueil</a></li>
                <li><a href="/voyage/carnet/voyage">Voyages</a></li>
                <li class="last"><?php echo $voyage[0]->titre; ?></li>
            </ul>
        </div>
    </div>

    <div class="contain_top_bloc">
        <div class="top_bloc">
            <div class="topLeft">
                <h1><?php echo $voyage[0]->titre; ?></h1>
                <h2><?php echo $voyage[0]->phrase_accroche; ?></h2>
            </div>   
            <div class="topRight">
                <?php echo form_open_multipart('checkout/cart/onepage'); ?>

                <div class="bloc bloc2">
                    <span class="titre">à partir</span>
                    <span class="valeur">de <?php echo $voyageInfo[0]->prix; ?> €</span>
                </div>

                <div class="bloc bloc1">
                    <span class="titre">Durée</span>
                    <span class="valeur"><?php echo $voyage[0]->duree; ?> jours</span>
                </div>

                <div class="bloc bloc3">
                    <span class="titre">Places disponibles</span>
                    <span class="valeur"><?php echo $voyageInfo[0]->place_dispo; ?></span>
                </div>

                <div class="bloc_date">
                    <p>DU <span><?php echo $voyageInfo[0]->date_depart; ?></span></p>
                    <p>AU <span><?php echo $voyageInfo[0]->date_arrivee; ?></span></p>
                </div>

                <input type="hidden" name="id" value="<?php echo $voyage[0]->id; ?>">
                <input type="hidden" name="idInfo" value="<?php echo $voyageInfo[0]->id; ?>">
                <?php if (count($allInfoVoyage) > 1): ?>
                    <a href="#data" class="voir_date">> Voir les autres dates</a>
                    <!-- popup -->
                    <div style="display:none">
                        <div id="data">
                            <span>Il existe plusieurs dates pour ce voyage : </span>
                            <?php
                            foreach ($allInfoVoyage as $info) {
                                if ($info->id != $voyageInfo[0]->id) {
                                    ?>

                                    > Du  <?= $info->date_depart ?> au <?= $info->date_arrivee ?> :
                                    <a href='<?php echo base_url('voyage/fiche') . "?id=" . $voyage[0]->id . "&idInfo=" . $info->id; ?>'>Choisir ces dates</a><br>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- popup -->
                    <script type="text/javascript">
                        $("a.voir_date").fancybox({
                            helpers: {
                                overlay: {
                                    css: {
                                        'background': 'rgba(0, 0, 0, 0.65)'
                                    }
                                }
                            }
                        });
                    </script>
                <?php endif; ?>
                <?php if ($voyageInfo[0]->place_dispo != 0) { ?>
                    <button id="embarque" class="borange bbillet" type="submit">J'embarque</button>
                <?php } ?>
                </form>
            </div>         

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="onglet_fiche">
        <div class="onglet_fiche_inner">
            <!-- onglet vu desktop -->
            <div id="onglet1" class="onglet onglet1 active"><a href="#">Description voyage</a></div>
            <div id="onglet2" class="onglet onglet2"><a href="#">Carte</a></div>
            <div id="onglet3" class="onglet onglet3"><a href="#">Carnet de voyage</a></div>
            <div id="onglet4" class="onglet onglet4"><a href="#">Déroulement</a></div>	
            <!-- fin onglet vu desktop -->
        </div>
    </div>

    <div class="contenu_onglet">
        <div id="onglet1mobile" class="onglet_mobile active"><a href="#">Description voyage</a></div>
        <div id="onglet1" class="contenu_fiche_onglet onglet1mobile active">
            <!-- contenu description -->

            <div class="text">
                <p><?php echo $voyage[0]->description_first_bloc; ?> </p>
            </div>

            <!-- contenu info pratique -->
            <div class="info_pratique">
                <div class="filtre_image"></div>
                <div class="fond_image"><img src="<?php echo asset_media($voyage[0]->image_sous_slider); ?>" alt="<?= $voyage[0]->image_sous_slider; ?>"></div>
                <div class="inner">

                    <div class="top">
                        <div class="trait_info"></div>
                        <span>Info pratique</span>
                        <div class="trait_info"></div>
                    </div>

                    <div class="leftBloc">
                        <div class="titre">Information général du pays</div>
                        <ul>
                            <?php if ($pays[0]->drapeau != null && $pays[0]->drapeau != 0) { ?>
                                <li><strong>Drapeau</strong><span><img src="<?php echo asset_media($pays[0]->drapeau); ?>" alt="<?= $pays[0]->drapeau; ?>"></span></li>
                            <?php } ?>
                            <?php //if ($pays[0]->fuseauHoraire !== null) {   ?>
                            <li><strong>Heure locale</strong><span><?php echo str_replace(':', 'h', $date->format('H:i')); ?></span></li>
                            <?php //}  ?>
                            <?php if ($pays[0]->capital != null) { ?>
                                <li><strong>Capital</strong><span><?php echo $pays[0]->capital; ?></span></li>
                            <?php } ?>
                            <?php if ($pays[0]->meteo_temperature != null) { ?>
                                <li><strong>Météo</strong><span><?php echo $pays[0]->meteo_temperature; ?>°C </span></li>
                            <?php } ?>
                            <li><strong>Continent</strong><span><?php echo $continent[0]->name; ?></span></li>
                        </ul>
                    </div>

                    <div class="rightBloc">
                        <div class="titre">à savoir avant de partir</div>
                        <ul>
                            <?php if ($pays[0]->villes_principales != null) { ?>
                                <li><strong>Villes principales</strong><span><?php echo $pays[0]->villes_principales; ?></span><div class="clear"></div></li>
                            <?php } ?>
                            <?php if ($pays[0]->religion != null) { ?>
                                <li><strong>Religion</strong><span><?php echo $pays[0]->religion; ?></span><div class="clear"></div></li>
                            <?php } ?>
                            <?php if ($pays[0]->nombre_habitant != null) { ?>
                                <li><strong>Nombre d'habitants</strong><span><?php echo $pays[0]->nombre_habitant; ?></span><div class="clear"></div></li>
                            <?php } ?>
                            <?php if ($pays[0]->monnaie != null) { ?>
                                <li><strong>Monnaie</strong><span><?php echo $pays[0]->monnaie; ?></span><div class="clear"></div></li>
                            <?php } ?>
                            <?php if ($pays[0]->fete != null) { ?>
                                <li><strong>Fête</strong><span><?php echo $pays[0]->fete; ?></span><div class="clear"></div></li>
                            <?php } ?>
                            <?php if ($pays[0]->langue_officielle != null) { ?>
                                <li><strong>Langue officielle</strong><span><?php echo $pays[0]->langue_officielle; ?></span><div class="clear"></div></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="clear"></div>

                    <div class="traitTopPicto"></div>

                    <div class="picto">
                        <ul>

                            <?php foreach ($pictoVoyages as $pictoVoyage) { ?>
                                <li>
                                    <img src="<?php echo asset_media($pictoVoyage->lien); ?>" alt="<?php echo asset_media($pictoVoyage->lien); ?>">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="clear"></div>

                </div>
            </div>
            <!-- fin contenu info pratique -->

            <div class="text">
                <?php echo $voyage[0]->description_second_bloc; ?>            
            </div>

            <div class="ligne_image">
                <?php
                foreach ($images as $image) {
                    if ($image->emplacement == "banniere") {
                        ?>                         
                        <div class="img">
                            <div class="bloc_image_banniere">
                                <img class="image_banniere" src="<?php echo asset_media($image->lien); ?>" alt="<?php echo asset_media($image->lien); ?>">
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <div class="clear"></div>
            </div>

            <div class="text">
                <p><?php echo $voyage[0]->description_third_bloc; ?></p>
            </div>

            <div class="slider_bot">
                <ul class="" id="sliderbot">
                    <?php
                    foreach ($images as $image) {
                        if ($image->emplacement == "image_description") {
                            ?>                         
                            <li class="miniature"><img src="<?php echo asset_media($image->lien); ?>" alt="<?php echo asset_media($image->lien); ?>"></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <script type="text/javascript">initialiseResponsiveSilide('#sliderbot');</script>

            <div class="infoPersoVoyage">
                <div class="content">
                    <div class="bloc first formalite">
                        <div class="titre"><div class="picto"></div>Formalité</div>
                        <div class="texte"><?php echo $voyageInfo[0]->formalite; ?></div>
                    </div>
                    <div class="bloc asavoir">
                        <div class="titre"><div class="picto"></div>À savoir</div>
                        <div class="texte"><?php echo $voyageInfo[0]->asavoir; ?></div>
                    </div>
                    <div class="bloc comprenant">
                        <div class="titre"><div class="picto"></div>Comprenant</div>
                        <div class="texte"><?php echo $voyageInfo[0]->comprenant; ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- fin contenu description -->
            <div class="clear"></div>
        </div>
        <div id="onglet2mobile" class="onglet_mobile"><a href="#">Carte</a></div>
        <div id="onglet2" class="contenu_fiche_onglet onglet2mobile"><div id="carte"></div><br /></div>
        <div id="onglet3mobile" class="onglet_mobile"><a href="#">Les carnets de voyage</a></div>
        <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
            <!-- contenu carnet de voyage -->
            <?php
            if ($carnetVoyages) {
                for ($i = 0; $i < count($carnetVoyages); $i++) {
                    if ($i == 0) {
                        carnet_long($carnetVoyages, $i);
                    }
                    if ($i == 1) {
                        ?> <div class="separateur_article"></div><?php
                    }
                    if ($i == 1 && (count($carnetVoyages) - 1) == 1) {
                        carnet_long($carnetVoyages, $i);
                    }

                    if ($i > 0 && (count($carnetVoyages) - 1) >= 2) {
                        carnet_court($carnetVoyages, $i);
                    }
                }
            } else {
                ?>
                <p class="center" style="padding: 10px;">Aucun carnet de voyage pour ce produit.</p>
                <?php
            }
            ?>

            <!-- fin contenu carnet de voyage -->	
        </div>
        <div id="onglet4mobile" class="onglet_mobile"><a href="#">Déroulement</a></div>
        <div id="onglet4" class="contenu_fiche_onglet onglet4mobile">
            <div class="contenu">
                <div class="blue_line"></div>
                <?php
                $jour = 1;
                foreach ($deroulementVoyages as $deroulementVoyage) {
                    ?>

                    <div class="jour_container">
                        <div class="day_counter">
                            <?php if ($deroulementVoyage->jour == 1) { ?>
                                <div class="pointRouge"></div><div class="day">Jour <?= $jour++ ?></div>          
                            <?php } else { ?>
                                <div class="pointRouge"></div><div class="day">Jour <?= $jour++ ?> - <?= $jour + $deroulementVoyage->jour ?></div>          
                            <?php } ?>

                        </div>
                        <div class="day_container">
                            <div class="fleche_jour"></div>
                            <div class="description_container">
                                <?php if ($deroulementVoyage->img_deroulement_voyage !== null && $deroulementVoyage->img_deroulement_voyage !== 0) { ?>
                                    <div class="blocImageDeroulement">
                                        <img class="imageDeroulement" src="<?php echo asset_media($deroulementVoyage->img_deroulement_voyage) ?>" alt="">
                                    </div>
                                <?php } ?>
                                <div class="texte">
                                    <div class="titre"><?= $deroulementVoyage->titrederoulement ?></div>
                                    <div class="text"><?= $deroulementVoyage->texte ?></div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>       

                <?php } ?>
            </div>
            <br />
        </div>
    </div>	
    <div style="clear:both"></div>
</div>


