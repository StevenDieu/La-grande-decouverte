<?php

function carnet_long($carnetVoyages,$i) {
    ?>

    <div class="article_first">
        <div class="image">
            <div class="callbacks_container carnet">
                <a href="#">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="image_slide_carnet">
                                <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
                            </div>                                                
                        </li>
                    </ul>
                    <a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a>
                    <a href="#" class="callbacks_nav callbacks1_nav next">Next</a>
                </a>
            </div>
            <a class="slide_carnet1" href="http://localhost/TVAFS-1.0/assets/../fancybox/popup_carnet.php"></a>
            <div style="clear:both"></div>
        </div>
        <div class="partie_droite">
            <a  href="#" class="titre">aze</a>
            <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
            <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 550) . '...'; ?></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
        </div>
        <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
    </div>
    <div style='clear:both'></div>
    <?php
}

function carnet_court($carnetVoyages,$i) {
    ?>
    <div class="contenu_article_suivant">
        <div class="un_article <?php if ($i % 2 == 0) echo "left" ?>">
            <div class="callbacks_container carnet">
                <a href="#">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <li>
                            <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut.jpg" alt="">
                        </li>
                        <li>
                            <img src="<?php echo asset_url(''); ?>images/ficheproduit/carnet/tribut2.jpg" alt="">
                        </li>
                    </ul>
                </a>
            </div>
            <div style="clear:both"></div>
            <a class="titre"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
            <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
            <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 550) . '...'; ?></div>
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" class="lire_suite">Voir le carnet ></a>
            <script type="text/javascript">initialiseResponsiveSilide('#slidercarnet<?php echo $i ?>');</script>
        </div>
    </div>
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
