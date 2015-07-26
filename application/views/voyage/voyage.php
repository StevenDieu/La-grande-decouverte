<!---------- CONTENT ---------->	
<div class="content liste-voyage">
    <div class="liste_voyages">
        
        <div class="voyages">
            <h2>Nos derniers voyages</h2>
            <p class="soush"> Laissez-vous embarquer par l’un de nos voyages en cours pour vivre des moments exceptionnelles dont vous vous souviendrez longtemps ! </p>
            <div class="voyage_home">

            <?php if(isset($erreur)) echo "<div class='erreur'>" . $erreur . "</div>"; ?>

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

                <ul>
                    <?php $i = 0; $id = 0; ?>
                    <?php foreach ($voyages as $v): ?>
                        <?php if ($id != $v->vId): ?>
                            <?php $i++; ?>
                            <li class="voyage <?php if(($i % 2) == 0) echo 'right'; ?>">
                                <div class="bloc_image">
                                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->vId;?>"><img src="<?php echo base_url(''); ?>media/produit/image_slider/aze~~~~92f3072ea71470c6986bed95d0e4ecdc.jpg" alt="<?php echo $v->nom; ?>" title="<?php echo $v->nom; ?>" /></a>
                                </div>
                                <div class="bloc_bottom">
                                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->vId;?>">Voir<br><span>le voyage</span></a>
                                    <p class="titre"><?php echo $v->titre; ?></p>
                                    <p class="accroche"><?php echo tronque($v->phrase_accroche, 200); ?></p>
                                </div>
                            </li>
                            <?php $id = $v->vId; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
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