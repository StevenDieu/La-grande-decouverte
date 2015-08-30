<script type="text/javascript">
    var urlAddArticle = '<?php echo base_url('voyages/addInList'); ?>';
    var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
    var activePaginate = '<?= $activePaginate ?>'
</script>

<!---------- CONTENT ---------->	
<div class="content liste-voyage">
    <div class="liste_voyages">

        <div class="voyages">
            <h2>Nos derniers voyages</h2>
            <p class="soush"> Laissez-vous embarquer par l’un de nos voyages en cours pour vivre des moments exceptionnelles dont vous vous souviendrez longtemps ! </p>
            <div class="voyage_home list">

                <?php if (isset($erreur)) echo "<div class='erreur'>" . $erreur . "</div>"; ?>

                <?php if (isset($nomContinent)): ?>
                    <div class="floarLeft">
                        <a href="<?php echo base_url('voyage/carnet/voyage') ?>">
                            Retour à tous les voyages
                        </a>
                    </div>
                    <div class="floarRight">
                        Page filtrer par : <?php echo $nomContinent[0]->name ?> 
                    </div>
                    <div class="clear"></div>
                <?php endif; ?>

                <ul class="ulList">
                    <?php
                    $i = 0;
                    foreach ($voyages as $v) {
                        $i++;
                        ?>
                        <li class="voyage 
                        <?php if (($i % 2) == 0) { ?> right <?php } ?>">
                                <div class="bloc_image">
                                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->vId; ?>">
                                        <img src="<?php echo base_url(''); ?>media/<?php echo $v->lien; ?>" alt="<?php echo $v->nom; ?>" title="<?php echo $v->nom; ?>" />
                                    </a>
                                </div>
                                <div class="bloc_bottom">
                                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->vId; ?>">Voir<br><span>le voyage</span></a>
                                    <p class="titre"><?php echo $v->titre; ?></p>
                                    <p class="accroche"><?php echo tronque($v->phrase_accroche, 200); ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="pagination">
                <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>


    <div class="clear"></div>
</div>
<div class="clear"></div>