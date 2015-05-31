<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Textes CMS</h3>
                    <a href="<?php echo base_url('admin/cmss/index') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Ajouter texte CMS</a>
                            </li>
                        </ul>

                        <br>

                        <div class="tab-content">
                            <div class="tab-pane active" id="formcontrols">
                                <div id="liste-text-cms" class="form-horizontal">
                                   

                                   <div class="control-group">                      
                                        <div class="controls error">
                                            <?php echo validation_errors(); ?>
                                            <?php if(isset($error)) echo $error;?>
                                        </div>      
                                    </div>

                                   <?php echo form_open_multipart('admin/model_cms/save'); ?>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Code : </label>
                                          <div class="controls">
                                              <input type="text" name="code" class="span6" id="code" placeholder="Code">
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Label : </label>
                                          <div class="controls">
                                              <input type="text" name="label" class="span6" id="code" placeholder="Label">
                                          </div>      
                                      </div>

                                      <div class="control-group">                     
                                          <label class="control-label" for="value">Valeur : </label>
                                          <div class="controls">
                                              <textarea name="value" id="value" rows="4" cols="50" placeholder="Valeur"> </textarea>
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Activer : </label>
                                          <div class="controls">
                                              <select name="active">
                                                 <option value="1">activé</option> 
                                                 <option value="0">désactivé</option> 
                                           </select>
                                          </div>      
                                      </div>

                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button> 
                                      </div>

                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









