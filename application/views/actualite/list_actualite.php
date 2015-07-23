<!--<div class="content actualites">
	<div class="actu">
		<div class="entete">
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
                            <li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img1 . '" alt="' . $actualite->img1 . '"'; ?></li>
                            <?php if($actualite->img2): ?><li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img2 . '" alt="' . $actualite->img2 . '"'; ?></li><?php endif; ?>
                            <?php if($actualite->img3): ?><li><?php echo '<img src="' . base_url('') . 'media/actualite/' . $actualite->img3 . '" alt="' . $actualite->img3 . '"'; ?></li><?php endif; ?>
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
</div>-->


<div class="content actualites">
    <div class="actu">
        <?php
        if ($actualites) { ?>
            <div class="actualites">
                <h2>Nos actualités <sup>(<?php echo $nbActu; ?>)</sup></h2>
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
        <?php } else {
            echo "pas d'actualité";
        }
        ?>
    </div>
</div>



        




