<script type="text/javascript">
    var urlAddArticle = '<?php echo base_url('actualites/addInList'); ?>';
    var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
    var activePaginate = '<?= $activePaginate ?>';
</script>


<div class="content actualites">
    <div class="actu">
        <?php if ($actualites) { ?>
            <div class="actualites list">
                <h2>Nos actualités <sup>(<?php echo $nbActu; ?>)</sup></h2>
                <p class="soush">Soyez au courant de nos dernières nouveautés grâce aux actualités.</p>
                <div class="actu_home">
                    <ul class="ulList">
                        <?php if ($actualites): ?>
                            <?php $i = 0; ?>
                            <?php foreach ($actualites as $actualite): ?>
                                <li class="uneActu act<?= (($i % 3) + 1) ?>">
                                    <div class="filtre"></div>

                                    <div class="date"><?php echo $actualite->date; ?></div>

                                    <div class="description desc<?= (($i % 3) + 1) ?>">
                                        <p class="titre"><?php echo $actualite->titre; ?></p>
                                        <p class="description"><?php echo $actualite->description; ?></p>
                                    </div>

                                    <ul id="slider<?php echo $i ?>">
                                        <li> <img src=" <?php echo base_url('') . 'media/actualite/' . $actualite->img1 . '" alt="' . $actualite->img1; ?>" >
                                        <?php if ($actualite->img2): ?><li><img src="<?php echo base_url('') . 'media/actualite/' . $actualite->img2 . '" alt="' . $actualite->img2; ?>"></li><?php endif; ?>
                                        <?php if ($actualite->img3): ?><li><img src="<?php echo base_url('') . 'media/actualite/' . $actualite->img3 . '" alt="' . $actualite->img3; ?>"></li><?php endif; ?>
                                    </ul>

                                    <div class="reseau">
                                        <ul>
                                            <li class="gplus"><a target="_blank" href="https://plus.google.com/share?url=<?php echo base_url('actualites/partage?idActu=') . $actualite->id ?>"></a></li>
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com/share.php?u=<?php echo base_url('actualites/partage?idActu=') . $actualite->id ?>&title=<?= $actualite->titre; ?>"></a></li>
                                            <li class="twitter"><a target="_blank" href="http://twitter.com/intent/tweet?status=<?= $actualite->titre; ?>+<?php echo base_url('actualites/partage?idActu=') . $actualite->id ?>"></a></li>
                                            <li class="link"><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url('actualites/partage?idActu=') . $actualite->id ?>&title=<?= $actualite->titre; ?>&source=[SOURCE/DOMAIN]"></a></li>
                                            <li class="pinte"><a target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url=<?php echo base_url('actualites/partage?idActu=') . $actualite->id ?>&is_video=false&description=<?= $actualite->titre; ?>"></a></li>
                                        </ul>
                                    </div>

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
                    <div class="clear"></div>
                </div>
            </div>
            <?php
        } else {
            echo "Désolé, il n'y a pas d'actualité.";
        }
        ?>
    </div>
</div>








