<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Editer texte CMS</h3>
                    <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_cms/delete') ?>?id=<?php echo $cms[0]->id ?>" id="bouton_header" role="button" class="btn" data-toggle="">Supprimer ce contenu</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Editer texte CMS</a>
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

                                   <?php echo form_open_multipart('admin/model_cms/edit'); ?>

                                      <input type="hidden" name="id" id="id" value="<?php echo $cms[0]->id; ?>">

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Code : </label>
                                          <div class="controls">
                                              <input type="text" name="code" class="span6 disabled" id="code" placeholder="Code" value="<?php echo $cms[0]->code; ?>" disabled>
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Label : </label>
                                          <div class="controls">
                                              <input type="text" name="label" class="span6" id="code" placeholder="Label" value="<?php echo $cms[0]->label; ?>">
                                          </div>      
                                      </div>

                                      <div class="control-group">                     
                                          <label class="control-label" for="description_first_bloc">Valeur : </label>
                                          <div class="controls">
                                              <textarea name="value" id="value" rows="4" cols="50" placeholder="Valeur"><?php echo $cms[0]->value; ?> </textarea>
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Activer : </label>
                                          <div class="controls">
                                              <select name="active">
                                                 <option value="1" <?php if($cms[0]->active == 1) echo "selected"; ?>>activé</option> 
                                                 <option value="0" <?php if($cms[0]->active == 0) echo "selected"; ?>>désactivé</option> 
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









