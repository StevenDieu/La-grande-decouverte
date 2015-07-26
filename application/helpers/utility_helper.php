<?php

function modal($idHtml, $titre, $idContent, $idButton, $valueButton) {
    ?>
    <div id="<?php echo $idHtml ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"><?php echo $titre ?></h3>
        </div>
        <div class="modal-body">
            <?php
            if ($idContent = "add_image") {
                add_image($idHtml);
            } else {
                
            }
            ?>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <input type="button" class="btn btn-primary <?php echo $idButton; ?>" data-idhtml="<?php echo $idHtml; ?>" value="<?php echo $valueButton ?>"/>
        </div>
    </div>
    <?php
}

function deroulementHTMLHelper() {
    ?>

    <div class="center">
        <h3>Une déclinaison</h3> 
    </div>
    <br/>
    <div class="control-group">											
        <label class="control-label" for="titrederoulement">Titre * : </label>
        <div class="controls">
            <p>
                <input type="text" maxlength="1024" name="titrederoulement[]" class="span6 required" id="titrederoulement"  placeholder="Titre">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="texte">Texte * : </label>
        <div class="controls">
            <p>
                <input type="text" name="texte[]" class="span6 required" id="texte"  placeholder="Texte">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="jour">Jour * : </label>
        <div class="controls">
            <div class="input-prepend input-append">
                <input type="text" name="jour[]" class="span6 required" id="jour"  placeholder="Jour">
                <span class="add-on">Jours</span>
            </div>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="img_deroulement_voyage">Image : </label>
        <div class="controls">
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Parcourir&hellip;  <input type="file" id="img_deroulement_voyage" class="file" name='img_deroulement_voyage[]'>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
            <p class="help-block">Taille recommandé pour l'image : <b>650</b> x <b>435</b> px</p>
        </div>	
    </div>


    <?php
}

function venteHTMLHelper() {
    ?>
    <div class="center">
        <h3>Une déclinaison</h3> 
    </div>
    <br/>
    <div class="control-group">											
        <label class="control-label" for="date_depart">Date de départ * : </label>
        <div class="controls">
            <p>
                <input type="date" name="date_depart[]" class="span6 required" id="date_depart"  placeholder="Date de départ">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="date_arrivee">Date d'arrivée * : </label>
        <div class="controls">
            <p>
                <input type="date" name="date_arrivee[]" class="span6 required" id="date_arrivee"  placeholder="Date d'arrivée">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="depart">Emplacement de départ * : </label>
        <div class="controls">
            <p>
                <input type="text" name="depart[]" maxlength="255" class="span6 required" id="depart"  placeholder="Emplcement de départ">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="arrivee">Emplacement d'arrivée * : </label>
        <div class="controls">
            <p>
                <input type="text" name="arrivee[]" maxlength="255" class="span6 required" id="arrivee"  placeholder="Emplcement d'arrivée">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="place_dispo">Place disponible * : </label>
        <div class="controls">
            <p>
                <input type="text" name="place_dispo[]" class="span6 required place_dispo" id="place_dispo"  placeholder="Place disponible">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="prix">Prix * : </label>
        <div class="controls">
            <div class="input-prepend input-append">
                <input type="text" name="prix[]" class="span6 prix required prix" id="prix"  placeholder="Prix">
                <span class="add-on">€</span>
            </div>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="special_price">Prix spécial : </label>
        <div class="controls">
            <div class="input-prepend input-append">
                <input type="text" name="special_price[]" class="span6 prix" id="special_price"  placeholder="Prix spécial">
                <span class="add-on">€</span>
            </div>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="tva">Tva * : </label>
        <div class="controls">
            <p>
                <input type="text" name="tva[]" class="span6 prix required" id="tva"  placeholder="Tva">
            </p>
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="formalite">Formalité : </label>
        <div class="controls">
            <input type="text" name="formalite[]" class="span6" id="formalite"  placeholder="Formalité">
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="asavoir">A savoir : </label>
        <div class="controls">
            <input type="text" name="asavoir[]" class="span6" id="longitude"  placeholder="A savoir">
        </div>			
    </div>

    <div class="control-group">											
        <label class="control-label" for="comprenant">Comprenant : </label>
        <div class="controls">
            <input type="text" name="comprenant[]" class="span6" id="comprenant"  placeholder="Comprenant">
        </div>			
    </div>
    <?php
}

