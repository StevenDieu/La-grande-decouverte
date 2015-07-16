<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>

<div class="fiche_produit">	
    <div class="contenu_onglet">
        <div class="content liste_carnet">
            <div id="onglet3" class="contenu_fiche_onglet onglet3mobile">
                <div class="contenu_article_suivant">
                    <div class="entete">
                        <div class="titre">Carnets de voyage</div>
                        <div class="description">Visitez et voyagez avec d'autres personnes.</div>
                        <div class="cercleGauche"></div>
                        <div class="cercleDroit"></div>
                    </div>
                    <?php
                    if ($carnetVoyage) {
                        for ($i = 0; $i < count($carnetVoyage); $i++) {
                            carnet_court_liste($carnetVoyage,$i);
                        }
                    }
                    ?>
                </div>
                <div class="pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clear"></div>