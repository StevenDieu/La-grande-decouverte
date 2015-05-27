<?php

function carnet_long($carnetVoyages, $i) {
    ?>
    <div class="article_first">
        <div class="image">
            <div class="callbacks_container carnet">
                <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_1; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_1; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_2; ?>" alt="<?php echo $carnetVoyages[$i]->image_slider_2; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_3; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_3; ?>"/>
                            </div>
                        </li>
                    </ul>
                </a>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="partie_droite">
            <a class="titre" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
            <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
            <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 270) . '...'; ?></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
        </div>
        <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
    </div>
    <div style='clear:both'></div>
    <?php
}

function carnet_court($carnetVoyages, $i) {
    if ($i % 2) {
        ?>

        <div class="contenu_article_suivant">
        <?php } ?>
        <div class="un_article <?php if ($i % 2 == 1) echo "left" ?>">
            <div class="callbacks_container carnet">
                <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_1; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_1; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_2; ?>" alt="<?php echo $carnetVoyages[$i]->image_slider_2; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_3; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_3; ?>"/>
                            </div>
                        </li>
                    </ul>
                </a>
            </div>
            <div style="clear:both"></div>
            <a class="titre" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
            <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
            <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 270) . '...'; ?></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
            <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
        </div>
        <?php if (!($i % 2)) { ?>
        </div>
    <?php } ?>
    <?php
    if ($i % 2 == 0) {
        echo "<div style='clear:both'></div>";
    }
}

function carnet_court_liste($carnetVoyages, $i) {
    if (!($i % 2)) {
        ?>

        <div class="contenu_article_suivant">
        <?php } ?>
        <div class="un_article <?php if ($i % 2 == 0) echo "left" ?>">
            <div class="callbacks_container carnet">
                <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_1; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_1; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_2; ?>" alt="<?php echo $carnetVoyages[$i]->image_slider_2; ?>"/>
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo base_url(); ?>media/produit/image_slider/<?php echo $carnetVoyages[$i]->image_slider_3; ?>"  alt="<?php echo $carnetVoyages[$i]->image_slider_3; ?>"/>
                            </div>
                        </li>
                    </ul>
                </a>
            </div>
            <div style="clear:both"></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="titre"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
            <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
            <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 270) . '...'; ?></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
            <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
        </div>
        <?php if ($i % 2) { ?>
        </div>
    <?php } ?>
    <?php
    if ($i % 2 == 1) {
        echo "<div style='clear:both'></div>";
    }
}

function asset_url($url = "") {
    if ($url !== "") {
        return base_url() . 'assets/' . $url;
    }
    return base_url() . 'assets/';
}

function tronque($str, $nb = 800) {
    if (strlen($str) > $nb) {
        $str = substr($str, 0, $nb);
        $position_espace = strrpos($str, " ");
        $texte = substr($str, 0, $position_espace);
        $str = $str . "...";
    }
    $str = strip_tags($str);
    return $str;
}

function view() {
    return base_url() . '/';
}

function asset_isset($tab, $tabTexte) {
    $flag = true;
    $texte_error = array();
    for ($i = 0; $i < sizeof($tab); $i++) {
        if (!isset($tab[$i]) || empty($tab[$i])) {
            $flag = false;
            array_push($texte_error, $tabTexte[$i]);
        }
    }
    $result = array("flag" => $flag, "error" => $texte_error);

    return $result;
}

function nombre_caratere($tab, $tabTexte, $nombreARetirer) {
    $flag = true;
    $texte_error = array();
    for ($i = 0; $i < sizeof($tab) - $nombreARetirer; $i++) {
        if (sizeof($tab[$i]) >= 6 && sizeof($tab[$i]) <= 50) {
            $flag = false;
            array_push($texte_error, $tabTexte[$i]);
        }
    }
    $result = array("flag" => $flag, "error" => $texte_error);

    return $result;
}
