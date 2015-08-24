<div class="content actualites">
    <div class="actu">
        <?php
        if ($actualite) { ?>
            <div class="actualites">
                    <div class="actu_home">
                        <ul>
                        <?php if($actualite): ?>
                            <?php $i = 1; ?>
                            <?php foreach ($actualite as $actualite): ?>
                                <li class="uneActu actuLarge act<?php echo $i ?>">
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

                                    <div class="reseau">
                                        <ul>
                                            <li class="gplus"><a href="#"></a></li>
                                            <li class="facebook"><a href="#"></a></li>
                                            <li class="twitter"><a href="#"></a></li>
                                            <li class="link"><a href="#"></a></li>
                                            <li class="pinte"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    
                                    <script type="text/javascript">
                                        initialiseResponsiveSilide('#slider<?php echo $i ?>');
                                    </script>

                                </li>
                                <?php if($i == 4) $i = 0; ?>
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
            echo "Désolé, il n'y a pas d'actualité.";
        }
        ?>
    </div>
</div>



        




