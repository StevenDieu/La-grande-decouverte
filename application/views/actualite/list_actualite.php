<div class="content actualites">
    <div class="actu">
        <div class="entete">
            <div class="iconeDoc"><img src="<?php echo base_url('') ?>assets/images/listeActu/dossier.png" alt="dossier"/></div>
            <div class="titre">Actualités <sup>(<?php echo $nbActu; ?>)</sup></div>
            <div class="description">Suivez les nouveautés de La grande découvert à travers ses acutalités</div>
            <div class="cercleGauche"></div>
            <div class="cercleDroit"></div>
        </div>


        <?php
        if ($actualites) {
            $i = 1;
            foreach ($actualites as $actualite) {
                ?>
                <div class="uneActu">
                    <div class="titreActu">
                        <div class="meta">
                            <span><?php echo $actualite->date; ?></span>
                        </div>
                        <div class="titre"><span><?php echo $actualite->titre; ?></span></div>
                    </div>
                    <div class="image">
                        <ul id="slider<?php echo $i ?>">
                            <li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_1 . '" alt="' . $actualite->image_1 . '"'; ?></li>
                            <li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_2 . '" alt="' . $actualite->image_2 . '"'; ?></li>
                            <li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->image_3 . '" alt="' . $actualite->image_3 . '"'; ?></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        initialiseResponsiveSilide('#slider<?php echo $i ?>');
                    </script>
                    <div class="descriptionActu">
                        <?php echo $actualite->description; ?>
                        <div class="reseau">
                            <ul>
                                <li class="gplus"><a href="#"></a></li>
                                <li class="facebook"><a href="#"></a></li>
                                <li class="twitter"><a href="#"></a></li>
                                <li class="link"><a href="#"></a></li>
                                <li class="pinte"><a href="#"></a></li>
                            </ul>
                        </div>	
                    </div>
                </div>
                <?php
                $i++;
            }
        } else {
            echo "pas d'actualité";
        }
        ?>
    </div>
</div>

