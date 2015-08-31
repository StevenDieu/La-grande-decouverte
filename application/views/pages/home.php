<!---------- CONTENT ------- -->	
<div class="content content-home">
    <div class="displayMapSize">
        <div class="divLeTireurTop">
            <svg class="blurpMenuRetour" width="192" height="61" viewBox="0 0 160.7 61.5" >
            <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
            </path>
            </svg>
            <div class="btn--top_textRetour"> 
                <span class="btn__arrow btn__arrow--top"></span> 
                <span class="btn__arrow btn__arrow--bottom"></span> 
            </div> 
        </div>
    </div>

    <div class="callbacks_container slider_principal">
        <?php if ($voyages) { ?>
            <ul class="rslides" id="slider_top">
                <?php foreach ($voyages as $voyage) { ?>
                    <li>
                        <img src="<?php echo asset_media($voyage->lien); ?>" alt="">
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div class="displayMapSize">
        <div class="map">
            <div id="map-continents">
                <ul class="continents">

                    <?php
                    foreach ($continents as $continent) {
                        if ($continent->tag == "AFRIQUE") {
                            ?>
                            <li class="c1"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Afrique</a></li>
                            <?php
                        } else if ($continent->tag == "ASIE") {
                            ?>
                            <li class="c2"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Asie</a></li>
                            <?php
                        } else if ($continent->tag == "OCEANIE") {
                            ?>
                            <li class="c3"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Océanie</a></li>
                            <?php
                        } else if ($continent->tag == "EUROPE") {
                            ?>
                            <li class="c4"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Europe</a></li>
                            <?php
                        } else if ($continent->tag == "AMERIQUE_DU_NORD") {
                            ?>
                            <li class="c5"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Amerique du nord</a></li>
                            <?php
                        } else if ($continent->tag == "AMERIQUE_DU_SUD") {
                            ?>
                            <li class="c6"><a href="<?php echo base_url('voyages?continent=') . $continent->id ?>">Amerique du sud</a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="divLeTireurBottom">
                <svg class="blurpMenu" width="192" height="61" viewBox="0 0 160.7 61.5" >
                <path fill="#FFFFFF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z">
                </path>
                </svg>
                <div class="btn--top_text"> 
                    <span class="btn__arrow btn__arrow--top"></span> 
                    <span class="btn__arrow btn__arrow--bottom"></span> 
                </div>
            </div>
        </div>
    </div>


    <div class="clear"></div>

    <div class="contenu_home">
        <?php if ($this->session->flashdata('result_newsletter') > 0) { ?>
            <div class="messageAlerteCarnet center">
                <div class="alertType"><div class="alert alert-success fade in limiteMessage">
                        <strong>Succés !</strong> Vous êtes bien inscrit à la newsletter.</div></div>
            </div>
            <br/><br/>
        <?php } ?>
        <div class="voyages">
            <h2>Nos derniers voyages</h2>
            <p class="soush"> Laissez-vous embarquer par l’un de nos voyages en cours pour vivre des moments exceptionnelles dont vous vous souviendrez longtemps ! </p>
            <div class="voyage_home">
                <ul>
                    <?php
                    $i = 0;
                    $id = 0;
                    ?>
                    <?php foreach ($voyages as $v): ?>
                        <?php if ($id != $v->vId): ?>
                            <?php $i++; ?>
                            <li class="voyage <?php if (($i % 2) == 0) echo 'right'; ?>">
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
                            <?php $id = $v->vId; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="clear"></div>
                </ul>
                <a href="<?php echo base_url('voyages') ?>" class="other_voyage">Voir tous les voyages</a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>

        <?php if (!empty($carnetVoyages)): ?>
            <div class="carnet_voyages">
                <h2>Nos récents carnets de voyage</h2>
                <p class="soush">Retrouvez les derniers récits de voyages créés par nos voyageurs</p>
                <ul>
                    <?php
                    for ($i = 0; $i < count($carnetVoyages); $i++) {
                        if ($i == 0) {
                            carnet_first($carnetVoyages, $i);
                        }
                        if ($i == 1) {
                            carnet_second($carnetVoyages, $i);
                        }
                        if ($i == 2) {
                            carnet_third($carnetVoyages, $i);
                        }
                    }
                    ?>
                    <div class="clear"></div>
                </ul>
                <a href="<?php echo base_url('/carnetsdevoyage') ?>" class="other_voyage">Voir tous les carnets</a>
                <div class="clear"></div>
            </div>
        <?php endif; ?>

        <div class="cms_image">
            <?php if ($image_cms[0]): ?>
                <img src="<?php echo base_url(''); ?>media/home/cms/<?php echo $image_cms[0]->image; ?>" alt="<?php echo $image_cms[0]->label; ?>" title="<?php echo $image_cms[0]->label; ?>" />
                <div class="flou"></div>
                <div class='text'>
                    <p class="titre"><?php echo $image_cms[0]->label; ?></p>
                    <?php echo $image_cms[0]->value; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="actualites">
            <h2>Nos actualités</h2>
            <p class="soush">Toute l’actualité de Lagrandecouverte, c’est ici !</p>
            <div class="actu_home">
                <ul>
                    <?php if ($actualites): ?>
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
                                    <li> <img src=" <?php echo base_url('') . 'media/actualite/' . $actualite->img1 . '" alt="' . $actualite->img1; ?>" ></li>
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
                </ul>
                <div class="clear"></div>
                <a href="<?php echo base_url('actualites') ?>" class="other_voyage">Voir toutes les actualités</a>
            </div>
        </div>
    </div>
</div>
<!---------- CONTENT ------- -->	
