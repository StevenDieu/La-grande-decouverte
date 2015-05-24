<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<div class="fiche_produit">	
    <div class="contenu_onglet">
        <div class="content liste_carnet">
            <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
                <!-- contenu carnet de voyage -->
                <!--
                        <div class="article_first">
                            <div class="image">
                                <div class="callbacks_container carnet">
                                    <a href="#">
                                        <ul class="rslides" id="slidercarnet">
                                            <li>
                                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
                                            </li>
                                            <li>
                                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <a class="slide_carnet1 fancybox.ajax zoom" href="<?php echo asset_url(''); ?>../fancybox/popup_carnet.php"></a>
                                <div style="clear:both"></div>
                                <script type="text/javascript">
                                    initialiseResponsiveSilide('#slidercarnet');
                                    $(".slide_carnet1").fancybox({
                                        maxWidth: 1000,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '80%',
                                        height: '80%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        ajax: {
                                            type: "POST",
                                            cache: false,
                                            data: "var=1|<?php echo asset_url(''); ?>",
                                            success: function (data) {
                                                $.fancybox(data);
                                            }
                                        }
                                    });
                                </script>
                                
                            </div>
                            <div class="partie_droite">
                                <a  href="#" class="titre"><?php echo $carnetVoyage[0]->cvTitre; ?></a>
                                <div class="date_auteur"><?php echo $carnetVoyage[0]->vTitre; ?></div>
                                <div class="texte"><?php echo substr(strip_tags($carnetVoyage[0]->vAccroche), 0, 550) . '...'; ?></div>
                                <a href="#" class="lire_suite">Voir le carnet ></a>
                            </div>
                        </div>
        
                        <div class="separateur_article"></div>
                -->
                <div class="contenu_article_suivant">
                    <?php
                    //foreach ($carnetVoyage as $cv) { 
                    for ($i = 0; $i < count($carnetVoyage); $i++) {
                        if ($carnetVoyage[$i]) {
                            if ($carnetVoyage[$i]->cvPrive == 0) {
                                ?>
                                <div class="un_article <?php if ($i % 2 == 0) echo "left" ?>">
                                    <div class="callbacks_container carnet">
                                        <a href="#">
                                            <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                                                <li>
                                                    <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
                                                </li>
                                                <li>
                                                    <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <a class="titre"><?php echo $carnetVoyage[$i]->cvTitre; ?></a>
                                    <div class="date_auteur"><span><?php echo $carnetVoyage[$i]->vTitre; ?></span></div>
                                    <div class="texte"><?php echo substr(strip_tags($carnetVoyage[$i]->vAccroche), 0, 550) . '...'; ?></div>
                                    <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyage[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
                                    <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
                                </div>
                                <?php
                                if ($i % 2 == 1) {
                                    echo "<div style='clear:both'></div>";
                                }
                            }
                        }
                    }
                    ?>

                </div>
                <!-- fin contenu carnet de voyage -->
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>