function add_image($idHtml) {
    ?>
    <div class="new_image_<?php echo $idHtml; ?>">
        <div class="control-group">											
            <label class="control-label" for="titre_<?php echo $idHtml; ?>">Titre : </label>
            <div class="controls">
                <input type="text" name="titre_<?php echo $idHtml; ?>" class="span6 titre_<?php echo $idHtml; ?>" placeholder="Titre">
            </div>			
        </div>
        <div class="control-group">											
            <label class="control-label" for="Image">Image : </label>
            <div class="controls">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-primary btn-file">
                            Parcourir&hellip;  <input type="file" class="image_<?php echo $idHtml; ?>" name="image_<?php echo $idHtml; ?>">
                        </span>
                    </span>
                    <input type="text" class="form-control text_<?php echo $idHtml; ?>" readonly>
                </div>
            </div>			
        </div>
    </div>
    <?php
}

function carnet_first($carnetVoyages, $i) {
?>
    <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" >
        <li class="carnet car1">
            <div class="titre_sans_hover"><?php echo $carnetVoyages[$i]->cvTitre; ?></div>
            <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[0]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[0]; ?>"/>
            <div class="legende">
                <div class="containe">
                    <a class="titre" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
                    <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
                    <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 370) . '...'; ?></div>
                </div>
                <a class="lien" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">Voir le carnet</a>
            </div>
        </li>
    </a>
    <?php
}

function carnet_second($carnetVoyages, $i) {
?>
    <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" >
        <li class="carnet car2">
            <div class="titre_sans_hover"><?php echo $carnetVoyages[$i]->cvTitre; ?></div>
            <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[0]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[0]; ?>"/>
            <div class="legende">
                <div class="containe">
                    <a class="titre" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
                    <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
                    <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 370) . '...'; ?></div>
                </div>
                <a class="lien" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">Voir le carnet</a>
            </div>
        </li>
    </a>
    <?php
}

function carnet_third($carnetVoyages, $i) {
?>
    <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" >
        <li class="carnet car3">
            <div class="titre_sans_hover"><?php echo $carnetVoyages[$i]->cvTitre; ?></div>
            <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[0]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[0]; ?>"/>
            <div class="legende">
                <div class="containe">
                    <a class="titre" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>"><?php echo $carnetVoyages[$i]->cvTitre; ?></a>
                    <div class="date_auteur"><span><?php echo $carnetVoyages[$i]->vTitre; ?></span></div>
                    <div class="texte"><?php echo substr(strip_tags($carnetVoyages[$i]->vAccroche), 0, 370) . '...'; ?></div>
                </div>
                <a class="lien" href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>" >Voir le carnet</a>
            </div>
        </li>
    </a>
    <?php

}

function carnet_long($carnetVoyages, $i) {
    ?>
    <div class="article_first">
        <div class="image">
            <div class="callbacks_container carnet">
                <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">
                    <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                        <?php for ($j = 0; $j < count($carnetVoyages[$i]->lien); $j++) { ?>
                            <li>
                                <div class = "image_slide_carnet">
                                    <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[$j]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[$j]; ?>"/>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
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
                        <?php for ($j = 0; $j < count($carnetVoyages[$i]->lien); $j++) { ?>
                            <li>
                                <div class = "image_slide_carnet">
                                    <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[$j]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[$j]; ?>"/>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
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
        echo ' <div class="contenu_article_suivant"> ';
    }
    ?>
    <div class="un_article <?php if ($i % 2 == 0) echo "left" ?>">
        <div class="callbacks_container carnet">
            <a href="<?php echo base_url('voyage/carnet') . "?id=" . $carnetVoyages[$i]->cvId ?>">
                <ul class="rslides" id="slidercarnet<?php echo $i ?>">
                    <?php for ($j = 0; $j < count($carnetVoyages[$i]->lien); $j++) { ?>
                        <li>
                            <div class = "image_slide_carnet">
                                <img src = "<?php echo base_url(); ?>media/<?php echo $carnetVoyages[$i]->lien[$j]; ?>" alt = "<?php echo $carnetVoyages[$i]->nom[$j]; ?>"/>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
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
    <?php
    if ($i % 2) {
        echo "</div>";
    }

    if ($i % 2 == 1) {
        echo "<div style='clear:both'></div>";
    }
}

function remove_last_element_array($arrays, $j) {
    $newArrray = array();
    for ($i = 0; $i < (count($arrays) - $j); $i++) {
        array_push($newArrray, $arrays[$i]);
    }
    return $newArrray;
}

function asset_url($url = "") {
    if ($url !== "") {
        return base_url() . 'assets/' . $url;
    }
    return base_url() . 'assets/';
}

function asset_media($url = "") {
    if ($url !== "") {
        return base_url() . 'media/' . $url;
    }
    return base_url() . 'media/';
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
