<!---------- CONTENT ---------->	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZo93gQX7j_kr0Bn3oqfwfIIPCQLAKhuI"></script>
<script type="text/javascript" src ="<?php echo asset_url(''); ?>librairie/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link href="<?php echo asset_url(''); ?>librairie/css/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" rel="stylesheet"/>
<div class="content">
	<div class="bloc-voyage">
		<div class="voyages">
	        <h2>Nos voyages en cours</h2>
	        <div class="liste_voyages">
	            <?php
	            $i = 0;
	            foreach ($voyage as $v) {
	                $i++;
	                if ($i % 2) {
	                    ?>
	                    <div class="voyage gauche">

	                        <?php
	                    } else {
	                        echo '<div class="voyage droite">';
	                    }
	                    ?>

	                    <a href="<?php echo base_url('/voyage/fiche/?id=') . $v->id; ?>">
	                        <div class="bloc_image">
	                            <img src="<?php echo base_url(''); ?>media/produit/image_slider/<?php echo $v->image_slider_1; ?>" alt="<?php echo $v->image_slider_1; ?>" title="<?php echo $v->image_slider_1; ?>" />
	                        </div>
	                        <div class="rotate_description">
	                            <div class="bloc_description">
	                                <div class="titre"><?php echo $v->titre; ?></div>
	                                <div class="description"><?php echo tronque($v->description_first_bloc, 300); ?></div>
	                                <div class="voir_plus">Plus d'info ></div>
	                            </div>
	                        </div>


	                    </a>
	                </div>

	    		<div class="separateur_article"></div>
	            <?php } ?>
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