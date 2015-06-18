<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Newsletter</h3>
                    <a href="<?php echo base_url('admin/newsletters/index') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                    <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_newsletter/delete') ?>?id=<?php echo $newsletter[0]->id ?>" id="bouton_header" role="button" class="btn" data-toggle="">Supprimer ce contenu</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Éditer abonné à la newsletter</a>
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

                                   <?php echo form_open_multipart('admin/model_newsletter/edit'); ?>

                                      <input type="hidden" name="id" value="<?php echo $newsletter[0]->id; ?>">

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Mail de l'abonné : </label>
                                          <div class="controls">
                                              <input type="text" name="mail" class="span6" id="mail" placeholder="Mail de l'abonné"  value="<?php echo $newsletter[0]->mail; ?>">
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Activer : </label>
                                          <div class="controls">
                                              <select name="statut">
                                                 <option <?php if($newsletter[0]->statut == 2) echo "selected"; ?> value="2">Inscrit</option> 
                                                  <option <?php if($newsletter[0]->statut == 0) echo "selected"; ?> value="0">Désinscrit</option> 
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









