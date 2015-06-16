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
                                    <label class="control-label" for="titre">Titre : </label>
                                    <div class="controls">
                                        <input type="text" name="titre" class="span6" id="titre"  placeholder="Titre">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="phrase_accroche">Phrase d'accroche : </label>
                                    <div class="controls">
                                        <input type="text" name="phrase_accroche" class="span6" id="phrase_accroche"  placeholder="Phrase d'accroche">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="duree">Duree : </label>
                                    <div class="controls">
                                        <input type="text" name="duree" class="span6" id="duree"  placeholder="Duree">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="description_first_bloc">Description premier bloc : </label>
                                    <div class="controls">
                                        <textarea name="description_first_bloc" id="description_first_bloc" rows="4" cols="50"  placeholder="Description premier bloc"></textarea>
                                    </div>			
                                </div>


                                <div class="control-group">
                                    <label class="control-label" for="description_second_bloc">Description deuxième bloc : </label>
                                    <div class="controls">
                                        <textarea name="description_second_bloc" id="description_second_bloc" rows="4" cols="50"  placeholder="Description deuxième bloc"></textarea>
                                    </div>
                                </div>	

                                <div class="control-group">											
                                    <label class="control-label" for="description_third_bloc">Description troisième bloc : </label>
                                    <div class="controls">
                                        <textarea name="description_third_bloc" id="description_third_bloc" rows="4" cols="50"  placeholder="Description troisième bloc"></textarea>
                                    </div>			
                                </div>
                            </div>


                            <div class="info_pays">
                                <legend>Information pays</legend>
                                <div class="control-group">											
                                    <label class="control-label" for="capital">Capital : </label>
                                    <div class="controls">
                                        <input type="text" name="capital" class="span6" id="capital"  placeholder="Capital">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="continent">Continent : </label>
                                    <div class="controls">
                                        <?php if ($continents) { ?>
                                            <select name="continent">
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
                                        <input type="text" name="meteo_temperature" class="span6" id="meteo_temperature"  placeholder="Temperature moyenne">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="meteo_image">Image meteo : </label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse&hellip;  <input type="file" id="meteo_image" name='meteo_image'>
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
                                        <input type="text" name="monnaie" class="span6" id="Monnaie"  placeholder="Monnaie">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="fete">Fête natiannal : </label>
                                    <div class="controls">
                                        <input type="text" name="fete" class="span6" id="fete"  placeholder="Fête natiannal">
                                    </div>			
                                </div>

                                <div class="control-group">											
                                    <label class="control-label" for="drapeau">Image drapeau : </label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse&hellip;  <input type="file" id="drapeau" name='drapeau'>
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
                                        <input type="text" name="langue_officielle" class="span6" id="langue_officielle"  placeholder="Langue officielle">
                                    </div>			
                                </div>

                            </div>


                            <div class="carte">
                                <legend>Information carte</legend>
                                <div class="control-group">											
                                    <label class="control-label" for="lattitude">Lattitude : </label>
                                    <div class="controls">
                                        <input type="text" name="lattitude" class="span6" id="lattitude"  placeholder="Lattitude">
                                    </div>			
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="longitude">Longitude : </label>
                                    <div class="controls">
                                        <input type="text" name="longitude" class="span6" id="longitude"  placeholder="Longitude">
                                    </div>			
                                </div>
                            </div>

                            <div class="image">
                                <legend>Image</legend>



                                <div class="widget-header">
                                    <h3>Image slider ( taille recommandé <b>2000</b> x <b>1000</b> px )</h3> 
                                    <a href="#image_slider" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image description</a>
                                    <?php modal("image_slider", "Ajout Image Slider", "add_image", "add_image", "Ajouter") ?>
                                </div>
                                <div  class="widget-content"  style="height: auto;">
                                    <table  id="content_end_image_slider" class="table table-striped">
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
                                    <h3>Image Banière ( taille recommandé <b>400</b> x <b>300px</b> )</h3> 
                                    <a href="#banniere" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image banière</a>
                                    <?php modal("banniere", "Ajout Image Banière", "add_image", "add_image", "Ajouter") ?>
                                </div>
                                <div  class="widget-content"  style="height: auto;">
                                    <table  id="content_end_bann    iere" class="table table-striped">
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
                                    <h3>Image Description ( taille recommandé <b>400</b> x <b>300px</b> )</h3> 
                                    <a href="#image_description" role="button" data-toggle="modal" class="btn btn-primary bouton_right">Ajouter image slider</a>
                                    <?php modal("image_description", "Ajout Image Description", "add_image", "add_image", "Ajouter") ?>
                                </div>
                                <div  class="widget-content"  style="height: auto;">
                                    <table  id="content_end_image_description" class="table table-striped">
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
                                <div class="control-group">											
                                    <label class="control-label" for="image_sous_slider">Image Sous slider : </label>
                                    <div class="controls">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse&hellip;  <input type="file" id="image_sous_slider" name='image_sous_slider'>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <p class="help-block">Taille recommandé pour l'image : <b>900</b> x <b>512</b> px</p>
                                    </div>			
                                </div>

                                <label for="picto_1">picto_1:</label>
                                <input type='file' id="picto_1" name='picto_1'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>

                                <label for="picto_2">picto_2:</label>
                                <input type='file' id="picto_2" name='picto_2'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>

                                <label for="picto_3">picto_3:</label>
                                <input type='file' id="picto_3" name='picto_3'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>

                                <label for="picto_4">picto_4:</label>
                                <input type='file' id="picto_4" name='picto_4'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>

                                <label for="picto_5">picto_5:</label>
                                <input type='file' id="picto_5" name='picto_5'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>

                                <label for="picto_6">picto_6:</label>
                                <input type='file' id="picto_6" name='picto_6'/>
                                <br/><span>taille recommandé 64x64px</span>
                                <br/>
                                <br/>
                                <br/>



                            </div>

                            <div class="info_de_vente">
                                <legend>information vente</legend>

                                <div class="ligne">
                                    <h3>Une déclinaison</h3> 
                                    <a href="javascript:;" class="delete_ligne">X</a>
                                    <label for="date_depart">date_depart:</label>
                                    <input type="date" id="date_depart" name="date_depart[]"/>
                                    <br/>

                                    <label for="date_arrivee">date_arrivee:</label>
                                    <input type="date" id="date_arrivee" name="date_arrivee[]"/>
                                    <br/>

                                    <label for="depart">depart:</label>
                                    <input type="text" id="depart" name="depart[]"/>
                                    <br/>

                                    <label for="arrivee">arrivee:</label>
                                    <input type="text" id="arrivee" name="arrivee[]"/>
                                    <br/>

                                    <label for="formalite">formalite:</label>
                                    <textarea NAME="formalite[]" id="formalite"> </textarea>
                                    <br/>

                                    <label for="asavoir">asavoir:</label>
                                    <textarea NAME="asavoir[]" id="asavoir"> </textarea>
                                    <br/>

                                    <label for="comprenant">comprenant:</label>
                                    <textarea NAME="comprenant[]" id="comprenant"> </textarea>
                                    <br/>

                                    <label for="place_dispo">place_dispo:</label>
                                    <input type="text" id="place_dispo" name="place_dispo[]"/>
                                    <br/>

                                    <label for="prix">prix:</label>
                                    <input type="text" id="prix" name="prix[]"/>
                                    <br/>

                                    <label for="special_price">special_price:</label>
                                    <input type="text" id="special_price" name="special_price[]"/>
                                    <br/>

                                    <label for="tva">tva:</label>
                                    <input type="text" id="tva" name="tva[]"/>
                                    <br/>
                                </div>
                            </div>
                            <a class='add_ligne' href="javascript:;" onclick="addLigne()">ajouter</a>

                            <div class="info_deroulement">
                                <legend>information déroulement voyage</legend>

                                <div class="ligne">
                                    <h3>Une déclinaison</h3> 
                                    <a href="javascript:;" class="delete_ligne_deroulement">X</a>
                                    <label for="titre">titre:</label>
                                    <input type="text" id="titre" name="titrederoulement[]"/>
                                    <br/>

                                    <label for="texte">texte:</label>
                                    <textarea NAME="texte[]" id="texte"> </textarea>
                                    <br/>

                                    <label for="jour">jour:</label>
                                    <input type="text" id="jour" name="jour[]"/>
                                    <br/>

                                    <label for="image_description_5">image_description_5:</label>
                                    <input type='file' id="image_description_5" name='image_description_5'/>
                                    <br/><span>taille recommandé 650x435px</span>
                                    <br/>

                                </div>
                            </div>
                            <a class='add_ligne' href="javascript:;" onclick="addLigneDeroulement()">ajouter une journée</a>


                            <br/><br/>
                            <input type="submit" value="enregistrer"/>

                            <?php echo form_close(); ?> 
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>