<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-road"></i>
                    <h3>Editer client</h3>
                    <a href="<?php echo base_url('admin/customer/liste') ?>" id="bouton_header" role="button" class="btn" data-toggle="">Retour à la liste</a>
                </div>
                <div class="widget-content">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#formcontrols" data-toggle="tab">Informations générales</a>
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

                                   <?php echo form_open_multipart('admin/model_customer/edit'); ?>

                                      <input type="hidden" name ="id" value="<?php echo $customer[0]->id; ?>">

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Login : </label>
                                          <div class="controls">
                                            <input class="span6" type="text" id="login" name="login" value="<?php echo $customer[0]->login; ?>" placeholder="Login" />
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Nom : </label>
                                          <div class="controls">
                                            <input class="span6" type="text" id="nom" name="nom" value="<?php echo $customer[0]->nom; ?>" placeholder="Nom" />
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Prénom : </label>
                                          <div class="controls">
                                            <input class="span6" type="text" id="prenom" name="prenom" value="<?php echo $customer[0]->prenom; ?>" placeholder="Prénom" />
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Mail : </label>
                                          <div class="controls">
                                            <input class="span6" type="text" id="mail" name="mail" value="<?php echo $customer[0]->mail; ?>" placeholder="Mail" />
                                          </div>      
                                      </div>

                                      <div class="control-group">                      
                                          <label class="control-label" for="titre">Banni : </label>
                                          <div class="controls">
                                              <select name="banni">
                                                 <option <?php if($customer[0]->banni == 1) echo "selected"; ?> value="1">Oui</option> 
                                                  <option <?php if($customer[0]->banni == 0) echo "selected"; ?> value="0">Non</option> 
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









