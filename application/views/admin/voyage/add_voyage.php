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
                            $attributes = array('class' => 'form-horizontal', 'id' => 'add-travel');
                            echo form_open_multipart('admin/model_voyage/save', $attributes);
                            ?>

                            <div class="info_generale">
                                <legend>Information générale</legend>
                                <div class="control-group">											
                                    <label class="control-label" for="titre">Titre * : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="titre"  maxlength="512" class="span6 required" id="titre"  placeholder="Titre">
                                        </p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="phrase_accroche">Phrase d'accroche * : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="phrase_accroche" class="span6 required" id="phrase_accroche"  placeholder="Phrase d'accroche">
                                        </p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="phrase_accroche_slider">Phrase d'accroche slider * : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="phrase_accroche_slider" maxlength="255" class="span6 required" id="phrase_accroche_slider"  placeholder="Phrase d'accroche slider">
                                        </p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="duree">Duree * : </label>
                                    <div class="controls">
                                        <div class="input-prepend input-append">
                                            <input type="text" name="duree" class="span6 required" id="duree"  placeholder="Duree">
                                            <span class="add-on">Jours</span>
                                        </div>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="description_first_bloc">Description premier bloc * : </label>
                                    <div class="controls">
                                        <p>
                                            <textarea name="description_first_bloc" class="required" id="description_first_bloc" rows="4" cols="50"  placeholder="Description premier bloc"></textarea>
                                        </p>
                                    </div>			
                                </div>


                                <div class="control-group">
                                    <label class="control-label" for="description_second_bloc">Description deuxième bloc * : </label>
                                    <div class="controls">
                                        <p>
                                            <textarea name="description_second_bloc" class="required" id="description_second_bloc" rows="4" cols="50"  placeholder="Description deuxième bloc"></textarea>
                                        </p>
                                    </div>
                                </div>	

                                <div class="control-group">											
                                    <label class="control-label" for="description_third_bloc">Description troisième bloc * : </label>
                                    <div class="controls">
                                        <p>
                                            <textarea name="description_third_bloc" class="required" id="description_third_bloc" rows="4" cols="50"  placeholder="Description troisième bloc"></textarea>
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
                                            <input type="text" name="capital" maxlength="1024" class="span6" id="capital"  placeholder="Capital">
                                        </p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="continent">Continent : </label>
                                    <div class="controls">
                                        <?php if ($continents) { ?>
                                            <select name="id_continent">
                                                <?php foreach ($continents as $continent) { ?>
                                                    <option value="<?php echo $continent->id; ?>"><?php echo $continent->name; ?></option> 
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
                                        <input type="text" name="meteo_temperature" maxlength="45" class="span6" id="meteo_temperature"  placeholder="Temperature moyenne">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="meteo_image">Image meteo : </label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Parcourir&hellip;  <input type="file" id="meteo_image" name='meteo_image'>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="villes_principales">Villes principales : </label>
                                    <div class="controls">
                                        <input type="text" name="villes_principales" class="span6" id="villes_principales"  placeholder="Villes principales">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="religion">Religion : </label>
                                    <div class="controls">
                                        <input type="text" name="religion" class="span6" id="religion"  placeholder="Religion">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="nombre_habitant">Nombre d'habitants : </label>
                                    <div class="controls">
                                        <input type="text" name="nombre_habitant" class="span6" id="nombre_habitant"  placeholder="Nombre d'habitants">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="monnaie">Monnaie : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="monnaie" class="span6" id="monnaie"  placeholder="Monnaie">
                                        </p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="fete">Fête nationale : </label>
                                    <div class="controls">
                                        <input type="text" name="fete" class="span6" id="fete"  placeholder="Fête nationale">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="drapeau">Image drapeau : </label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Parcourir&hellip;  <input type="file" id="drapeau" name='drapeau'>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <p class="help-block">Taille recommandé pour l'image : <b>60</b> x <b>40</b> px</p>
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="langue_officielle">Langue officielle : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="langue_officielle" maxlength="255" class="span6" id="langue_officielle"  placeholder="Langue officielle">
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
                                            <input type="text" name="lattitude" class="span6 required" id="lattitude"  placeholder="Lattitude">
                                        </p>
                                    </div>			
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="longitude">Longitude * : </label>
                                    <div class="controls">
                                        <p>
                                            <input type="text" name="longitude" class="span6 required" id="longitude"  placeholder="Longitude">
                                        </p>
                                    </div>			
                                </div>
                            </div>

                            <div class="image">
                                <legend>Image</legend>



                                <div class="widget-header">
                                    <h3>Image slider ( taille recommandé <b>2000</b> x <b>1000</b> px ) *</h3> 
                                    <a href="#image_slider" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image slider</a>
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
                                        </tbody>
                                    </table>

                                </div>
                                <br/>
                                <div class="widget-header">
                                    <h3>Image Banière ( taille recommandé <b>400</b> x <b>300px</b> ) 4 images néccessaires *</h3>
                                    <a href="#banniere" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image banière</a>
                                    <?php modal("banniere", "Ajout Image Banière", "add_image", "add_image", "Ajouter") ?>
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
                                        </tbody>
                                    </table>
                                </div>
                                <br/>
                                <div class="widget-header">
                                    <h3>Image Description ( taille recommandé <b>400</b> x <b>300px</b> ) *</h3> 
                                    <a href="#image_description" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image Description</a>
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
                                        </tbody>
                                    </table>
                                </div>
                                <br/>

                                <div class="widget-header">
                                    <h3>Choix des pictos (6 max) *</h3> 
                                </div>
                                <div  class="widget-content"  style="height: auto;">
                                    <input type="hidden" class="picto_hidden" name="picto_hidden" value="" />
                                    <?php
                                    if ($pictos) {
                                        foreach ($pictos as $picto) {
                                            ?>
                                            <div class="blockPictoVoyage">
                                                <img src="<?php echo asset_media($picto->lien); ?>" alt="picto" class="img_picto add_picto" data-id="<?php echo $picto->id ?>" />
                                                <span class="btn-circle valid_picto hidden"><i class="icon-ok"></i></span>
                                            </div>
                                            <?php
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
                                                    Parcourir&hellip;  <input type="file" id="image_sous_slider" class="required" name='image_sous_slider'>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <p class="help-block">Taille recommandé pour l'image : <b>900</b> x <b>512</b> px</p>
                                    </div>			
                                </div>



                                <br/>



                            </div>

                            <div class="info_de_vente">
                                <legend>information vente</legend>

                                <div class="ligne_info_vente">
                                    <?php echo venteHTMLHelper(); ?>
                                </div>
                            </div>



                            <div class="center">
                                <a class='add_ligne btn btn-success ' href="javascript:;" onclick="addLigne()">Ajouter une nouvelle information voyage</a>
                            </div>

                            <br/>
                            <br/>

                            <div class="info_deroulement">
                                <legend>Information déroulement voyage</legend>

                                <div class="ligne_info_deroulement">
                                    <?php echo deroulementHTMLHelper(); ?>
                                </div>
                            </div>

                            <div class="center">
                                <a class='add_ligne btn btn-success ' href="javascript:;" onclick="addLigneDeroulement()">Ajouter une journée</a>
                            </div>



                            <br/>
                            * champs obligatoires
                            <br/>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary submit_bouton_verif">Enregistrer</button> 
                            </div>

                            <?php echo form_close(); ?> 
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>