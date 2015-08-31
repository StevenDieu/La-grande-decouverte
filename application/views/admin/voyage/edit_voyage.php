<script>
    var urlAjouterImage = '<?php echo base_url('admin/voyages/uploadImage'); ?>';
    var urlDeleteImage = '<?php echo base_url('admin/voyages/deleteImage'); ?>';
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Voyages</h3>
                    <a href="<?php echo base_url('admin/voyages/liste'); ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                </div>
                <div class="widget-content">
                    <div class="content admin-connexion">
                        <fieldset>
                            <?php
                            echo validation_errors();
                            if (isset($error)) {
                                echo $error;
                            }
                            if (!empty($voyage)) {
                                $attributes = array('class' => 'form-horizontal', 'id' => 'add-travel');
                                echo form_open_multipart('admin/model_voyage/edit', $attributes);
                                ?>
                                <input type="hidden" value="<?= $id_voyage ?>" name="id_voyage" />
                                <div class="info_generale">
                                    <legend>Information générale</legend>
                                    <div class="control-group">											
                                        <label class="control-label" for="titre">Titre * : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="titre"  maxlength="512" class="span6 required" id="titre"  placeholder="Titre" value="<?= $voyage[0]->titre ?>">
                                            </p>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="phrase_accroche">Phrase d'accroche * : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="phrase_accroche" class="span6 required" id="phrase_accroche"  placeholder="Phrase d'accroche" value="<?= $voyage[0]->phrase_accroche ?>">
                                            </p>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="phrase_accroche_slider">Phrase d'accroche slider * : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="phrase_accroche_slider" maxlength="255" class="span6 required" id="phrase_accroche_slider"  value="<?= $voyage[0]->phrase_accroche_slider ?>" placeholder="Phrase d'accroche slider">
                                            </p>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="duree">Duree * : </label>
                                        <div class="controls">
                                            <div class="input-prepend input-append">
                                                <input type="text" name="duree" class="span6 required" id="duree"  placeholder="Duree" value="<?= $voyage[0]->duree ?>">
                                                <span class="add-on">Jours</span>
                                            </div>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="description_first_bloc">Description premier bloc * : </label>
                                        <div class="controls">
                                            <p>
                                                <textarea name="description_first_bloc" class="required" id="description_first_bloc" rows="4" cols="50"  placeholder="Description premier bloc"><?= $voyage[0]->description_first_bloc ?></textarea>
                                            </p>
                                        </div>			
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="description_second_bloc">Description deuxième bloc * : </label>
                                        <div class="controls">
                                            <p>
                                                <textarea name="description_second_bloc" class="required" id="description_second_bloc" rows="4" cols="50"  placeholder="Description deuxième bloc"><?= $voyage[0]->description_second_bloc ?></textarea>
                                            </p>
                                        </div>
                                    </div>	

                                    <div class="control-group">											
                                        <label class="control-label" for="description_third_bloc">Description troisième bloc * : </label>
                                        <div class="controls">
                                            <p>
                                                <textarea name="description_third_bloc" class="required" id="description_third_bloc" rows="4" cols="50"  placeholder="Description troisième bloc"><?= $voyage[0]->description_third_bloc ?></textarea>
                                            </p>
                                        </div>			
                                    </div>
                                </div>


                                <div class="info_pays">
                                    <legend>Information pays</legend>
                                    <div class="control-group">											
                                        <label class="control-label" for="capital">Capital : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="capital" maxlength="1024" class="span6" id="capital"  placeholder="Capital"  value="<?= $pays[0]->capital ?>">
                                            </p>
                                        </div>			
                                    </div>
                                    <div class="control-group">											
                                        <label class="control-label" for="continent">Continent : </label>
                                        <div class="controls">
                                            <?php if ($continents) { ?>
                                                <select name="id_continent" >
                                                    <?php foreach ($continents as $continent) { ?>
                                                        <option value="<?php echo $continent->id; ?>" <?php if ($continent->id == $pays[0]->id_continent) { ?> selected='selected' <?php } ?>><?php echo $continent->name; ?></option> 
                                                    <?php } ?>    
                                                </select>
                                            <?php } else { ?>
                                                <a href="<?php echo asset_url('/admin/continent/'); ?>">
                                                    Gestion des continents
                                                </a>
                                            <?php } ?>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="meteo_temperature">Temperature moyenne : </label>
                                        <div class="controls">
                                            <input type="text" name="meteo_temperature" maxlength="45" class="span6" id="meteo_temperature"  placeholder="Temperature moyenne"  value="<?= $pays[0]->meteo_temperature ?>">
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="meteo_image">Image meteo : </label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Parcourir&hellip;  <input type="file" id="meteo_image" class="file" name='meteo_image'>
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                        </div>			
                                    </div>

                                    <?php if ($pays[0]->meteo_image != "") { ?>
                                        <div class="control-group">											
                                            <label class="control-label" for="img_deroulement_voyage">Apercu : </label>
                                            <div class="controls">
                                                <div class="apercu">
                                                    <img class="apercu_image" src="<?= asset_media($pays[0]->meteo_image); ?>" title="<?= array_pop(explode("/", $pays[0]->meteo_image)); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <div class="control-group">											
                                        <label class="control-label" for="villes_principales">Villes principales : </label>
                                        <div class="controls">
                                            <input type="text" name="villes_principales" class="span6" id="villes_principales"  placeholder="Villes principales"  value="<?= $pays[0]->villes_principales ?>">
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="religion">Religion : </label>
                                        <div class="controls">
                                            <input type="text" name="religion" class="span6" id="religion"  placeholder="Religion"  value="<?= $pays[0]->religion ?>">
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="nombre_habitant">Nombre d'habitants : </label>
                                        <div class="controls">
                                            <input type="text" name="nombre_habitant" class="span6" id="nombre_habitant"  placeholder="Nombre d'habitants"  value="<?= $pays[0]->nombre_habitant ?>">
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="monnaie">Monnaie : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="monnaie" class="span6" id="monnaie"  placeholder="Monnaie"  value="<?= $pays[0]->monnaie ?>">
                                            </p>
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="fete">Fête nationale : </label>
                                        <div class="controls">
                                            <input type="text" name="fete" class="span6" id="fete"  placeholder="Fête nationale"  value="<?= $pays[0]->fete ?>">
                                        </div>			
                                    </div>

                                    <div class="control-group">											
                                        <label class="control-label" for="drapeau">Image drapeau : </label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Parcourir&hellip;  <input type="file" id="drapeau" class="file" name='drapeau'>
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <p class="help-block">Taille recommandé pour l'image : <b>60</b> x <b>40</b> px</p>
                                        </div>			
                                    </div>

                                    <?php if ($pays[0]->drapeau != "") { ?>
                                        <div class="control-group">											
                                            <label class="control-label" for="img_deroulement_voyage">Apercu : </label>
                                            <div class="controls">
                                                <div class="apercu">
                                                    <img class="apercu_image" src="<?= asset_media($pays[0]->drapeau); ?>" title="<?= array_pop(explode("/", $pays[0]->drapeau)); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <div class="control-group">											
                                        <label class="control-label" for="langue_officielle">Langue officielle : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="langue_officielle" maxlength="255" class="span6" id="langue_officielle"  placeholder="Langue officielle"  value="<?= $pays[0]->langue_officielle ?>">
                                            </p>
                                        </div>			
                                    </div>

                                </div>


                                <div class="carte">
                                    <legend>Information carte</legend>
                                    <div class="control-group">											
                                        <label class="control-label" for="lattitude">Lattitude * : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="lattitude" class="span6 required localisation" id="lattitude"  placeholder="Lattitude"  value="<?= $voyage[0]->lattitude ?>">
                                            </p>
                                        </div>			
                                    </div>
                                    <div class="control-group">											
                                        <label class="control-label" for="longitude">Longitude * : </label>
                                        <div class="controls">
                                            <p>
                                                <input type="text" name="longitude" class="span6 required localisation" id="longitude"  placeholder="Longitude"  value="<?= $voyage[0]->longitude ?>">
                                            </p>
                                        </div>			
                                    </div>
                                </div>

                                <div class="image">
                                    <legend>Image</legend>



                                    <div class="widget-header">
                                        <h3>Image slider ( taille recommandé <b>2000</b> x <b>1000</b> px ) *</h3> 
                                        <a href="#image_slider" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image description</a>
                                        <?php modal("image_slider", "Ajout Image Slider", "add_image", "add_image", "Ajouter") ?>
                                    </div>
                                    <div  class="widget-content"  style="height: auto;">
                                        <table  id="content_end_image_slider" class="table table-striped content_image">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Titre
                                                    </th>
                                                    <th class="center">
                                                        Aperçu
                                                    </th>
                                                    <th class="center">
                                                        Action
                                                    </th>
                                                </tr>
                                                <?php
                                                $i = 1;
                                                if ($images) {
                                                    foreach ($images as $image) {
                                                        if ($image->emplacement == "image_slider") {
                                                            ?>
                                                        <script type="text/javascript">
                                                            if (tabImageSlider === undefined) {
                                                                var tabImageSlider = new Array();
                                                                var sizeTabImageSlider = tabImageSlider.length;
                                                            }
                                                            tabImageSlider.push(sizeTabImageSlider++);
                                                        </script>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td class = "maxW115">
                                                                <p>
                                                                    <input type = "text" name = "titre_image_slider[]" class = "required" value = "<?= $image->nom ?>">
                                                                </p>
                                                            </td>
                                                            <td class = "center td_image">
                                                                <input type = "hidden" name = "image_image_slider[]" value = "<?= $image->lien ?>">
                                                                <img class = "image_100" src = "<?= asset_media($image->lien) ?>" alt = "<?= $image->nom ?>">
                                                            </td>
                                                            <td class = "center">
                                                                <input type = "button" class = "btn btn-danger remove_image width_auto" value = "x" data-idhtml = "image_slider" data-id = "<?= $i ?>">
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <br/>
                                    <div class = "widget-header">
                                        <h3>Image Banière ( taille recommandé <b>400</b> x <b>300px</b> ) 4 images néccessaires *</h3>
                                        <a href = "#banniere" role = "button" data-toggle = "modal" class = "btn btn-primary bouton_right">Ajouter image banière</a>
                                        <?php modal("banniere", "Ajout Image Banière", "add_image", "add_image", "Ajouter")
                                        ?>
                                    </div>
                                    <div  class="widget-content"  style="height: auto;">
                                        <table  id="content_end_banniere" class="table table-striped content_image">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Titre
                                                    </th>
                                                    <th class="center">
                                                        Aperçu
                                                    </th>
                                                    <th class="center">
                                                        Action
                                                    </th>
                                                </tr>
                                                <?php
                                                $i = 1;
                                                if ($images) {
                                                    foreach ($images as $image) {
                                                        if ($image->emplacement == "banniere") {
                                                            ?>
                                                        <script type="text/javascript">
                                                            if (tabImageBanniere === undefined) {
                                                                var tabImageBanniere = new Array();
                                                                var sizeTabImageBanniere = tabImageBanniere.length;
                                                            }
                                                            tabImageBanniere.push(sizeTabImageBanniere++);
                                                        </script>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td class = "maxW115">
                                                                <p>
                                                                    <input type = "text" name = "titre_banniere[]" class = "required" value = "<?= $image->nom ?>">
                                                                </p>
                                                            </td>
                                                            <td class = "center td_image">
                                                                <input type = "hidden" name = "image_banniere[]" value = "<?= $image->lien ?>">
                                                                <img class = "image_100" src = "<?= asset_media($image->lien) ?>" alt = "<?= $image->nom ?>">
                                                            </td>
                                                            <td class = "center">
                                                                <input type = "button" class = "btn btn-danger remove_image width_auto" value = "x" data-idhtml = "banniere" data-id = "<?= $i ?>">
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>
                                    <div class="widget-header">
                                        <h3>Image Description ( taille recommandé <b>400</b> x <b>300px</b> ) *</h3> 
                                        <a href="#image_description" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image slider</a>
                                        <?php modal("image_description", "Ajout Image Description", "add_image", "add_image", "Ajouter") ?>
                                    </div>
                                    <div  class="widget-content"  style="height: auto;">
                                        <table  id="content_end_image_description" class="table table-striped content_image">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Titre
                                                    </th>
                                                    <th class="center">
                                                        Aperçu
                                                    </th>
                                                    <th class="center">
                                                        Action
                                                    </th>
                                                </tr>
                                                <?php
                                                $i = 1;
                                                if ($images) {
                                                    foreach ($images as $image) {
                                                        if ($image->emplacement == "image_description") {
                                                            ?>
                                                        <script type="text/javascript">
                                                            if (tabImageDescription === undefined) {
                                                                var tabImageDescription = new Array();
                                                                var sizeTabImageDescription = tabImageDescription.length;
                                                            }
                                                            tabImageDescription.push(sizeTabImageDescription++);
                                                        </script>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td class = "maxW115">
                                                                <p>
                                                                    <input type = "text" name = "titre_image_description[]" class = "required" value = "<?= $image->nom ?>">
                                                                </p>
                                                            </td>
                                                            <td class = "center td_image">
                                                                <input type = "hidden" name = "image_image_description[]" value = "<?= $image->lien ?>">
                                                                <img class = "image_100" src = "<?= asset_media($image->lien) ?>" alt = "<?= $image->nom ?>">
                                                            </td>
                                                            <td class = "center">
                                                                <input type = "button" class = "btn btn-danger remove_image width_auto" value = "x" data-idhtml = "image_description" data-id = "<?= $i ?>">
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>

                                    <div class="widget-header">
                                        <h3>Choix des pictos (6 max) *</h3> 
                                    </div>
                                    <div  class="widget-content"  style="height: auto;">
                                        <?php
                                        if ($pictoVoyages) {
                                            foreach ($pictoVoyages as $pictoVoyage) {
                                                ?>
                                                <script type="text/javascript">
                                                    if (tabImagePicto === undefined) {
                                                        var tabImagePicto = new Array();
                                                    }
                                                    tabImagePicto.push("<?php echo $pictoVoyage->id; ?>")

                                                </script>

                                                <?php
                                            }
                                        }
                                        ?>
                                        <input type = "hidden" class = "picto_hidden" name = "picto_hidden" value = "" />
                                        <?php
                                        $class = false;
                                        if ($pictos) {
                                            foreach ($pictos as $picto) {
                                                if ($pictoVoyages) {
                                                    foreach ($pictoVoyages as $pictoVoyage) {
                                                        if ($picto->id == $pictoVoyage->id) {
                                                            $class = true;
                                                            break;
                                                        }
                                                    }
                                                }
                                                ?>
                                                <div class="blockPictoVoyage">
                                                    <?php if ($class) { ?>
                                                        <img src="<?php echo asset_media($picto->lien); ?>" alt="picto" class="img_picto remove_picto img_picto_selected" data-id="<?php echo $picto->id ?>" />
                                                        <span class="btn-circle valid_picto"><i class="icon-ok"></i></span>
                                                    <?php } else { ?>
                                                        <img src="<?php echo asset_media($picto->lien); ?>" alt="picto" class="img_picto add_picto" data-id="<?php echo $picto->id ?>" />
                                                        <span class="btn-circle valid_picto hidden"><i class="icon-ok"></i></span>
                                                    <?php } ?>
                                                </div>
                                                <?php
                                                $class = false;
                                            }
                                        } else {

                                            echo "Pas de picto";
                                        }
                                        ?>
                                    </div>
                                    <br/>
                                    <div class="control-group">											
                                        <label class="control-label" for="image_sous_slider">Image Sous slider * : </label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        Parcourir&hellip;  <input type="file" id="image_sous_slider" class=" <?php if ($voyage[0]->image_sous_slider == "") { ?>required<?php } ?> file" name='image_sous_slider'>
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <p class="help-block">Taille recommandé pour l'image : <b>900</b> x <b>512</b> px</p>
                                        </div>			
                                    </div>

                                    <?php if ($voyage[0]->image_sous_slider != "") { ?>
                                        <div class="control-group">											
                                            <label class="control-label" for="img_deroulement_voyage">Apercu : </label>
                                            <div class="controls">
                                                <div class="apercu">
                                                    <img class="apercu_image" src="<?= asset_media($voyage[0]->image_sous_slider); ?>" title="<?= array_pop(explode("/", $voyage[0]->image_sous_slider)); ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <br/>



                                </div>

                                <div class="info_de_vente">
                                    <legend>information vente</legend>
                                    <?php
                                    $suppr = true;
                                    foreach ($infoVoyages as $infoVoyage) {
                                        ?>

                                        <?php
                                        if ($suppr) {
                                            echo '<div class = "ligne_info_vente">';
                                        } else {
                                            ?>
                                            <div class = "ligne">
                                                <a href="javascript:;" data-idInfo="<?= $infoVoyage->id ?>" class="delete_ligne btn btn-danger floatRight"><i class="icon-remove"></i></a>
                                            <?php } ?> 
                                            <input type="hidden" value="<?= $infoVoyage->id ?>" name="id_info_voyage[]" />

                                            <div class = "center">
                                                <h3>Une déclinaison</h3>
                                            </div>
                                            <br/>
                                            <div class = "control-group">
                                                <label class = "control-label" for = "date_depart">Date de départ * : </label>
                                                <div class = "controls">
                                                    <p>
                                                        <input type = "date" name = "date_depart[]" value="<?= $infoVoyage->date_depart ?>" class = "span6 required" id = "date_depart" placeholder = "Date de départ">
                                                    </p>
                                                </div>
                                            </div>

                                            <div class = "control-group">
                                                <label class = "control-label" for = "date_arrivee">Date d'arrivée * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="date" name="date_arrivee[]" value="<?= $infoVoyage->date_arrivee ?>" class="span6 required" id="date_arrivee"  placeholder="Date d'arrivée">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="depart">Emplacement de départ * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" name="depart[]" maxlength="255" value="<?= $infoVoyage->depart ?>" class="span6 required" id="depart"  placeholder="Emplacement de départ">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="arrivee">Emplacement d'arrivée * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" name="arrivee[]" maxlength="255" value="<?= $infoVoyage->arrivee ?>" class="span6 required" id="arrivee"  placeholder="Emplacement d'arrivée">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="place_dispo">Place disponible * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" name="place_dispo[]" class="span6 required place_dispo" value="<?= $infoVoyage->place_dispo ?>" id="place_dispo"  placeholder="Place disponible">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="prix">Prix * : </label>
                                                <div class="controls">
                                                    <div class="input-prepend input-append">
                                                        <input type="text" name="prix[]" class="span6 prix required prix" value="<?= $infoVoyage->prix ?>" id="prix"  placeholder="Prix">
                                                        <span class="add-on">€</span>
                                                    </div>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="special_price">Prix spécial : </label>
                                                <div class="controls">
                                                    <div class="input-prepend input-append">
                                                        <input type="text" name="special_price[]" class="span6 prix" id="special_price" value="<?= $infoVoyage->special_price ?>" placeholder="Prix spécial">
                                                        <span class="add-on">€</span>
                                                    </div>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="tva">Tva * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" name="tva[]" class="span6 prix required" id="tva"  placeholder="Tva" value="<?= $infoVoyage->tva ?>">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="formalite">Formalité : </label>
                                                <div class="controls">
                                                    <input type="text" name="formalite[]" class="span6" id="formalite"  placeholder="Formalité" value="<?= $infoVoyage->formalite ?>">
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="asavoir">A savoir : </label>
                                                <div class="controls">
                                                    <input type="text" name="asavoir[]" class="span6" id="asavoir"  placeholder="A savoir" value="<?= $infoVoyage->asavoir ?>">
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="comprenant">Comprenant : </label>
                                                <div class="controls">
                                                    <input type="text" name="comprenant[]" class="span6" id="comprenant"  placeholder="Comprenant" value="<?= $infoVoyage->comprenant ?>">
                                                </div>			
                                            </div>

                                        </div>

                                        <?php
                                        $suppr = false;
                                    }
                                    ?>
                                </div>

                                <div class="center">
                                    <a class='add_ligne btn btn-success ' href="javascript:;" onclick="addLigne()">Ajouter une nouvelle information voyage</a>
                                </div>

                                <br/>
                                <br/>

                                <div class="info_deroulement">
                                    <legend>Information déroulement voyage</legend>
                                    <?php
                                    $suppr = true;
                                    foreach ($deroulementVoyages as $deroulementVoyage) {
                                        ?>
                                        <?php
                                        if ($suppr) {
                                            echo '<div class="ligne_info_deroulement">';
                                        } else {
                                            ?>
                                            <div class = "ligne">
                                                <a href="javascript:;" data-idderoulement="<?= $deroulementVoyage->id ?>" class="delete_ligne btn btn-danger floatRight"><i class="icon-remove"></i></a>
                                            <?php } ?> 
                                            <input type="hidden" value="<?= $deroulementVoyage->id ?>" name="id_deroulement[]" />

                                            <div class="center">
                                                <h3>Une déclinaison</h3> 
                                            </div>
                                            <br/>
                                            <div class="control-group">											
                                                <label class="control-label" for="titrederoulement">Titre * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" maxlength="1024" name="titrederoulement[]"  value="<?= $deroulementVoyage->titrederoulement ?>" class="span6 required" id="titrederoulement"  placeholder="Titre">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="texte">Texte * : </label>
                                                <div class="controls">
                                                    <p>
                                                        <input type="text" name="texte[]" class="span6 required"  value="<?= $deroulementVoyage->texte ?>" id="texte"  placeholder="Texte">
                                                    </p>
                                                </div>			
                                            </div>

                                            <div class="control-group">											
                                                <label class="control-label" for="jour">Jour * : </label>
                                                <div class="controls">
                                                    <div class="input-prepend input-append">
                                                        <input type="text" name="jour[]" class="span6 required"  value="<?= $deroulementVoyage->jour ?>" id="jour"  placeholder="Jour">
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
                                            <?php if ($deroulementVoyage->img_deroulement_voyage != "") { ?>
                                                <div class="control-group">											
                                                    <label class="control-label" for="img_deroulement_voyage">Apercu : </label>
                                                    <div class="controls">
                                                        <div class="apercu">
                                                            <img class="apercu_image" src="<?= asset_media($deroulementVoyage->img_deroulement_voyage); ?>" title="<?= array_pop(explode("/", $deroulementVoyage->img_deroulement_voyage)); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>



                                        <?php
                                        $suppr = false;
                                    }
                                    ?>
                                </div>

                                <div class = "center">
                                    <a class = 'add_ligne btn btn-success ' href = "javascript:;" onclick = "addLigneDeroulement()">Ajouter une journée</a>
                                </div>



                                <br/>
                                * champs obligatoires
                                <br/>

                                <div class = "form-actions">
                                    <button type = "submit" class = "btn btn-primary submit_bouton_verif">Editer</button>
                                </div>

                                <?php
                                echo form_close();
                            } else {
                                ?>
                                Un problème est survenu lors de l'édition de la commande.
                                <?php
                            }
                            ?> 
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>