<script type="text/javascript">
   confirmation = "Etes vous sûre de vouloir supprimer cette valeur ?";
</script>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Editer FAQ</h3>
                    <a href="<?php echo base_url('admin/faqs/index') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                    <a onclick="return confirm(confirmation);" href="<?php echo base_url('admin/model_faq/delete') ?>?id=<?php echo $faq[0]->id ?>" id="bouton_header" role="button" class="btn" data-toggle="">Supprimer ce contenu</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Ajouter une question FAQ</a>
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

                                   <?php echo form_open_multipart('admin/model_faq/edit'); ?>

                                      <input type="hidden" name="id" id="id" value="<?php echo $faq[0]->id; ?>">

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Question : </label>
                                          <div class="controls">
                                              <input type="text" name="question" class="span6" id="question" placeholder="Question"  value="<?php echo $faq[0]->question; ?>">
                                          </div>      
                                      </div>

                                      <div class="control-group">                     
                                          <label class="control-label" for="reponse">Réponse : </label>
                                          <div class="controls">
                                              <textarea name="reponse" id="reponse" rows="4" cols="50" placeholder="Réponse"><?php echo $faq[0]->reponse; ?> </textarea>
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Activer : </label>
                                          <div class="controls">
                                              <select name="active">
                                                 <option <?php if($faq[0]->active == 1) echo "selected"; ?> value="1">activé</option> 
                                                  <option <?php if($faq[0]->active == 0) echo "selected"; ?> value="0">désactivé</option> 
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









