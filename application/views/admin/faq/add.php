
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Question FAQ</h3>
                    <a href="<?php echo base_url('admin/faqs/index') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
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

                                   <?php echo form_open_multipart('admin/model_faq/save'); ?>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Question : </label>
                                          <div class="controls">
                                              <input type="text" name="question" class="span6" id="question" placeholder="Question">
                                          </div>      
                                      </div>

                                      <div class="control-group">                     
                                          <label class="control-label" for="reponse">Réponse : </label>
                                          <div class="controls">
                                              <textarea name="reponse" id="reponse" rows="4" cols="50" placeholder="Réponse"> </textarea>
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









