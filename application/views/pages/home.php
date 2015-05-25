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
        <ul class="rslides" id="slider_top">
            <?php foreach ($voyages as $voyage) { ?>
                <li>
                    <img src="<?php echo base_url(''); ?>media/produit/image_slider/<?php echo $voyage->image; ?>" alt="">
                </li>
            <?php } ?>
        </ul>
        <!--        <div class="caption">
                    <h1>test</h1>
                    <h2>test test test test test test test test</h2>
                </div>-->
    </div>
    <div class="displayMapSize">
        <div class="map">
            <div id="map-continents">
                <ul class="continents">
                    <li class="c1"><a href="#africa">Africa</a></li>
                    <li class="c2"><a href="#asia">Asia</a></li>
                    <li class="c3"><a href="#australia">Australia</a></li>
                    <li class="c4"><a href="#europe">Europe</a></li>
                    <li class="c5"><a href="#north-america">North America</a></li>
                    <li class="c6"><a href="#south-america">South America</a></li>
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
            <span class="success">Vous êtes bien inscrit à la newsletter.</span>
        <?php } ?>

        <h2>Nos voyages en cours</h2>
        <div class="liste_voyages">
            <?php
            $i = 0;
            foreach ($voyages as $voyage) {
                $i++;
                if ($i % 2) {
                    ?>
                    <div class="voyage gauche">

                        <?php
                    } else {
                        echo '<div class="voyage droite">';
                    }
                    ?>

                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $voyage->id; ?>">
                        <div class="bloc_image">
                            <img src="<?php echo base_url(''); ?>media/produit/image_slider/<?php echo $voyage->image; ?>" alt="<?php echo $voyage->image; ?>" title="<?php echo $voyage->image; ?>" />
                        </div>
                        <div class="rotate_description">
                            <div class="bloc_description">
                                <div class="titre"><?php echo $voyage->titre; ?></div>
                                <div class="description"><?php echo tronque($voyage->description_first_bloc, 300); ?></div>
                                <div class="voir_plus">Plus d'info ></div>
                            </div>
                        </div>


                    </a>
                </div>
            <?php } ?>
            <div class="clear"></div>
        </div>

        <h2>Nos récents carnets</h2>
        <div class="liste_carnet">
            <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
                <div class="article_first">
                    <div class="image">
                        <div class="callbacks_container carnet">
                            <a href="#">
                                <ul class="rslides" id="slidercarnet">
                                    <li>
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut2.jpg" alt="">
                                    </li>
                                </ul>
                            </a>
                        </div>
                        <a class="slide_carnet1" href="http://localhost/TVAFS-1.0/assets/../fancybox/popup_carnet.php"></a>
                        <div style="clear:both"></div>
                    </div>
                    <div class="partie_droite">
                        <a  href="#" class="titre">aze</a>
                        <div class="date_auteur">Au coeur du Chili</div>
                        <div class="texte">Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte....</div>
                        <a href="#" class="lire_suite">Voir le carnet ></a>
                    </div>
                </div>

                <div class="separateur_article"></div>

                <div class="contenu_article_suivant">
                    <div class="un_article left">
                        <div class="callbacks_container carnet">
                            <a href="#">
                                <ul class="rslides callbacks callbacks1" id="slidercarnet0">
                                    <li id="callbacks1_s0" class="callbacks1_on" style="display: list-item; float: left; position: relative; opacity: 1; z-index: 2; -webkit-transition: opacity 500ms ease-in-out; transition: opacity 500ms ease-in-out;">
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut.jpg" alt="">
                                    </li>
                                    <li id="callbacks1_s1" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; -webkit-transition: opacity 500ms ease-in-out; transition: opacity 500ms ease-in-out;" class="">
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut2.jpg" alt="">
                                    </li>
                                </ul><a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a><a href="#" class="callbacks_nav callbacks1_nav next">Next</a>
                            </a>
                        </div>
                        <div style="clear:both"></div>
                        <a class="titre">aze</a>
                        <div class="date_auteur"><span>Au coeur du Chili</span></div>
                        <div class="texte">Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte....</div>
                        <a href="http://localhost/TVAFS-1.0/voyage/carnet?id=4" class="lire_suite">Voir le carnet &gt;</a>
                        <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet0');</script>
                    </div>
                    <div class="un_article ">
                        <div class="callbacks_container carnet">
                            <a href="#">
                                <ul class="rslides callbacks callbacks2" id="slidercarnet1">
                                    <li id="callbacks2_s0" class="callbacks2_on" style="display: list-item; float: left; position: relative; opacity: 1; z-index: 2; -webkit-transition: opacity 500ms ease-in-out; transition: opacity 500ms ease-in-out;">
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut.jpg" alt="">
                                    </li>
                                    <li id="callbacks2_s1" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; -webkit-transition: opacity 500ms ease-in-out; transition: opacity 500ms ease-in-out;" class="">
                                        <img src="http://localhost/TVAFS-1.0/assets/images/ficheproduit/carnet/tribut2.jpg" alt="">
                                    </li>
                                </ul><a href="#" class="callbacks_nav callbacks2_nav prev">Previous</a><a href="#" class="callbacks_nav callbacks2_nav next">Next</a>
                            </a>
                        </div>
                        <div style="clear:both"></div>
                        <a class="titre">test</a>
                        <div class="date_auteur"><span>Au coeur du Chili</span></div>
                        <div class="texte">Le CHILI séduit par la richesse de son environnement. La variété des paysages du Chili, le patrimoine architectural, les Andes, la densité de la faune du Chili et les mystérieuses statues de l'île de Pâques promettent au voyageur une merveilleuse découverte....</div>
                        <a href="http://localhost/TVAFS-1.0/voyage/carnet?id=22" class="lire_suite">Voir le carnet &gt;</a>
                        <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet1');</script>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <!-- fin contenu carnet de voyage -->
                <div class="pagination">
                </div>
            </div>

        </div>
        <h2>Nos dernières actualités</h2>
        <div class="liste_actu"></div>
        <?php
        if ($actualites) {

            foreach ($actualites as $actualite) {
                echo $actualite->titre . '</br>';
                echo $actualite->description . '</br>';
                echo $actualite->date . '  ';
                echo $actualite->time . '</br>';

                if ($actualite->image_1) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_1 . '" alt="' . $actualite->image_1 . '" width="300"/>';
                }
                if ($actualite->image_2) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_2 . '" alt="' . $actualite->image_2 . '" width="300"/>';
                }
                if ($actualite->image_3) {
                    echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_3 . '" alt="' . $actualite->image_3 . '" width="300"/>';
                }

                echo "<div class='clear:both'></div>";
            }
        }
        ?>
    </div>
</div>
<!---------- CONTENT ------- -->	
