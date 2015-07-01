<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>
<div class="content">
    <div class="bloc-voyage">
        <div class="voyages">
            <div class="liste_voyages">
                <div class="entete">
                    <div class="titre">Voyages</div>
                    <div class="description">Découvrez les nouveaux voyages, et visitez des pays du monde entier !</div>
                    <div class="cercleGauche"></div>
                    <div class="cercleDroit"></div>
                </div>
                <?php if (isset($erreur)) echo "<div class='erreur'>" . $erreur . "</div>"; ?>
                <?php if (isset($nomContinent)) { ?>
                    <div class="floarLeft">
                        <a href="<?php echo base_url('voyage/carnet/voyage') ?>">
                            Retour à tous les voyages
                        </a>
                    </div>
                    <div class="floarRight">
                        Page filtrer par : <?php echo $nomContinent[0]->name ?> 
                    </div>
                    <div class="clear"></div>
                    <div class="liste_contient">
                        <?php
                    }
                    $i = 0;
                    $id = 0;
                    foreach ($voyage as $v) {
                        if ( $id != $v->id_voyage ) {
                            $i++;
                            if ($i % 2) {
                                    echo '<div class="voyage gauche">';
                                } else {
                                    echo '<div class="voyage droite">';
                                }
                                ?>

                                <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->id; ?>">
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
                        $id = $v->id_voyage;
                        }
                    } ?>
                    <div class="clear"></div>
                    <div class="pagination">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
            <div class="separateur_article"></div>
            <div style='clear:both'></div>
        </div>
    </div>
    <div class="clear"></div>